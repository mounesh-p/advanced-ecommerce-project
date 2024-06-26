<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderPending()
    {
        $orders = Order::where('status', 'Pending')->orderBy('id', 'DESC')->get();

        return view('admin.order.pending', compact('orders'));
    }

    public function orderPendingDetail($order_id)
    {
        $order = Order::where('id', $order_id)->first();
        $orderItem = OrderItem::where('order_id', $order_id)->orderBy('id', 'DESC')->get();

        return view('admin.order.pending_detail', compact('order', 'orderItem'));
    }

    public function orderConfirm()
    {
        $orders = Order::where('status', 'confirm')->orderBy('id', 'DESC')->get();

        return view('admin.order.confirm', compact('orders'));
    }
    public function orderPrecessing()
    {
        $orders = Order::where('status', 'precessing')->orderBy('id', 'DESC')->get();

        return view('admin.order.processing', compact('orders'));
    }
    public function orderPicked()
    {
        $orders = Order::where('status', 'picked')->orderBy('id', 'DESC')->get();

        return view('admin.order.picked', compact('orders'));
    }
    public function orderShipped()
    {
        $orders = Order::where('status', 'shipped')->orderBy('id', 'DESC')->get();

        return view('admin.order.shipped', compact('orders'));
    }
    public function orderDelivered()
    {
        $orders = Order::where('status', 'delivered')->orderBy('id', 'DESC')->get();

        return view('admin.order.delivered', compact('orders'));
    }
    public function orderCancel()
    {
        $orders = Order::where('status', 'cancel')->orderBy('id', 'DESC')->get();

        return view('admin.order.cancel', compact('orders'));
    }

    public function orderStatusUpdate($order_id)
    {
        $order = Order::findOrfail($order_id);

        if ($order->status == 'Pending') {

            $order->status = 'confirm';
            $order->save();

            return redirect()->route('admin.order.pending')->with('message', 'Order Staus Updated Sucessfully');
        } elseif ($order->status == 'confirm') {

            $order->status = 'precessing';
            $order->save();

            return redirect()->route('admin.order.confirm')->with('message', 'Order Staus Updated Sucessfully');
        } elseif ($order->status == 'precessing') {
            $order->status = 'picked';
            $order->save();

            return redirect()->route('admin.order.precessing')->with('message', 'Order Staus Updated Sucessfully');
        } elseif ($order->status == 'picked') {
            $order->status = 'shipped';
            $order->save();

            return redirect()->route('admin.order.picked')->with('message', 'Order Staus Updated Sucessfully');
        } elseif ($order->status == 'shipped') {

            $product = OrderItem::where('order_id',$order_id)->get();
            foreach($product as $item)
            {
                Product::where('id',$item->product_id)->update(['product_qty' => DB::raw('product_qty-'.$item->qty)]);
            }

            $order->status = 'delivered';
            $order->save();

            return redirect()->route('admin.order.shipped')->with('message', 'Order Staus Updated Sucessfully');
        } elseif ($order->status == 'delivered') {
            $order->status = 'cancel';
            $order->save();

            return redirect()->route('admin.order.delivered')->with('message', 'Order Staus Updated Sucessfully');
        }
    }

    public function orderInvoiceDownload($order_id)
    {
        $order = Order::where('id', $order_id)->first();
        $orderItem = OrderItem::where('order_id', $order_id)->orderBy('id', 'DESC')->get();


        $pdf = PDF::loadView('admin.order.order_invoice', compact('order', 'orderItem'))->setPaper('a4')->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);;
        // download PDF file with download method
        return $pdf->download('invoice.pdf');
    }
}
