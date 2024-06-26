<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::query();
        if(!empty($_GET['category']))
        {
            $slug = explode(',',$_GET['category']);
            $catIds = Category::select('id')->whereIn('category_slug_en',$slug)->pluck('id')->toArray();
            $products = $products->whereIn('category_id', $catIds)->paginate(3);
        }
        if(!empty($_GET['brand']))
        {
            $slug = explode(',',$_GET['brand']);
            $brandIds = Brand::select('id')->whereIn('brand_slug_en',$slug)->pluck('id')->toArray();
            $products = $products->whereIn('brand_id', $brandIds)->paginate(3);
        }
        else{
            $products = Product::where('status', 1)->orderBy('id','DESC')->paginate(3);
        }

        $brands = Brand::orderBy('brand_name_en', 'ASC')->get();
        $categories = Category::orderBy('category_name_en', 'ASC')->get();

        return view('frontend.shop.index', compact('products','categories','brands'));
    }

    public function ShopFilter(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        // Filter by Category

        $catUrl = "";
        if(!empty($data['category']))
        {
            foreach($data['category'] as $category)
            {
                if(empty($catUrl))
                {
                    $catUrl .= '&category='. $category;
                }
                else{
                    $catUrl .= ','. $category;
                }
            }
        }
        // Filter by Brand

        $brandUrl = "";
        if(!empty($data['brand']))
        {
            foreach($data['brand'] as $brand)
            {
                if(empty($brandUrl))
                {
                    $brandUrl .= '&brand='. $brand;
                }
                else{
                    $brandUrl .= ','. $brand;
                }
            }
        }

        return redirect()->route('shop',$catUrl.$brandUrl);


    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
