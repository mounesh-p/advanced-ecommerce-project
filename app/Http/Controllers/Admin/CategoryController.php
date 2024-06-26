<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CategoryIndex()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index', compact('categories'));
    }

    public function CategoryStore(Request $request)
    {
        // return $request->all();

        $request->validate([
            'category_name_en' => 'required',
            'category_name_hin' => 'required',
            'category_icon' => 'required',
        ]);

        $category = new Category();
        $category->category_name_en = $request->category_name_en;
        $category->category_name_hin = $request->category_name_hin;
        $category->category_slug_en = strtolower(str_replace(' ','-',$request->category_name_en));
        $category->category_slug_hin = str_replace(' ','-',$request->category_name_hin);
        $category->category_icon = $request->category_icon;
        $category->save();

        return redirect()->back()->with('message','Category Added Sccessfully');

    }

    public function CategoryEdit($id)
    {
        $category = Category::find($id);

        return view('admin.category.edit', compact('category'));
    }

    public function CategoryUpdate(Request $request)
    {
        $category = Category::find($request->id);
        $category->category_name_en = $request->category_name_en;
        $category->category_name_hin = $request->category_name_hin;
        $category->category_slug_en = strtolower(str_replace(' ','-',$request->category_name_en));
        $category->category_slug_hin = str_replace(' ','-',$request->category_name_hin);
        $category->category_icon = $request->category_icon;
        $category->save();

        return redirect()->route('admin.category')->with('message','Category Updated Sccessfully');


    }


    public function CategoryDelete($id)
    {
       Category::findOrFail($id)->delete();

        return redirect()->back()->with('message','Category Deleted Successfully');
    }
}
