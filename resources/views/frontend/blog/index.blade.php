@extends('frontend.layouts.app')


@section('content')

@section('title')
    Blog Page
@endsection

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li class='active'>Blog</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="blog-page">
                <div class="col-md-9">

                    @foreach ($blogs as $blog)
                        <div class="blog-post  wow fadeInUp">
                            <a href="{{ route('blog.detail', $blog->id) }}"><img class="img-responsive"
                                    src="{{ asset($blog->post_image) }}" alt=""></a>
                            <h1><a href="{{ route('blog.detail', $blog->id) }}">
                                    @if (session()->get('language') == 'hindi')
                                        {{ $blog->post_title_hin }}
                                    @else
                                        {{ $blog->post_title_en }}
                                    @endif
                                </a>
                            </h1>
                            {{-- <span class="author">John Doe</span> --}}
                            {{-- <span class="review">6 Comments</span> --}}
                            <span
                                class="date-time">{{ Carbon\Carbon::parse($blog->created_ad)->diffForHumans() }}</span>
                            <p>
                                @if (session()->get('language') == 'hindi')
                                    {!! Str::limit($blog->post_details_hin, 200) !!}
                                @else
                                    {!! Str::limit($blog->post_details_en, 200) !!}
                                @endif
                            </p>
                            <a href="{{ route('blog.detail', $blog->id) }}"
                                class="btn btn-upper btn-primary read-more">read more</a>
                        </div>
                    @endforeach


                    <div class="clearfix blog-pagination filters-container  wow fadeInUp"
                        style="padding:0px; background:none; box-shadow:none; margin-top:15px; border:none">

                        <div class="text-right">
                            <div class="pagination-container">
                                <ul class="list-inline list-unstyled">
                                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul><!-- /.list-inline -->
                            </div><!-- /.pagination-container -->
                        </div><!-- /.text-right -->

                    </div><!-- /.filters-container -->
                </div>
                <div class="col-md-3 sidebar">



                    <div class="sidebar-module-container">
                        <div class="search-area outer-bottom-small">
                            <form>
                                <div class="control-group">
                                    <input placeholder="Type to search" class="search-field">
                                    <a href="#" class="search-button"></a>
                                </div>
                            </form>
                        </div>

                        <div class="home-banner outer-top-n outer-bottom-xs">
                            <img src="frontend/assets/images/banners/LHS-banner.jpg" alt="Image">
                        </div>
                        <!-- ==============================================CATEGORY============================================== -->
                        <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                            <h3 class="section-title">Category</h3>
                            <div class="sidebar-widget-body m-t-10">
                                <div class="accordion">
                                    @foreach ($blogCats as $blogCat)
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a href="{{ route('blog.cat.list', $blogCat->id) }}"
                                                    class="accordion-toggle ">
                                                    @if (session()->get('language') == 'hindi')
                                                        {{ $blogCat->blog_category_name_hin }}
                                                    @else
                                                        {{ $blogCat->blog_category_name_en }}
                                                    @endif
                                                </a>
                                            </div><!-- /.accordion-heading -->
                                        </div><!-- /.accordion-group -->
                                    @endforeach



                                </div><!-- /.accordion -->
                            </div><!-- /.sidebar-widget-body -->
                        </div><!-- /.sidebar-widget -->
                        <!-- ============================================== CATEGORY : END ============================================== -->
                        <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                            <h3 class="section-title">tab widget</h3>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#popular" data-toggle="tab">popular post</a></li>
                                <li><a href="#recent" data-toggle="tab">recent post</a></li>
                            </ul>
                            <div class="tab-content" style="padding-left:0">
                                <div class="tab-pane active m-t-20" id="popular">
                                    <div class="blog-post inner-bottom-30 ">
                                        <img class="img-responsive" src="assets/images/blog-post/blog_big_01.jpg"
                                            alt="">
                                        <h4><a href="blog-details.html">Simple Blog Post</a></h4>
                                        <span class="review">6 Comments</span>
                                        <span class="date-time">12/06/16</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

                                    </div>
                                    <div class="blog-post">
                                        <img class="img-responsive" src="assets/images/blog-post/blog_big_02.jpg"
                                            alt="">
                                        <h4><a href="blog-details.html">Simple Blog Post</a></h4>
                                        <span class="review">6 Comments</span>
                                        <span class="date-time">23/06/16</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

                                    </div>
                                </div>

                                <div class="tab-pane m-t-20" id="recent">
                                    <div class="blog-post inner-bottom-30">
                                        <img class="img-responsive" src="assets/images/blog-post/blog_big_03.jpg"
                                            alt="">
                                        <h4><a href="blog-details.html">Simple Blog Post</a></h4>
                                        <span class="review">6 Comments</span>
                                        <span class="date-time">5/06/16</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

                                    </div>
                                    <div class="blog-post">
                                        <img class="img-responsive" src="assets/images/blog-post/blog_big_01.jpg"
                                            alt="">
                                        <h4><a href="blog-details.html">Simple Blog Post</a></h4>
                                        <span class="review">6 Comments</span>
                                        <span class="date-time">10/07/16</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================== PRODUCT TAGS ============================================== -->
                        <div class="sidebar-widget product-tag wow fadeInUp">
                            <h3 class="section-title">Product tags</h3>
                            <div class="sidebar-widget-body outer-top-xs">
                                <div class="tag-list">
                                    <a class="item" title="Phone" href="category.html">Phone</a>
                                    <a class="item active" title="Vest" href="category.html">Vest</a>
                                    <a class="item" title="Smartphone" href="category.html">Smartphone</a>
                                    <a class="item" title="Furniture" href="category.html">Furniture</a>
                                    <a class="item" title="T-shirt" href="category.html">T-shirt</a>
                                    <a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
                                    <a class="item" title="Sneaker" href="category.html">Sneaker</a>
                                    <a class="item" title="Toys" href="category.html">Toys</a>
                                    <a class="item" title="Rose" href="category.html">Rose</a>
                                </div><!-- /.tag-list -->
                            </div><!-- /.sidebar-widget-body -->
                        </div><!-- /.sidebar-widget -->
                        <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
