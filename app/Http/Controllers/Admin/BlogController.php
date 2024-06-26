<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogPostCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function BlogCategory()
    {
        $blogcategory = BlogPostCategory::latest()->get();
        return view('admin.blog.category.index', compact('blogcategory'));
    }



    public function BlogCategoryStore(Request $request)
    {
        $request->validate([
            'blog_category_name_en' => 'required',
            'blog_category_name_hin' => 'required',

        ], [
            'blog_category_name_en.required' => 'Input Blog Category English Name',
            'blog_category_name_hin.required' => 'Input Blog Category Hindi Name',
        ]);

        BlogPostCategory::insert([
            'blog_category_name_en' => $request->blog_category_name_en,
            'blog_category_name_hin' => $request->blog_category_name_hin,
            'blog_category_slug_en' => Str::slug($request->blog_category_name_en),
            'blog_category_slug_hin' => str_replace(' ', '-', $request->blog_category_name_hin),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('message', 'Blog Category Inserted Successfully');
    } // end method


    public function BlogCategoryEdit($id)
    {
        $blogcategory = BlogPostCategory::findOrFail($id);
        return view('admin.blog.category.edit', compact('blogcategory'));
    }


    public function BlogCategoryUpdate(Request $request, $id)
    {
        $request->validate([
            'blog_category_name_en' => 'required',
            'blog_category_name_hin' => 'required',

        ], [
            'blog_category_name_en.required' => 'Input Blog Category English Name',
            'blog_category_name_hin.required' => 'Input Blog Category Hindi Name',
        ]);

        BlogPostCategory::find($id)->update([
            'blog_category_name_en' => $request->blog_category_name_en,
            'blog_category_name_hin' => $request->blog_category_name_hin,
            'blog_category_slug_en' => Str::slug($request->blog_category_name_en),
            'blog_category_slug_hin' => str_replace(' ', '-', $request->blog_category_name_hin),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.blog.category')->with('message', 'Blog Category Inserted Successfully');
    }


    public function BlogCategoryUpdateDestroy($id)
    {
        BlogPostCategory::find($id)->delete();
        return redirect()->back()->with('message', 'Blog Category Deleted Successfully');
    }

    // Blog Post

    public function blogIndex()
    {
        $blogs = BlogPost::all();
        return view('admin.blog.post.index', compact('blogs'));
    }

    public function blogCreate()
    {
        $blogsCat = BlogPostCategory::all();
        return view('admin.blog.post.create', compact('blogsCat'));
    }

    public function blogStore(Request $request)
    {
        $request->validate([
            'post_title_en' => 'required',
            'post_title_hin' => 'required',
            'post_image' => 'required',
        ], [
            'post_title_en.required' => 'Input Post Title English Name',
            'post_title_hin.required' => 'Input Post Title Hindi Name',
        ]);


        $image = $request->file('post_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(780, 433)->save(public_path() . '/images/blog/' . $name_gen);
        $upload_path = '/images/blog/' . $name_gen;

        // $image = $request->file('post_image');
        // $name_gen = $image->getClientOriginalName();
        // Image::make($image)->resize(780, 433)->save(public_path() . '/images/blog/' . $name_gen);
        // $upload_path = 'images/blog/' . $name_gen;

        $data = new BlogPost();
        $data->category_id = $request->category_id;
        $data->post_title_en = $request->post_title_en;
        $data->post_title_hin = $request->post_title_hin;
        $data->post_slug_en = Str::slug($request->post_slug_en);
        $data->post_slug_hin = str_replace(' ', '-', $request->post_slug_hin);
        $data->post_image = $upload_path;
        $data->post_details_en = Str::slug($request->post_details_en);
        $data->post_details_hin = str_replace(' ', '-', $request->post_details_hin);
        $data->save();

        return redirect()->route('admin.blogPost.index')->with('message', 'Blog Post Added Successfully');
    }
}
