<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productIndex()
    {
        $categories = Category::latest()->get();
		$brands = Brand::latest()->get();

        return view('admin.product.add-product', compact('categories','brands'));
    }

    public function productStore(Request $request)
    {
        if ($files = $request->file('file')) {
            $destinationPath = 'upload/pdf'; // upload path
            $digitalItem = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath,$digitalItem);
          }


        $image = $request->file('product_thambnail');
        $name_gen = $image->getClientOriginalName();
        Image::make($image)->resize(917,1000)->save(public_path().'/images/products/main/'.$name_gen);
        $save_url = 'images/products/main/'.$name_gen;

        $product = new Product();
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->sub_category_id;
        $product->subsubcategory_id = $request->subsubcategory_id;
        $product->product_name_en = $request->product_name_en;
        $product->product_name_hin = $request->product_name_hin;
        $product->product_slug_en = strtolower(str_replace(' ','-',$request->product_name_en));
        $product->product_slug_hin = strtolower(str_replace(' ','-',$request->product_name_hin));
        $product->product_code = $request->product_code;
        $product->product_qty = $request->product_qty;
        $product->product_tags_en = $request->product_tags_en;
        $product->product_tags_hin = $request->product_tags_hin;
        $product->product_size_en = $request->product_size_en;
        $product->product_size_hin = $request->product_size_hin;
        $product->product_color_en = $request->product_color_en;
        $product->product_color_hin = $request->product_color_hin;
        $product->selling_price = $request->selling_price;
        $product->discount_price = $request->discount_price;
        $product->short_descp_en = $request->short_descp_en;
        $product->short_descp_hin = $request->short_descp_hin;
        $product->long_descp_en = $request->long_descp_en;
        $product->long_descp_hin = $request->long_descp_hin;
        $product->hot_deals = $request->hot_deals;
        $product->featured = $request->featured;
        $product->special_offer = $request->special_offer;
        $product->special_deals = $request->special_deals;

        $product->product_thambnail = $save_url;
        $product->digital_product = $digitalItem;

        $product->status = 1;
        $product->save();

        // Multi Image
        $images = $request->file('multi_images');
        foreach($images as $image)
        {
            $multi_img_name_gen = $image->getClientOriginalName();
            Image::make($image)->resize(917,1000)->save(public_path().'/images/products/multiImages/'.$multi_img_name_gen);
            $upload_path = 'images/products/multiImages/'.$multi_img_name_gen;

            $praduct_image = new ProductImages();
            $praduct_image->product_id = $product->id;
            $praduct_image->photo_name = $upload_path;
            $praduct_image->save();
        }

        return redirect()->back()->with('message','Product Added Successfully');

    }

    public function manageProduct()
    {
        $products = Product::latest()->get();
        return view('admin.product.manage-product', compact('products'));
    }

    public function productEdit($id)
    {
        $multiImgs = ProductImages::where('product_id',$id)->get();

		$brands = Brand::latest()->get();
        $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();
        $subsubcategories = SubSubCategory::latest()->get();

        $product = Product::find($id);
        return view('admin.product.edit-product', compact('brands','categories','subcategories','subsubcategories','product','multiImgs'));
    }

    public function productUpdate(Request $request, $id)
    {
        // return $request->all();

        $product = Product::find($id);
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->sub_category_id;
        $product->subsubcategory_id = $request->subsubcategory_id;
        $product->product_name_en = $request->product_name_en;
        $product->product_name_hin = $request->product_name_hin;
        $product->product_slug_en = strtolower(str_replace(' ','-',$request->product_name_en));
        $product->product_slug_hin = strtolower(str_replace(' ','-',$request->product_name_hin));
        $product->product_code = $request->product_code;
        $product->product_qty = $request->product_qty;
        $product->product_tags_en = $request->product_tags_en;
        $product->product_tags_hin = $request->product_tags_hin;
        $product->product_size_en = $request->product_size_en;
        $product->product_size_hin = $request->product_size_hin;
        $product->product_color_en = $request->product_color_en;
        $product->product_color_hin = $request->product_color_hin;
        $product->selling_price = $request->selling_price;
        $product->discount_price = $request->discount_price;
        $product->short_descp_en = $request->short_descp_en;
        $product->short_descp_hin = $request->short_descp_hin;
        $product->long_descp_en = $request->long_descp_en;
        $product->long_descp_hin = $request->long_descp_hin;
        $product->hot_deals = $request->hot_deals;
        $product->featured = $request->featured;
        $product->special_offer = $request->special_offer;
        $product->special_deals = $request->special_deals;

        // $product->product_thambnail = $save_url;

        $product->status = 1;
        $product->save();

        return redirect()->route('admin.manageProducts')->with('message','Product Updated Successfully');

    }

    public function productMultiImgUpdate(Request $request)
    {
        $images = $request->multi_img;

        foreach($images as $id => $image)
        {
            $imgDlt = ProductImages::find($id);
            unlink($imgDlt->photo_name);

            $multi_img_name_gen = $image->getClientOriginalName();
            Image::make($image)->resize(917,1000)->save(public_path().'/images/products/multiImages/'.$multi_img_name_gen);
            $upload_path = 'images/products/multiImages/'.$multi_img_name_gen;

            $praduct_image = ProductImages::find($id);
            $praduct_image->photo_name = $upload_path;
            $praduct_image->save();
        }

        return redirect()->back()->with('info','Product Multi Image Update Successfully');
    }

    public function productImgUpdate(Request $request, $id)
    {
        $image = $request->file('product_thambnail');
        $name_gen = $image->getClientOriginalName();
        Image::make($image)->resize(917,1000)->save(public_path().'/images/products/main/'.$name_gen);
        $img_url = 'images/products/main/'.$name_gen;

        $image = Product::find($id);
        unlink($image->product_thambnail);
        $image->product_thambnail = $img_url;
        $image->save();

        return redirect()->back()->with('info','Product Image Update Successfully');


    }
    public function MultiImgDelete($id)
    {
        $img = ProductImages::find($id);
        $d = $img->photo_name;
        unlink($d);

        $img->delete();

        return redirect()->back()->with('info','Product Image Deleted Successfully');

    }

    public function status($id)
    {
        $status = Product::find($id);
        if($status->status == 1)
        {
            $status->status = 0;
        }
        else
        {
            $status->status = 1;
        }
        $status->save();

        return redirect()->back()->with('success','Product Status Updated Successfully');

    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        unlink($product->product_thambnail);

        $product->delete();

        $praduct_image = ProductImages::where('product_id',$id)->get();
        foreach($praduct_image as $image)
        {
            unlink($image->photo_name);

            $image->delete();
        }

        return redirect()->back()->with('success','Product Deleted Successfully');

    }


    public function ManageStock()
    {
        $products = Product::latest()->get();
        return view('admin.product.product-stock', compact('products'));
    }
}
