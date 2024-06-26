<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\Slider;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = BlogPost::latest()->get();

        $products = Product::where('status', 1)->latest()->limit(6)->get();

        $sliders = Slider::where('status', 1)->latest()->get();
        $categories = Category::orderBy('category_name_en', 'ASC')->get();

        $features = Product::where('featured', 1)->latest()->limit(6)->get();
        $hot_deals = Product::where('hot_deals', 1)->WhereNotNull('discount_price')->latest()->limit(6)->get();
        $special_offers = Product::where('special_offer', 1)->latest()->limit(6)->get();
        $special_deals = Product::where('special_deals', 1)->latest()->limit(6)->get();

        $skip_category_0 = Category::skip(0)->first();
        $skip_product_0 = Product::where('status', 1)->where('category_id', $skip_category_0->id)->get();

        $skip_category_1 = Category::skip(1)->first();
        $skip_product_1 = Product::where('status', 1)->where('category_id', $skip_category_1->id)->get();

        $skip_brand_1 = Brand::skip(1)->first();
        $skip_brand_product_1 = Product::where('status', 1)->where('brand_id', $skip_brand_1->id)->get();



        return view('frontend.home.index', compact('categories', 'sliders', 'products', 'features', 'hot_deals', 'special_offers', 'special_deals', 'skip_category_0', 'skip_product_0', 'skip_category_1', 'skip_product_1', 'skip_brand_1', 'skip_brand_product_1', 'blogs'));
    }


    public function ProductDetail($id, $slug)
    {
        $product = Product::find($id);

        $size_en = $product->product_size_en;
        $product_size_en = explode(',', $size_en);

        $size_hin = $product->product_size_hin;
        $product_size_hin = explode(',', $size_hin);

        $color_en = $product->product_color_en;
        $product_color_en = explode(',', $color_en);

        $color_hin = $product->product_color_hin;
        $product_color_hin = explode(',', $color_hin);

        $hot_deals = Product::where('hot_deals', 1)->WhereNotNull('discount_price')->latest()->limit(6)->get();


        $relatedProducts = Product::where('status', 1)->where('category_id', $product->category_id)->where('id', '!=', $id)->latest()->get();

        $productImgs = ProductImages::where('product_id', $id)->get();

        return view('frontend.product.product_details', compact('product', 'productImgs', 'product_size_en', 'product_size_hin', 'product_color_en', 'product_color_hin', 'relatedProducts', 'hot_deals'));
    }

    public function TagWiseProducts($tag)
    {
        $products = Product::where('status', 1)->where('product_tags_en', $tag)->where('product_tags_hin', $tag)->orderBy('id', 'DESC')->paginate(3);
        $categories = Category::orderBy('category_name_en', 'ASC')->get();

        return view('frontend.tag.tag-product', compact('products', 'categories'));
    }

    public function SubCatWiseProducts(Request $request, $subcategory_id, $slug)
    {
        $products = Product::where('status', 1)->where('subcategory_id', $subcategory_id)->paginate(3);
        $categories = Category::orderBy('category_name_en', 'ASC')->get();

        $breadcrumb = SubCategory::where('id',$subcategory_id)->get();


        // load more Product with ajax
        if($request->ajax())
        {
            $grid_view = view('frontend.product.grid_view', compact('products'))->render();
            $list_view = view('frontend.product.list_view', compact('products'))->render();

            return response()->json(['grid_view' => $grid_view, 'list_view' => $list_view]);
        }

        return view('frontend.product.subcategory_products', compact('products', 'categories','breadcrumb'));
    }

    public function SubSubCatWiseProducts($subsubcategory_id, $slug)
    {
        $products = Product::where('status', 1)->where('subsubcategory_id', $subsubcategory_id)->paginate(3);
        $categories = Category::orderBy('category_name_en', 'ASC')->get();

        $breadcrumb = SubSubCategory::where('id',$subsubcategory_id)->get();


        return view('frontend.product.subsubcategory_products', compact('products', 'categories','breadcrumb'));
    }


    public function productsModelViewAjax($id)
    {
        $product = Product::with('category', 'brand')->find($id);

        $size = $product->product_size_en;
        $product_size = explode(',', $size);

        $color = $product->product_color_en;
        $product_color = explode(',', $color);

        return response()->json(array(
            'product' => $product,
            'size' => $product_size,
            'color' => $product_color,
        ));
    }

   public function searchProduct(Request $request)
   {
        $request->validate(['search' => 'required']);
        $item = $request->search;

        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $products = Product::where('product_name_en','LIKE',"%$item%")->get();

        return view('frontend.product.search', compact('categories','products'));
   }

   public function productSearch(Request $request)
   {
        $request->validate(['search' => 'required']);
        $item = $request->search;

        $products = Product::where('product_name_en','LIKE',"%$item%")->select('product_name_en','product_thambnail','id','selling_price','product_slug_en')->limit(5)->get();

        return view('frontend.product.search_product', compact('products'));
   }
}
