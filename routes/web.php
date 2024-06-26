<?php

use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ReturnOrdersController;
use App\Http\Controllers\Admin\ShipAreaController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CashController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontBlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\StripeController;
use App\Http\Controllers\Frontend\WishListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

// Admin
Route::middleware(['auth:admin', config('jetstream.auth_session'), 'verified'])->prefix('admin')->group(function () {

    Route::get('/logout', [AdminController::class, 'destroy'])->name('admin.logout');

    // Admin Profile
    Route::get('/profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
    Route::get('/profile/edit', [AdminProfileController::class, 'profileEdit'])->name('admin.profile.edit');
    Route::post('/profile/update', [AdminProfileController::class, 'profileUpdate'])->name('admin.profile.update');

    Route::get('/profile/password', [AdminProfileController::class, 'adminPassword'])->name('admin.changePassword');
    Route::post('/profile/password/change', [AdminProfileController::class, 'adminPasswordUpdate'])->name('admin.updatePassword');

    // Brand
    Route::prefix('brand')->group(function () {
        Route::get('/index', [BrandController::class, 'brandIndex'])->name('admin.brand');
        Route::post('/store', [BrandController::class, 'brandStore'])->name('admin.brand.store');
        Route::get('/edit/{id}', [BrandController::class, 'brandEdit'])->name('admin.brand.edit');
        Route::post('/update', [BrandController::class, 'brandUpdate'])->name('admin.brand.update');
        Route::get('/delete/{id}', [BrandController::class, 'brandDelete'])->name('admin.brand.delete');
    });
    // Category
    Route::prefix('category')->group(function () {
        Route::get('/index', [CategoryController::class, 'CategoryIndex'])->name('admin.category');
        Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('admin.category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('admin.category.edit');
        Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('admin.category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('admin.category.delete');
        //Sub Category
        Route::get('/sub/index', [SubCategoryController::class, 'subCategoryIndex'])->name('admin.subCategory');
        Route::post('/sub/store', [SubCategoryController::class, 'subCategoryStore'])->name('admin.subCategory.store');
        Route::get('/sub/edit/{id}', [SubCategoryController::class, 'subCategoryEdit'])->name('admin.subCategory.edit');
        Route::post('sub/update/{id}', [SubCategoryController::class, 'subCategoryUpdate'])->name('admin.subCategory.update');
        Route::get('/sub/delete/{id}', [SubCategoryController::class, 'subCategoryDelete'])->name('admin.subCategory.delete');
        // Sub Sub Category
        Route::get('/sub/sub/index', [SubCategoryController::class, 'SubSubCategoryIndex'])->name('admin.SubSubCategory');

        Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);

        Route::get('/sub-subcategory/ajax/{sub_category_id}', [SubCategoryController::class, 'GetSubSubCategory']);

        Route::post('/sub/sub/store', [SubCategoryController::class, 'SubSubCategoryStore'])->name('admin.SubSubCategory.store');
        Route::get('/sub/sub/edit/{id}', [SubCategoryController::class, 'SubSubCategoryEdit'])->name('admin.SubSubCategory.edit');
        Route::post('sub/sub/update/{id}', [SubCategoryController::class, 'SubSubCategoryUpdate'])->name('admin.SubSubCategory.update');
        Route::get('/sub/sub/delete/{id}', [SubCategoryController::class, 'SubSubCategoryDelete'])->name('admin.SubSubCategory.delete');
    });

    //Products
    Route::prefix('product')->group(function () {
        Route::get('/index', [ProductController::class, 'productIndex'])->name('admin.products');
        Route::post('/store', [ProductController::class, 'productStore'])->name('admin.product.store');
        Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('admin.manageProducts');

        Route::get('/edit/{id}', [ProductController::class, 'productEdit'])->name('admin.product.edit');
        Route::post('/update/{id}', [ProductController::class, 'productUpdate'])->name('admin.product.update');
        Route::post('/multiple-image-update', [ProductController::class, 'productMultiImgUpdate'])->name('admin.productMultiImg.update');
        Route::post('/image-update/{id}', [ProductController::class, 'productImgUpdate'])->name('admin.productImage.update');
        Route::get('/multiple-image-delete/{id}', [ProductController::class, 'MultiImgDelete'])->name('admin.MultiImg.delete');
        Route::get('/status/{id}', [ProductController::class, 'status'])->name('admin.product.status');
        Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('admin.product.delete');
    });

    // Slider
    Route::prefix('slider')->group(function () {
        Route::get('/index', [SliderController::class, 'sliderIndex'])->name('admin.slider');
        Route::post('/store', [SliderController::class, 'sliderStore'])->name('admin.slider.store');
        Route::get('/edit/{id}', [SliderController::class, 'sliderEdit'])->name('admin.slider.edit');
        Route::post('/update/{id}', [SliderController::class, 'sliderUpdate'])->name('admin.slider.update');
        Route::get('/delete/{id}', [SliderController::class, 'sliderDelete'])->name('admin.slider.delete');
        Route::get('/status/{id}', [SliderController::class, 'status'])->name('admin.slider.status');
    });

    // Coupon
    Route::prefix('coupon')->group(function () {
        Route::get('/index', [CouponController::class, 'couponIndex'])->name('admin.coupon');
        Route::post('/store', [CouponController::class, 'couponStore'])->name('admin.coupon.store');
        Route::get('/edit/{id}', [CouponController::class, 'couponEdit'])->name('admin.coupon.edit');
        Route::post('/update/{id}', [CouponController::class, 'couponUpdate'])->name('admin.coupon.update');
        Route::get('/delete/{id}', [CouponController::class, 'couponDelete'])->name('admin.coupon.delete');
        Route::get('/status/{id}', [CouponController::class, 'status'])->name('admin.coupon.status');
    });

    // Shipping
    // Division
    Route::prefix('division')->group(function () {
        Route::get('/index', [ShipAreaController::class, 'divisionIndex'])->name('admin.division');
        Route::post('/store', [ShipAreaController::class, 'divisionStore'])->name('admin.division.store');
        Route::get('/edit/{id}', [ShipAreaController::class, 'divisionEdit'])->name('admin.division.edit');
        Route::post('/update/{id}', [ShipAreaController::class, 'divisionUpdate'])->name('admin.division.update');
        Route::get('/delete/{id}', [ShipAreaController::class, 'divisionDelete'])->name('admin.division.delete');
    });
    // District
    Route::prefix('district')->group(function () {
        Route::get('/index', [ShipAreaController::class, 'districtIndex'])->name('admin.district');
        Route::post('/store', [ShipAreaController::class, 'districtStore'])->name('admin.district.store');
        Route::get('/edit/{id}', [ShipAreaController::class, 'districtEdit'])->name('admin.district.edit');
        Route::post('/update/{id}', [ShipAreaController::class, 'districtUpdate'])->name('admin.district.update');
        Route::get('/delete/{id}', [ShipAreaController::class, 'districtDelete'])->name('admin.district.delete');
    });

    // State
    Route::prefix('state')->group(function () {
        Route::get('/index', [ShipAreaController::class, 'stateIndex'])->name('admin.state');
        Route::get('/district/ajax/{division_id}', [ShipAreaController::class, 'getDistrict']);
        Route::post('/store', [ShipAreaController::class, 'stateStore'])->name('admin.state.store');
        Route::get('/edit/{id}', [ShipAreaController::class, 'stateEdit'])->name('admin.state.edit');
        Route::post('/update/{id}', [ShipAreaController::class, 'stateUpdate'])->name('admin.state.update');
        Route::get('/delete/{id}', [ShipAreaController::class, 'stateDelete'])->name('admin.state.delete');
    });

    // Orders
    Route::prefix('order')->group(function () {
        Route::get('/pending', [AdminOrderController::class, 'orderPending'])->name('admin.order.pending');
        Route::get('/detail/{order_id}', [AdminOrderController::class, 'orderPendingDetail'])->name('admin.order.pending.detail');
        Route::get('/confirm', [AdminOrderController::class, 'orderConfirm'])->name('admin.order.confirm');
        Route::get('/processing', [AdminOrderController::class, 'orderPrecessing'])->name('admin.order.precessing');
        Route::get('/picked', [AdminOrderController::class, 'orderPicked'])->name('admin.order.picked');
        Route::get('/shipped', [AdminOrderController::class, 'orderShipped'])->name('admin.order.shipped');
        Route::get('/delivered', [AdminOrderController::class, 'orderDelivered'])->name('admin.order.delivered');
        Route::get('/cancel', [AdminOrderController::class, 'orderCancel'])->name('admin.order.cancel');

        Route::get('/status/update/{order_id}', [AdminOrderController::class, 'orderStatusUpdate'])->name('admin.order.statusUpdate');
        Route::get('/Order/ioice-download/{order_id}', [AdminOrderController::class, 'orderInvoiceDownload'])->name('admin.order.invoice-download');
    });


    // Orders report
    Route::prefix('report')->group(function () {
        Route::get('/view', [ReportController::class, 'ReportView'])->name('admin.report');
        Route::post('/search/by/date', [ReportController::class, 'SearchByDate'])->name('search-by-date');
        Route::post('/search/by/month', [ReportController::class, 'SearchByMonth'])->name('search-by-month');
        Route::post('/search/by/year', [ReportController::class, 'SearchByYear'])->name('search-by-year');
    });
    // Return Orders
    Route::prefix('orders')->group(function () {
        Route::get('/return', [ReturnOrdersController::class, 'ReturnOrder'])->name('admin.return.order');
        Route::get('/return/approve/{order_id}', [ReturnOrdersController::class, 'ReturnOrderApprove'])->name('admin.return.order.approve');
        Route::get('/return/all-orders', [ReturnOrdersController::class, 'ReturnAllRequest'])->name('admin.return.ReturnAllRequest');

    });

    // Users
    Route::prefix('user')->group(function () {
        Route::get('/view', [AdminProfileController::class, 'UserIndex'])->name('admin.user.index');
    });

    // Admin User Role Routes
    Route::prefix('userrole')->group(function(){

    Route::get('/all', [AdminUserController::class, 'AllAdminRole'])->name('all.admin.user');
    Route::get('/add', [AdminUserController::class, 'AddAdminRole'])->name('add.admin');
    Route::post('/store', [AdminUserController::class, 'StoreAdminRole'])->name('admin.user.store');
    Route::get('/edit/{id}', [AdminUserController::class, 'EditAdminRole'])->name('edit.admin.user');
    Route::post('/update', [AdminUserController::class, 'UpdateAdminRole'])->name('admin.user.update');
    Route::get('/delete/{id}', [AdminUserController::class, 'DeletedAmin'])->name('delete.admin.user');

    });
    // Blog
    Route::prefix('blog')->group(function () {
        Route::get('/category/index', [BlogController::class, 'BlogCategory'])->name('admin.blog.category');
        Route::post('/category/strore', [BlogController::class, 'BlogCategoryStore'])->name('admin.blog.category.store');
        Route::get('/category/edit/{id}', [BlogController::class, 'BlogCategoryEdit'])->name('admin.blog.category.edit');
        Route::post('/category/update/{id}', [BlogController::class, 'BlogCategoryUpdate'])->name('admin.blog.category.update');
        Route::get('/category/delete/{id}', [BlogController::class, 'BlogCategoryUpdateDestroy'])->name('admin.blog.category.delete');

        Route::get('/post/index', [BlogController::class, 'blogIndex'])->name('admin.blogPost.index');
        Route::get('/post/create', [BlogController::class, 'blogCreate'])->name('admin.blogPost.create');
        Route::post('/post/store', [BlogController::class, 'blogStore'])->name('admin.blogPost.store');
    });

    // Setting
    Route::prefix('site')->group(function () {
        Route::get('/index', [SiteSettingController::class, 'SiteSetting'])->name('admin.setting.site');
        Route::post('/site/update', [SiteSettingController::class, 'SiteSettingUpdate'])->name('update.sitesetting');
        Route::get('/seo', [SiteSettingController::class, 'SeoSetting'])->name('admin.setting.seo');
        Route::post('/seo/update', [SiteSettingController::class, 'SeoSettingUpdate'])->name('update.seosetting');
    });

    // Review
    Route::prefix('review')->group(function () {
        Route::get('/index', [ReviewController::class, 'PendingReview'])->name('pending.review');
        Route::get('/approve/{id}', [ReviewController::class, 'ReviewApprove'])->name('admin.review.approve');
        Route::get('/delete/{id}', [ReviewController::class, 'deleteReview'])->name('admin.review.delete');

    });

    // Manage Stock
    Route::prefix('product/stock')->group(function () {
        Route::get('/index', [ProductController::class, 'ManageStock'])->name('product.stock');


    });




    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');
});



// Front Side

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/user/logout', [ProfileController::class, 'userLogout'])->name('user.logout');

Route::prefix('user')->middleware(['auth:sanctum,web', config('jetstream.auth_session'), 'verified'])->group(function () {

    // user profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/update', [ProfileController::class, 'profile'])->name('profile.edit');
    Route::post('/profile/update/edit', [ProfileController::class, 'profileUpdate'])->name('profile.update');

    Route::get('/profile/password', [ProfileController::class, 'userPassword'])->name('user.changePassword');
    Route::post('/profile/password/change', [ProfileController::class, 'userPasswordUpdate'])->name('user.updatePassword');


    // Product Wish List
    Route::get('/wishlist', [WishListController::class, 'index'])->name('wishlist');
    Route::get('/wishlist-remove/{id}', [WishListController::class, 'wishlistRemove']);
    Route::get('/product-wishlist', [WishListController::class, 'wishlist']);

    // Checkout
    Route::get('/checkout', [CartController::class, 'checkoutCart'])->name('checkout');
    Route::post('/stripe/order', [StripeController::class, 'StripeOrder'])->name('stripe.order');
    Route::post('/cash/order', [CashController::class, 'CashOrder'])->name('cash.order');

    // Orders
    Route::get('/my/orders', [OrderController::class, 'MyOrder'])->name('my.order');
    Route::get('/my/orders/detail/{order_id}', [OrderController::class, 'MyOrderDetail'])->name('my.order.detail');
    Route::get('/invoice_download/{order_id}', [OrderController::class, 'InvoiceDownload'])->name('invoice.download');
    Route::post('/return-request/{order_id}', [OrderController::class, 'ReturnOrder'])->name('return-oder');
    Route::get('/return-oder/list/', [OrderController::class, 'ReturnOrderList'])->name('return.order.list');
    Route::get('/cancel-oder/list/', [OrderController::class, 'CancelOrderList'])->name('cancel.order.list');

    //Review
    Route::post('/review/store', [ReviewController::class, 'ReviewStore'])->name('review.store');


    /// Order Traking Route
    Route::post('/order/tracking', [OrderController::class, 'OrderTraking'])->name('order.tracking');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Add To Wishlist
Route::post('/product-add-wishlist/{product_id}', [WishListController::class, 'AddToWishList']);

// Cart Page
Route::get('/cart', [CartController::class, 'index'])->name('myCart');
Route::get('/user/cart-product', [CartController::class, 'cartProduct']);
Route::get('/user/product/cart-remove/{rowId}', [CartController::class, 'CartRemove']);
Route::get('/cart/increment/{rowId}', [CartController::class, 'CartIncrement']);
Route::get('/cart/decrement/{rowId}', [CartController::class, 'CartDecrement']);


// Language
Route::get('/language', [LanguageController::class, 'language'])->name('language');

// Product Detail
Route::get('/Product/detail/{id}/{slug}', [HomeController::class, 'ProductDetail'])->name('product.detail');

// Tag Product Detail
Route::get('/product/tag/{tag}', [HomeController::class, 'TagWiseProducts'])->name('product.tag');

// Sub Category Product Detail
Route::get('/subcategory/product/{subcategory_id}/{slug}/', [HomeController::class, 'SubCatWiseProducts'])->name('product.subcategory');

// Sub SubCategory Detail
Route::get('/subsubcategory/product/{subsubcategory_id}/{slug}/', [HomeController::class, 'SubSubCatWiseProducts'])->name('product.subsubcategory');

// Product Model View
Route::get('/product/view/modal/{id}/', [HomeController::class, 'productsModelViewAjax']);

// Add To Cart
Route::post('/cart/data/store/{id}/', [CartController::class, 'AddToCart']);

// Product Mini Cart
Route::get('/product/mini/cart/', [CartController::class, 'miniCart']);

// Product Mini Cart Remove
Route::get('/product/mini/cart-remove/{rowId}', [CartController::class, 'miniCartRemove']);


// Coupon Option
Route::post('/coupon-apply', [CartController::class, 'couponApply']);
Route::get('/coupon-calculation', [CartController::class, 'couponCal']);
Route::get('/coupon-remove', [CartController::class, 'couponRemove']);

Route::get('/district-get/ajax/{division_id}', [CheckoutController::class, 'GetDistrictAjax']);
Route::get('/state-get/ajax/{district_id}', [CheckoutController::class, 'GetStateAjax']);

Route::post('/checkout/store', [CheckoutController::class, 'checkoutStore'])->name('checkout.store');

// Blog
Route::get('/Blog', [FrontBlogController::class, 'BlogIndex'])->name('blog');
Route::get('/Blog/detail/{blog_id}', [FrontBlogController::class, 'BlogShow'])->name('blog.detail');
Route::get('/Blog/cat/list/{blog_cat_id}', [FrontBlogController::class, 'BlogCatList'])->name('blog.cat.list');

// Search Product
Route::post('/search',[HomeController::class, 'searchProduct'])->name('search.product');

// Advance Search Product
Route::post('/search-product',[HomeController::class, 'productSearch']);

// Shop
Route::get('/shop',[ShopController::class, 'index'])->name('shop');
Route::post('/shop/filter',[ShopController::class, 'ShopFilter'])->name('shop.filter');
