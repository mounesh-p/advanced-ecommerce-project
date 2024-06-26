<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class StripeController extends Controller
{
    public function StripeOrder(Request $request)
    {

        if (Session::has('coupon')) {
            $total_amount = Session::get('coupon')['total_amount'];
        } else {
            $total_amount = round(Cart::total());
        }

        \Stripe\Stripe::setApiKey('sk_test_51KRb3eSBFQXShEkpWsOMv6tB05Bkr4DArm6w9QhQ2nySYxSrq7RQTLAWXVnEMCAALl1AWVJS90v4FkXY2G054PMn00aQCMrS9T');

        $token = $_POST['stripeToken'];

        $charge = \Stripe\PaymentIntent::create([
            'amount' => $total_amount * 100,
            'currency' => 'inr',
            'description' => 'Shopify',
            // 'source' => $token,
            'payment_method_types' => ['card'],
            'statement_descriptor' => 'Custom descriptor',
            'metadata' => [
                'order_id' => uniqid(),
            ],
        ]);


        // dd($charge);

        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_id' => $request->state_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'post_code' => $request->post_code,
            'notes' => $request->note,

            'payment_type' => 'Stripe',
            'payment_method' => 'Stripe',
            // 'payment_type' => $charge->payment_method,
            'transaction_id' => $charge->id,
            'currency' => $charge->currency,
            'amount' => $total_amount,
            'order_number' => $charge->metadata->order_id,

            'invoice_no' => 'EOS' . mt_rand(10000000, 99999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'),
            'status' => 'Pending',
            'created_at' => Carbon::now(),
        ]);

        $carts = Cart::content();
        foreach ($carts as $cart) {
            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'color' => $cart->options->color,
                'size' => $cart->options->size,
                'qty' => $cart->qty,
                'price' => $cart->price,
                'created_at' => Carbon::now(),

            ]);
        }

        // Mail Send
        $invoice = Order::find($order_id);
        $data = [
            'invoice_no' => $invoice->invoice_no,
            'amount' => $invoice->amount,
            'name' => $invoice->name,
            'email' => $invoice->email,
        ];

        Mail::to($request->email)->send(new OrderMail($data));



        if (Session::has('coupon')) {
            Session::forget('coupon');
        }

        Cart::destroy();

        return redirect()->route('home')->with('message', 'Order Placed Successfully');
    }
}
