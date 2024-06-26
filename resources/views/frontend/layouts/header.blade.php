<header class="header-style-1">
    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="icon fa fa-user"></i>
                                @if (session()->get('language') == 'hindi')
                                    मेरी प्रोफ़ाइल
                                @else
                                    My Profile
                                @endif
                            </a></li>

                        <li><a href="{{ route('wishlist') }}"><i class="icon fa fa-heart"></i>
                                @if (session()->get('language') == 'hindi')
                                    विशलिस्ट
                                @else
                                    Wishlist
                                @endif
                            </a>
                        </li>

                        <li><a href="{{ route('myCart') }}"><i class="icon fa fa-shopping-cart"></i>
                                @if (session()->get('language') == 'hindi')
                                    मेरी गाड़ी
                                @else
                                    My Cart
                                @endif
                            </a></li>

                        <li><a href="{{ route('checkout') }}"><i class="icon fa fa-check"></i>Checkout</a></li>
                        <li><a href="" type="button" data-toggle="modal" data-target="#ordertraking"><i class="icon fa fa-check"></i>Order Tracking</a></li>

                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{ route('profile') }}"><i class="icon fa fa-lock"></i>Profile</a></li>
                            @else
                                <li><a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>Login/Register</a></li>
                            @endauth
                        @endif

                    </ul>
                </div>
                <!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle"
                                data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle"
                                data-hover="dropdown" data-toggle="dropdown"><span class="value">
                                    @if (session()->get('language') == 'hindi')
                                        भाषा
                                    @else
                                        Language
                                    @endif
                                </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                @if (session()->get('language') == 'hindi')
                                    <li><a href="{{ route('language') }}">English</a></li>
                                @else
                                    <li><a href="{{ route('language') }}">हिंदी</a></li>
                                @endif

                            </ul>
                        </li>
                    </ul>
                    <!-- /.list-unstyled -->
                </div>
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    @php
    $setting = App\Models\SiteSetting::find(1);
     @endphp
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo"> <a href="/"> <img src="{{ asset($setting->logo) }}"
                                alt="logo"> </a> </div>
                    <!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form action="{{ route('search.product') }}" method="POST">
                            @csrf
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"
                                            href="category.html">Categories <b class="caret"></b></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Electronics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Shoes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Watches</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <input class="search-field" onfocus="search_result_show()" onblur="search_result_hide()" id="search" name="search" placeholder="Search here..." />
                                <button class="search-button" type="submit"></button>
                            </div>
                        </form>
                        <div id="searchProduct"></div>
                    </div>
                    <!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div>
                <!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart"
                            data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                                <div class="basket-item-count"><span class="count" id="cartQty"></span></div>
                                <div class="total-price-basket"> <span class="lbl">cart -</span> <span
                                        class="total-price">
                                        <span class="sign">$ </span><span class="value" id="cartSubTotal"></span>
                                    </span> </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>

                                <div id="miniCart">

                                </div>

                                <div class="clearfix cart-total">
                                    <div class="pull-right"> <span class="text">Sub Total : </span>
                                        $ <span class='price' id="cartSubTotal"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <a href="checkout.html"
                                        class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div>
                                <!-- /.cart-total-->

                            </li>
                        </ul>
                        <!-- /.dropdown-menu-->
                    </div>
                    <!-- /.dropdown-cart -->

                    <!-- ========== SHOPPING CART DROPDOWN : END========================== -->
                </div>
                <!-- /.top-cart-row -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                        class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw"> <a href="/">
                                        @if (session()->get('language') == 'hindi')
                                            घर
                                        @else
                                            Home
                                        @endif
                                    </a> </li>

                                @php
                                    $categories = App\Models\Category::latest()->get();
                                @endphp

                                @foreach ($categories as $category)
                                    <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown"
                                            class="dropdown-toggle" data-toggle="dropdown">
                                            @if (session()->get('language') == 'hindi')
                                                {{ $category->category_name_hin }}
                                            @else
                                                {{ $category->category_name_en }}
                                            @endif
                                        </a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row">

                                                        @php
                                                            $subcategories = App\Models\SubCategory::where('category_id', $category->id)->get();
                                                        @endphp

                                                        @foreach ($subcategories as $subcategory)
                                                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                                <a
                                                                    href="{{ url('subcategory/product/' . $subcategory->id . '/' . $subcategory->sub_category_slug_en) }}">
                                                                    <h2 class="title">
                                                                        @if (session()->get('language') == 'hindi')
                                                                            {{ $subcategory->sub_category_name_hin }}
                                                                        @else
                                                                            {{ $subcategory->sub_category_name_en }}
                                                                        @endif
                                                                    </h2>
                                                                </a>

                                                                @php
                                                                    $subsubcategories = App\Models\SubSubCategory::where('sub_category_id', $subcategory->id)->get();
                                                                @endphp
                                                                @foreach ($subsubcategories as $subsubcategory)
                                                                    <ul class="links">

                                                                        <li>
                                                                            <a
                                                                                href="{{ url('subsubcategory/product/' . $subsubcategory->id . '/' . $subsubcategory->sub_sub_category_slug_en) }}">
                                                                                @if (session()->get('language') == 'hindi')
                                                                                    {{ $subsubcategory->sub_sub_category_name_hin }}
                                                                                @else
                                                                                    {{ $subsubcategory->sub_sub_category_name_en }}
                                                                                @endif
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                @endforeach
                                                            </div>
                                                        @endforeach
                                                        <!-- /.col -->
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                            <img class="img-responsive"
                                                                src="{{ asset('frontend/assets/images/banners/top-menu-banner.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                @endforeach

                                <li class=""> <a href="{{ route('shop') }}">Shop</a></li>

                                {{-- <li class="dropdown navbar-right special-menu"> <a href="#">Todays offer</a></li> --}}
                                <li class="dropdown navbar-right special-menu"> <a
                                        href="{{ route('blog') }}">Blog</a>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.nav-outer -->
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->



    <div class="modal fade" id="ordertraking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Track Your Order </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form method="post" action="{{ route('order.tracking') }}">
                @csrf
               <div class="modal-body">
                <label>Invoice Code</label>
                <input type="text" name="code" required="" class="form-control" placeholder="Your Order Invoice Number">
               </div>

               <button class="btn btn-danger" type="submit" style="margin-left: 17px;"> Track Now </button>

              </form>


            </div>

          </div>
        </div>
      </div>

      <style>

        .search-area{
          position: relative;
        }
          #searchProducts {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: #ffffff;
            z-index: 999;
            border-radius: 8px;
            margin-top: 5px;
          }
        </style>


<script>

    function search_result_hide()
    {
        $("#searchProduct").slideUp();

    }

   function search_result_show()
   {
        $("#searchProduct").slideDown();
   }

</script>


</header>
