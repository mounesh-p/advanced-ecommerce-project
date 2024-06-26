<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function couponIndex()
    {
        $coupons = Coupon::orderBy('id','DESC')->get();
        return view('admin.coupon.index', compact('coupons'));
    }

    public function couponStore(Request $request)
    {
        $request->validate([
            'coupon_name' => 'required',
            'coupon_discount' => 'required',
            'coupon_validity' => 'required',
        ]);

        $coupon = new Coupon();
        $coupon->coupon_name = strtoupper($request->coupon_name);
        $coupon->coupon_discount = $request->coupon_discount;
        $coupon->coupon_validity = $request->coupon_validity;
        $coupon->save();

        return redirect()->back()->with('message','Coupon Added Sccessfully');
    }

    public function couponEdit($id)
    {
        $coupon = Coupon::find($id);

        return view('admin.coupon.edit', compact('coupon'));
    }

    public function couponUpdate(Request $request, $id)
    {
        $request->validate([
            'coupon_name' => 'required',
            'coupon_discount' => 'required',
            'coupon_validity' => 'required',
        ]);

        $coupon = Coupon::find($id);
        $coupon->coupon_name = strtoupper($request->coupon_name);
        $coupon->coupon_discount = $request->coupon_discount;
        $coupon->coupon_validity = $request->coupon_validity;
        $coupon->save();

        return redirect()->route('admin.coupon')->with('info','Coupon Updated Sccessfully');
    }

    public function couponDelete($id)
    {
        Coupon::find($id)->delete();
        return redirect()->route('admin.coupon')->with('error','Coupon Updated Sccessfully');

    }
}
