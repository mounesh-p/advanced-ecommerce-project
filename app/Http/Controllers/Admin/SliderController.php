<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sliderIndex()
    {
        $sliders = Slider::latest()->get();

        return view('admin.sliders.index', compact('sliders'));
    }

    public function sliderStore(Request $request)
    {
         // return $request->all();

         $request->validate([
            'slider_image' => 'required',
        ]);

        $image = $request->file('slider_image');
        $name_gen = $image->getClientOriginalName();
         Image::make($image)->resize(1200,600)->save(public_path().'/images/sliders/'.$name_gen);
         $upload_path = 'images/sliders/'.$name_gen;


        $slider = new Slider();
        $slider->title = $request->title;
        $slider->desc = $request->desc;
        $slider->slider_image = $upload_path;
        $slider->save();

        return redirect()->back()->with('message','Slider Addes Sccessfully');
    }


    public function sliderEdit($id)
    {
        $slider = Slider::find($id);

        return view('admin.sliders.edit', compact('slider'));
    }

    public function sliderUpdate(Request $request, $id)
    {


        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->desc = $request->desc;

        if($request->has('slider_image'))
        {
            unlink($slider->slider_image);
            $image = $request->file('slider_image');
            $name_gen = $image->getClientOriginalName();
            Image::make($image)->resize(1200,600)->save(public_path().'/images/sliders/'.$name_gen);
            $upload_path = 'images/sliders/'.$name_gen;
             $slider->slider_image = $upload_path;
        }

        $slider->save();

        return redirect()->route('admin.slider')->with('message','Slider Addes Sccessfully');
    }

    public function sliderDelete($id)
    {
        $slider = Slider::find($id);
        unlink($slider->slider_image);

        $slider->delete();

        return redirect()->back()->with('message','Slider Deleted Sccessfully');

    }

    public function status($id)
    {
        $status = Slider::find($id);
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
}
