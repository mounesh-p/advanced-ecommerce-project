<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

use Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function brandIndex()
    {
        $brands = Brand::latest()->get();
        return view('admin.brands.index', compact('brands'));
    }

    public function brandStore(Request $request)
    {
        // return $request->all();

        $request->validate([
            'brand_name_en' => 'required',
            'brand_name_hin' => 'required',
            'brand_image' => 'required',
        ]);

        $image = $request->file('brand_image');
        $name_gen = $image->getClientOriginalName();
         Image::make($image)->resize(300,300)->save(public_path().'/images/brands/'.$name_gen);
         $upload_path = 'images/brands/'.$name_gen;

        Brand::insert([
            'brand_name_en' => $request->brand_name_en,
            'brand_name_hin' => $request->brand_name_hin,
            'brand_slug_en' => strtolower(str_replace(' ','-',$request->brand_name_en)),
            'brand_slug_hin' => str_replace(' ','-',$request->brand_name_hin),
            'brand_image' => $upload_path,
        ]);


        return redirect()->back()->with('message','Brand Addes Sccessfully');

    }

    public function brandEdit($id)
    {
        $brand = Brand::find($id);

        return view('admin.brands.edit', compact('brand'));
    }

    public function brandUpdate(Request $request)
    {
        if($request->has('brand_image'))
        {
            unlink($request->old_image);
            $image = $request->file('brand_image');
         $name_gen = $image->getClientOriginalName();
         Image::make($image)->resize(300,300)->save(public_path().'/images/brands/'.$name_gen);
         $upload_path = 'images/brands/'.$name_gen;


        Brand::findOrFail($request->brand_id)->update([
            'brand_name_en' => $request->brand_name_en,
            'brand_name_hin' => $request->brand_name_hin,
            'brand_slug_en' => strtolower(str_replace(' ','-',$request->brand_name_en)),
            'brand_slug_hin' => str_replace(' ','-',$request->brand_name_hin),
            'brand_image' => $upload_path,
        ]);


        return redirect()->route('admin.brand')->with('message','Brand Updated Sccessfully');
        }
        else
        {
            Brand::findOrFail($request->brand_id)->update([
                'brand_name_en' => $request->brand_name_en,
                'brand_name_hin' => $request->brand_name_hin,
                'brand_slug_en' => strtolower(str_replace(' ','-',$request->brand_name_en)),
                'brand_slug_hin' => str_replace(' ','-',$request->brand_name_hin),
            ]);


            return redirect()->route('admin.brand')->with('message','Brand Updated Sccessfully');
        }

    }




    public function brandDelete($id)
    {
        $brand = Brand::findOrFail($id);
        unlink($brand->brand_image);

        $brand->delete();

        return redirect()->back()->with('message','Brand Deleted Successfully');
    }
}
