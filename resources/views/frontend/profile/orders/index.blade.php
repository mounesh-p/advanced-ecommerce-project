@extends('frontend.layouts.app')


@section('content')
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                @include('frontend.profile.sidebar')
                <div class="card mb-4">
                    <div class="col-lg-10">
                        <div class="card-body">
                            <div class="table-responsive">


                                <div class="body-content outer-top-xs">
                                    <div class="row ">
                                        <div class="shopping-cart">
                                            <div class="shopping-cart-table ">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="cart-product-name item">Date</th>
                                                                <th class="cart-edit item">Total Amount</th>
                                                                <th class="cart-edit item">Payment</th>
                                                                <th class="cart-qty item">Invoice</th>
                                                                <th class="cart-sub-total item">Order</th>
                                                                <th class="cart-total last-item">Action</th>
                                                            </tr>
                                                        </thead><!-- /thead -->

                                                        <tbody>
                                                            @foreach ($orders as $order)
                                                                <tr>
                                                                    <td class="cart-product-name-info">
                                                                        {{ $order->order_date }}
                                                                    </td>
                                                                    <td class="cart-product-edit">
                                                                        <span
                                                                            class="cart-sub-total-price">${{ $order->amount }}</span>
                                                                    </td>
                                                                    <td class="cart-product-edit">
                                                                        <span
                                                                            class="cart-sub-total-price">{{ $order->payment_type }}</span>
                                                                    </td>
                                                                    <td class="cart-product-quantity">
                                                                        <span
                                                                            class="cart-sub-total-price">{{ $order->invoice_no }}</span>
                                                                    </td>
                                                                    <td class="">
                                                                        <span
                                                                            class="badge badge-pill cart-sub-total-price">{{ $order->status }}</span>

                                                                            @if($order->return_order == 1)
                                                                            <span class="badge badge-pill badge-warning" style="background:red;">Return Requested </span>

                                                                           @endif
                                                                    </td>
                                                                    <td class="cart-product-grand-total">
                                                                        <a name="" id=""
                                                                            class="btn btn-primary"
                                                                            href="{{ route('my.order.detail', $order->id) }}"
                                                                            role="button"> <i class="fa fa-eye"></i> </a>
                                                                        <a name="" id="" target="_blank"
                                                                            class="btn btn-info"
                                                                            href="{{ route('invoice.download', $order->id) }}"
                                                                            role="button"> <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody><!-- /tbody -->
                                                    </table><!-- /table -->
                                                    <br>
                                                </div>
                                            </div><!-- /.shopping-cart-table -->
                                        </div><!-- /.shopping-cart -->
                                    </div> <!-- /.row -->
                                </div><!-- /.container -->
                            </div><!-- /.body-content -->


                            {{-- <table class="table border-1">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Total Amount</th>
                                            <th>Invoice</th>
                                            <th>Order</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->order_date }}</td>
                                                <td>{{ $order->amount }}</td>
                                                <td>{{ $order->invoice_no }}</td>
                                                <td>{{ $order->status }}</td>
                                                <td>
                                                    <a name="" id="" class="btn btn-primary"
                                                        href="#" role="button"> <i class="fa fa-eye"></i> </a>
                                                    <a name="" id="" class="btn btn-primary"
                                                        href="#" role="button"> <i class="fa fa-download"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table> --}}


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection