@extends('frontend.layouts.app')


@section('content')

@section('title')
    Cash On Delivery
@endsection

<style>
    .StripeElement {
        height: 40px;
        padding: 10px 12px;
        width: 100%;
        color: #32325d;
        background-color: white;
        border: 1px solid transparent;
        border-radius: 4px;

        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }
</style>


<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li class='active'>Cash On Delivery</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->


<div class="body-content">
    <div class="container">
        <div class="checkout-box ">
            <div class="row">
                <div class="col-md-6">
                    <!-- checkout-progress-sidebar -->
                    <div class="checkout-progress-sidebar ">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                                </div>
                                <div class="">
                                    <ul class="nav nav-checkout-progress list-unstyled">
                                        <li>

                                            @if (Session::has('coupon'))
                                                <strong>Sub Total : </strong> {{ $cartTotal }}
                                                <hr>

                                                <strong>Coupon Name : </strong>
                                                {{ session()->get('coupon')['coupon_name'] }} (
                                                {{ session()->get('coupon')['coupon_discount'] }} )
                                                <hr>
                                                <strong> Discount Coupon : </strong>
                                                $ {{ session()->get('coupon')['discount_amount'] }}
                                                <hr>

                                                <strong>Grand Total : </strong> $
                                                {{ session()->get('coupon')['total_amount'] }}
                                                <hr>
                                            @else
                                                <strong>Sub Total : </strong> {{ $cartTotal }}
                                                <hr>
                                                <strong>Grand Total : </strong> {{ $cartTotal }}
                                                <hr>
                                            @endif

                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkout-progress-sidebar ">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="unicase-checkout-title">Select Payment Method</h4>
                                </div>
                                <div class="row">

                                    <form action="{{ route('cash.order') }}" method="post" id="">
                                        @csrf
                                        <div class="form-row">
                                            <label for="">
                                                <img src="{{ asset('frontend/assets/images/payments/cash.png') }}"
                                                    alt="" srcset="">

                                                <input type="hidden" name="name"
                                                    value="{{ $data['shipping_name'] }}">
                                                <input type="hidden" name="email"
                                                    value="{{ $data['shipping_email'] }}">
                                                <input type="hidden" name="phone"
                                                    value="{{ $data['shipping_mobile'] }}">
                                                <input type="hidden" name="post_code"
                                                    value="{{ $data['post_code'] }}">
                                                <input type="hidden" name="division_id"
                                                    value="{{ $data['division_id'] }}">
                                                <input type="hidden" name="district_id"
                                                    value="{{ $data['district_id'] }}">
                                                <input type="hidden" name="state_id" value="{{ $data['state_id'] }}">
                                                <input type="hidden" name="note" value="{{ $data['note'] }}">
                                            </label>


                                        </div>
                                        <br>
                                        <button class="btn btn-primary">Place Order</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                <!-- checkout-progress-sidebar -->
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->

        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div><!-- /.body-content -->


@endsection
