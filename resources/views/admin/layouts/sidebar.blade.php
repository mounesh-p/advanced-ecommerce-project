@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
// dd($prefix);
@endphp

<section class="sidebar">
    <div class="user-profile">
        <div class="ulogo">
            <a href="index.html">
                <!-- logo for regular state and mobile devices -->
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{ asset('/backend/images/logo-dark.png') }}" alt="">
                    <h3><b>Sunny</b> Admin</h3>
                </div>
            </a>
        </div>
    </div>

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">

        <li class="{{ $route == 'admin.dashboard' ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i data-feather="pie-chart"></i>
                <span>Dashboard</span>
            </a>
        </li>

        @php
            $brand = Auth::guard('admin')->user()->brand == 1;
            $category = Auth::guard('admin')->user()->category == 1;
            $product = Auth::guard('admin')->user()->product == 1;
            $sliders = Auth::guard('admin')->user()->sliders == 1;
            $coupon = Auth::guard('admin')->user()->coupon == 1;
            $shipping = Auth::guard('admin')->user()->shipping == 1;
            $blog = Auth::guard('admin')->user()->blog == 1;
            $setting = Auth::guard('admin')->user()->settings == 1;
            $orders = Auth::guard('admin')->user()->orders == 1;
            $stock = Auth::guard('admin')->user()->product_stock == 1;
            $return_order = Auth::guard('admin')->user()->return_order == 1;
            $report = Auth::guard('admin')->user()->report == 1;
            $alluser = Auth::guard('admin')->user()->alluser == 1;
            $adminrole = Auth::guard('admin')->user()->adminuserrole == 1;
            $review = Auth::guard('admin')->user()->review == 1;

        @endphp


        @if ($brand == true)
            <li class="treeview {{ $prefix == 'admin/brand' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Brands</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="{{ $route == 'admin.brand' ? 'active' : '' }}"><a href="{{ route('admin.brand') }}"><i
                                class="ti-more"></i>All Brands</a></li>
                </ul>
            </li>
            {{-- @else --}}
        @endif
        @if ($category == true)
            <li class="treeview {{ $prefix == 'admin/categoy' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="mail"></i> <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'admin.category' ? 'active' : '' }}"><a
                            href="{{ route('admin.category') }}"><i class="ti-more"></i>All Category</a></li>
                    <li class="{{ $route == 'admin.subCategory' ? 'active' : '' }}"><a
                            href="{{ route('admin.subCategory') }}"><i class="ti-more"></i>All Sub Category</a></li>
                    <li class="{{ $route == 'admin.SubSubCategory' ? 'active' : '' }}"><a
                            href="{{ route('admin.SubSubCategory') }}"><i class="ti-more"></i>All Sub SubCategory</a>
                    </li>
                </ul>
            </li>
        @endif
        @if ($product == true)
            <li class="treeview {{ $prefix == 'admin/product' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'admin.products' ? 'active' : '' }}"><a
                            href="{{ route('admin.products') }}"><i class="ti-more"></i>Add Product</a></li>
                    <li class="{{ $route == 'admin.manageProducts' ? 'active' : '' }}"><a
                            href="{{ route('admin.manageProducts') }}"><i class="ti-more"></i>Manage Product</a></li>
                </ul>
            </li>
        @endif
        @if ($sliders == true)
            <li class="treeview {{ $prefix == 'admin/slider' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Sliders</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="{{ $route == 'admin.slider' ? 'active' : '' }}"><a
                            href="{{ route('admin.slider') }}"><i class="ti-more"></i>All Sliders</a></li>
                </ul>
            </li>
        @endif
        @if ($coupon == true)
            <li class="treeview {{ $prefix == 'admin/coupon' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Coupon</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="{{ $route == 'admin.coupon' ? 'active' : '' }}"><a
                            href="{{ route('admin.coupon') }}"><i class="ti-more"></i>Manage Coupon</a></li>
                </ul>
            </li>
        @endif
        @if ($shipping == true)
            <li class="treeview {{ $prefix == 'admin/division' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Division</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="{{ $route == 'admin.division' ? 'active' : '' }}"><a
                            href="{{ route('admin.division') }}"><i class="ti-more"></i>Manage Division</a></li>

                    <li class="{{ $route == 'admin.district' ? 'active' : '' }}"><a
                            href="{{ route('admin.district') }}"><i class="ti-more"></i>Manage District</a></li>

                    <li class="{{ $route == 'admin.state' ? 'active' : '' }}"><a href="{{ route('admin.state') }}"><i
                                class="ti-more"></i>Manage State</a></li>
                </ul>
            </li>
        @endif
        @if ($blog == true)
            <li class="treeview {{ $prefix == 'admin/blog' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="{{ $route == 'admin.blog.category' ? 'active' : '' }}"><a
                            href="{{ route('admin.blog.category') }}"><i class="ti-more"></i>Bloag Category</a></li>

                    <li class="{{ $route == 'admin.blogPost.index' ? 'active' : '' }}"><a
                            href="{{ route('admin.blogPost.index') }}"><i class="ti-more"></i>Bloag Post</a></li>

                </ul>
            </li>
        @endif
        @if ($setting == true)
            <li class="treeview {{ $prefix == 'admin/site' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="{{ $route == 'admin.setting.site' ? 'active' : '' }}"><a
                            href="{{ route('admin.setting.site') }}"><i class="ti-more"></i>Site Setting</a></li>

                    <li class="{{ $route == 'admin.setting.seo' ? 'active' : '' }}"><a
                            href="{{ route('admin.setting.seo') }}"><i class="ti-more"></i>Seo Setting</a></li>

                </ul>
            </li>
        @endif

        @if ($orders == true)
            <li class="header nav-small-cap">User Interface</li>

            <li class="treeview {{ $prefix == 'admin/order' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Orders</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="{{ $route == 'admin.order.pending' ? 'active' : '' }}"><a
                            href="{{ route('admin.order.pending') }}"><i class="ti-more"></i>Pending Orders</a></li>

                    <li class="{{ $route == 'admin.order.confirm' ? 'active' : '' }}"><a
                            href="{{ route('admin.order.confirm') }}"><i class="ti-more"></i>Confirm Orders</a></li>

                    <li class="{{ $route == 'admin.order.precessing' ? 'active' : '' }}">
                        <a href="{{ route('admin.order.precessing') }}"><i class="ti-more"></i>Precessing Orders</a>
                    </li>

                    <li class="{{ $route == 'admin.order.picked' ? 'active' : '' }}"><a
                            href="{{ route('admin.order.picked') }}"><i class="ti-more"></i>Picked Orders</a></li>

                    <li class="{{ $route == 'admin.order.shipped' ? 'active' : '' }}"><a
                            href="{{ route('admin.order.shipped') }}"><i class="ti-more"></i>Shipped Orders</a></li>

                    <li class="{{ $route == 'admin.order.delivered' ? 'active' : '' }}"><a
                            href="{{ route('admin.order.delivered') }}"><i class="ti-more"></i>Delivered Orders</a>
                    </li>

                    <li class="{{ $route == 'admin.order.cancel' ? 'active' : '' }}"><a
                            href="{{ route('admin.order.cancel') }}"><i class="ti-more"></i>Cancel Orders</a></li>


                </ul>
            </li>
        @endif
        @if ($stock == true)
            <li class="treeview {{ $prefix == 'admin/product/stock' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Product Stock</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'product.stock' ? 'active' : '' }}"><a
                            href="{{ route('product.stock') }}"><i class="ti-more"></i>Manage Stock</a></li>

                </ul>
            </li>
        @endif
        @if ($return_order == true)
            <li class="treeview {{ $prefix == 'admin/return' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Return Orders</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'admin.return.order' ? 'active' : '' }}"><a
                            href="{{ route('admin.return.order') }}"><i class="ti-more"></i>Pending Return Orders</a>
                    </li>
                    <li class="{{ $route == 'admin.return.ReturnAllRequest' ? 'active' : '' }}"><a
                            href="{{ route('admin.return.ReturnAllRequest') }}"><i class="ti-more"></i>All Return
                            Orders</a></li>
                </ul>
            </li>
        @endif

        @if ($report == true)
            <li class="treeview {{ $prefix == 'admin/report' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Report</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'admin.report' ? 'active' : '' }}"><a
                            href="{{ route('admin.report') }}"><i class="ti-more"></i>Manage Report</a></li>
                </ul>
            </li>
        @endif
        @if ($alluser == true)
            <li class="treeview {{ $prefix == 'admin/user' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'admin.user.index' ? 'active' : '' }}"><a
                            href="{{ route('admin.user.index') }}"><i class="ti-more"></i>All Users</a></li>
                </ul>
            </li>
        @endif
        @if ($adminrole == true)
            <li class="treeview {{ $prefix == 'admin/userrole' ? 'active' : '' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Admin User Role </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'all.admin.user' ? 'active' : '' }}"><a
                            href="{{ route('all.admin.user') }}"><i class="ti-more"></i>All Admin User </a></li>
                </ul>
            </li>
        @endif

        @if ($review == true)
            <li class="treeview {{ $prefix == 'admin/review' ? 'active' : '' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Manage Review</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'pending.review' ? 'active' : '' }}"><a
                            href="{{ route('pending.review') }}"><i class="ti-more"></i>All Review</a></li>
                </ul>
            </li>
        @endif

        @if ($brand == true)
            <li class="treeview">
                <a href="#">
                    <i data-feather="grid"></i>
                    <span>Components</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
                    <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
                    <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
                    <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
                    <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
                    <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
                    <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
                    <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
                </ul>
            </li>
        @endif

        @if ($brand == true)
            <li class="treeview">
                <a href="#">
                    <i data-feather="credit-card"></i>
                    <span>Cards</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="card_advanced.html"><i class="ti-more"></i>Advanced Cards</a></li>
                    <li><a href="card_basic.html"><i class="ti-more"></i>Basic Cards</a></li>
                    <li><a href="card_color.html"><i class="ti-more"></i>Cards Color</a></li>
                </ul>
            </li>
        @endif

    </ul>
</section>

<div class="sidebar-footer">
    <!-- item-->
    <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
        aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
    <!-- item-->
    <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
            class="ti-email"></i></a>
    <!-- item-->
    <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
        data-original-title="Logout"><i class="ti-lock"></i></a>
</div>
