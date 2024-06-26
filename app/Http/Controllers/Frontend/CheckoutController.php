<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ShipDistrict;
use App\Models\ShipState;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{

    public function GetDistrictAjax($division_id)
    {
        $ship = ShipDistrict::where('division_id', $division_id)->orderBy('district_name', 'ASC')->get();

        return json_encode($ship);
    }

    public function GetStateAjax($district_id)
    {
        $ship = ShipState::where('district_id', $district_id)->orderBy('state_name', 'ASC')->get();

        return json_encode($ship);
    }

    public function checkoutStore(Request $request)
    {
        // return $request->all();

        $data = array();
        $data['shipping_name'] = $request->ship_name;
        $data['shipping_email'] = $request->ship_email;
        $data['shipping_mobile'] = $request->ship_mobile;
        $data['post_code'] = $request->post_code;
        $data['note'] = $request->note;
        $data['division_id'] = $request->division_id;
        $data['district_id'] = $request->district_id;
        $data['state_id'] = $request->state_id;

        $cartTotal = Cart::total();

        if ($request->payment_mode == 'stripe') {
            return view('frontend.payment.stripe', compact('data', 'cartTotal'));
        } elseif ($request->payment_mode == 'card') {
        } elseif ($request->payment_mode == 'cash') {
            return view('frontend.payment.cash', compact('data', 'cartTotal'));
        }
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
