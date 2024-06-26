<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ReturnOrdersController extends Controller
{
    public function ReturnOrder()
    {
        $orders = Order::where('return_order', 1)->orderBy('id', 'DESC')->get();

        return view('admin.return_order.index', compact('orders'));

    }

    public function ReturnOrderApprove($order_id)
    {
        Order::where('id',$order_id)->update(['return_order' => 2]);

        return redirect()->back()->with('message','Return Order Updated');
    }

   public function ReturnAllRequest()
   {
    $orders = Order::where('return_order', 2)->orderBy('id', 'DESC')->get();

    return view('admin.return_order.all', compact('orders'));
   }
}
