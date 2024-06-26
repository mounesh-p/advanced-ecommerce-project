<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogPostCategory;
use Illuminate\Http\Request;

class FrontBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function BlogIndex()
    {
        $blogCats = BlogPostCategory::latest()->get();
        $blogs = BlogPost::latest()->get();
        return view('frontend.blog.index', compact('blogCats', 'blogs'));
    }


    public function BlogShow($blog_id)
    {
        $blog = BlogPost::find($blog_id);
        $blogCats = BlogPostCategory::latest()->get();

        return view('frontend.blog.detail', compact('blog', 'blogCats'));
    }

    public function BlogCatList($blog_cat_id)
    {
        $blogs = BlogPost::where('category_id', $blog_cat_id)->get();
        $blogCats = BlogPostCategory::latest()->get();

        return view('frontend.blog.blog-cat-list', compact('blogs', 'blogCats'));
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
