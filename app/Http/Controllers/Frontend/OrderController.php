<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function MyOrder()
    {
        $orders = Order::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('frontend.profile.orders.index', compact('orders'));
    }

    public function MyOrderDetail($order_id)
    {
        $order = Order::where('id', $order_id)->where('user_id', Auth::user()->id)->first();
        $orderItem = OrderItem::where('order_id', $order_id)->orderBy('id', 'DESC')->get();

        return view('frontend.profile.orders.view', compact('order', 'orderItem'));
    }


    public function InvoiceDownload($order_id)
    {
        $order = Order::where('id', $order_id)->where('user_id', Auth::user()->id)->first();
        $orderItem = OrderItem::where('order_id', $order_id)->orderBy('id', 'DESC')->get();


        $pdf = PDF::loadView('frontend.profile.orders.invoice', compact('order', 'orderItem'))->setPaper('a4')->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);;
        // download PDF file with download method
        return $pdf->download('invoice.pdf');
    }


    public function ReturnOrder(Request $request, $order_id)
    {
        Order::findOrfail($order_id)->update([
            'return_date' => Carbon::now()->format('d F Y'),
            'return_reason' => $request->return_reason,
            'return_order' => 1,
        ]);

        return redirect()->route('my.order')->with('message', 'Return Requested Successfully');
    }


    public function ReturnOrderList()
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('return_reason', '!=', NULL)->orderBy('id', 'DESC')->get();
        return view('frontend.profile.orders.return_orders', compact('orders'));
    }
    public function CancelOrderList()
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('status', 'cancel')->orderBy('id', 'DESC')->get();
        return view('frontend.profile.orders.cancel_order', compact('orders'));
    }

    public function OrderTraking(Request $request)
    {
       $track = Order::where('invoice_no',$request->code)->first();

       if($track)
       {
            //  echo "<pre>";
            //  print_r($track);
            return view('frontend.tracking.index', compact('track'));
       }
       else
       {
            return redirect()->back()->with('error','Invoice Code Is Invalid');
       }
    }
}
