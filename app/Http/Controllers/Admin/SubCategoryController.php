<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function subCategoryIndex()
    {
        $categories = Category::all();
        $subCats = SubCategory::latest()->get();
        return view('admin.category.sub-category', compact('subCats','categories'));
    }

    public function subCategoryStore(Request $request)
    {
        // return $request->all();

        $request->validate([
            'category_id' => 'required',
            'sub_category_name_en' => 'required',
            'sub_category_name_hin' => 'required',
        ]);

        $sub_category = new SubCategory();
        $sub_category->category_id = $request->category_id;
        $sub_category->sub_category_name_en = $request->sub_category_name_en;
        $sub_category->sub_category_name_hin = $request->sub_category_name_hin;
        $sub_category->sub_category_slug_en = strtolower(str_replace(' ','-',$request->sub_category_name_en));
        $sub_category->sub_category_slug_hin = str_replace(' ','-',$request->sub_category_name_hin);
        $sub_category->save();

        return redirect()->back()->with('message','Sub Category Added Sccessfully');
    }

    public function subCategoryEdit($id)
    {
        $categories = Category::all();
        $subCats = SubCategory::find($id);
        return view('admin.category.sub-cat-edit', compact('subCats','categories'));
    }

    public function subCategoryUpdate(Request $request, $id)
    {
       // return $request->all();

       $request->validate([
        'category_id' => 'required',
        'sub_category_name_en' => 'required',
        'sub_category_name_hin' => 'required',
    ]);

    $sub_category = SubCategory::find($id);
    $sub_category->category_id = $request->category_id;
    $sub_category->sub_category_name_en = $request->sub_category_name_en;
    $sub_category->sub_category_name_hin = $request->sub_category_name_hin;
    $sub_category->sub_category_slug_en = strtolower(str_replace(' ','-',$request->sub_category_name_en));
    $sub_category->sub_category_slug_hin = str_replace(' ','-',$request->sub_category_name_hin);
    $sub_category->save();

    return redirect()->route('admin.subCategory')->with('message','Sub Category Added Sccessfully');
    }

    public function subCategoryDelete($id)
    {
        SubCategory::findOrFail($id)->delete();
        // $subCat->delete();

        return redirect()->back()->with('message','Sub Category Deleted Sccessfully');
    }

    // --------------- Sub SubCategory-------------//

    public function SubSubCategoryIndex()
    {
        $categories = Category::all();
        $subSubCats = SubSubCategory::latest()->get();
        return view('admin.category.sub-subCategory', compact('subSubCats','categories'));
    }

    public function GetSubCategory($category_id)
    {
        $subCats = SubCategory::where('category_id',$category_id)->latest()->get();

        return json_encode($subCats);
    }

    public function GetSubSubCategory($sub_category_id)
    {
        $subCats = SubSubCategory::where('sub_category_id',$sub_category_id)->latest()->get();

        return json_encode($subCats);
    }

    public function SubSubCategoryStore(Request $request)
    {
          // return $request->all();

          $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'sub_sub_category_name_en' => 'required',
            'sub_sub_category_name_hin' => 'required',
        ]);

        $sub_category = new SubSubCategory();
        $sub_category->category_id = $request->category_id;
        $sub_category->sub_category_id = $request->sub_category_id;
        $sub_category->sub_sub_category_name_en = $request->sub_sub_category_name_en;
        $sub_category->sub_sub_category_name_hin = $request->sub_sub_category_name_hin;
        $sub_category->sub_sub_category_slug_en = strtolower(str_replace(' ','-',$request->sub_sub_category_name_en));
        $sub_category->sub_sub_category_slug_hin = str_replace(' ','-',$request->sub_sub_category_name_hin);
        $sub_category->save();

        return redirect()->back()->with('message','Sub SubCategory Added Sccessfully');
    }

    public function SubSubCategoryEdit($id)
    {
        $categories = Category::all();
        $subCats = SubCategory::all();
        $subSubCats = SubSubCategory::find($id);
        return view('admin.category.sub-subCategory-edit', compact('subCats','categories','subSubCats'));
    }

    public function SubSubCategoryUpdate(Request $request, $id)
    {
        $sub_category = SubSubCategory::find($id);
        $sub_category->category_id = $request->category_id;
        $sub_category->sub_category_id = $request->sub_category_id;
        $sub_category->sub_sub_category_name_en = $request->sub_sub_category_name_en;
        $sub_category->sub_sub_category_name_hin = $request->sub_sub_category_name_hin;
        $sub_category->sub_sub_category_slug_en = strtolower(str_replace(' ','-',$request->sub_sub_category_name_en));
        $sub_category->sub_sub_category_slug_hin = str_replace(' ','-',$request->sub_sub_category_name_hin);
        $sub_category->save();

        return redirect()->route('admin.SubSubCategory')->with('message','Sub SubCategory Updated Sccessfully');
    }

    public function SubSubCategoryDelete($id)
    {
        SubSubCategory::findOrFail($id)->delete();

        return redirect()->back()->with('message','Sub SubCategory Deleted Sccessfully');

    }
}
