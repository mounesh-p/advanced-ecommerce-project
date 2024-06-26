<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Image;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AllAdminRole()
    {

        $adminuser = Admin::where('type', 2)->latest()->get();
        return view('admin.role.index', compact('adminuser'));
    } // end method


    public function AddAdminRole()
    {
        return view('admin.role.create');
    }

    public function StoreAdminRole(Request $request)
    {
        $image = $request->file('profile_photo_path');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(225, 225)->save('images/admin/' . $name_gen);
        $save_url = 'images/admin/' . $name_gen;

        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'brand' => $request->brand,
            'category' => $request->category,
            'product' => $request->product,
            'sliders' => $request->slider,
            'coupon' => $request->coupons,

            'shipping' => $request->shipping,
            'blog' => $request->blog,
            'settings' => $request->setting,
            'return_order' => $request->returnorder,
            'review' => $request->review,

            'orders' => $request->orders,
            'product_stock' => $request->stock,
            'report' => $request->reports,
            'alluser' => $request->alluser,
            'adminuserrole' => $request->adminuserrole,
            'type' => 2,
            'profile_photo_path' => $save_url,
            'created_at' => Carbon::now(),


        ]);

        $notification = array(
            'message' => 'Admin User Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin.user')->with($notification);
    } // end method



    public function EditAdminRole($id){

    	$adminuser = Admin::findOrFail($id);
    	return view('admin.role.edit',compact('adminuser'));

    }


 public function UpdateAdminRole(Request $request){

    $admin_id = $request->id;
    $old_img = $request->old_image;

    if ($request->file('profile_photo_path')) {

    unlink($old_img);
    $image = $request->file('profile_photo_path');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(225,225)->save('images/admin/'.$name_gen);
    $save_url = 'images/admin/'.$name_gen;

Admin::findOrFail($admin_id)->update([
    'name' => $request->name,
    'email' => $request->email,

    'phone' => $request->phone,
    'brand' => $request->brand,
    'category' => $request->category,
    'product' => $request->product,
    'sliders' => $request->slider,
    'coupon' => $request->coupons,

    'shipping' => $request->shipping,
    'blog' => $request->blog,
    'settings' => $request->setting,
    'return_order' => $request->returnorder,
    'review' => $request->review,

    'orders' => $request->orders,
    'product_stock' => $request->stock,
    'report' => $request->reports,
    'alluser' => $request->alluser,
    'adminuserrole' => $request->adminuserrole,
    'type' => 2,
    'profile_photo_path' => $save_url,
    'created_at' => Carbon::now(),

    ]);

    $notification = array(
        'message' => 'Admin User Updated Successfully',
        'alert-type' => 'info'
    );

    return redirect()->route('all.admin.user')->with($notification);

    }else{

    Admin::findOrFail($admin_id)->update([
    'name' => $request->name,
    'email' => $request->email,

    'phone' => $request->phone,
    'brand' => $request->brand,
    'category' => $request->category,
    'product' => $request->product,
    'sliders' => $request->slider,
    'coupon' => $request->coupons,

    'shipping' => $request->shipping,
    'blog' => $request->blog,
    'settings' => $request->setting,
    'return_order' => $request->returnorder,
    'review' => $request->review,

    'orders' => $request->orders,
    'product_stock' => $request->stock,
    'report' => $request->reports,
    'alluser' => $request->alluser,
    'adminuserrole' => $request->adminuserrole,
    'type' => 2,

    'created_at' => Carbon::now(),

    ]);

    $notification = array(
        'message' => 'Admin User Updated Successfully',
        'alert-type' => 'info'
    );

    return redirect()->route('all.admin.user')->with($notification);

    } // end else

} // end method



    public function DeletedAmin($id)
    {
        $admin = Admin::find($id);
        unlink($admin->profile_photo_path);

        $admin->delete();

    return redirect()->back()->with('error','Admin Deleted Successfullt');

    }
}
