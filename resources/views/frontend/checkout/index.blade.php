@extends('frontend.layouts.app')


@section('content')

@section('title')
    Cart Page
@endsection



<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li class='active'>Shopping Cart</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->


<div class="body-content">
    <div class="container">
        <div class="checkout-box ">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel-group checkout-steps" id="accordion">
                        <!-- checkout-step-01  -->
                        <div class="panel panel-default checkout-step-01">
                            <div id="collapseOne" class="panel-collapse collapse in">

                                <!-- panel-body  -->
                                <div class="panel-body">
                                    <div class="row">

                                        <!-- guest-login -->
                                        <div class="col-md-6 col-sm-6 guest-login">
                                            <h4 class="checkout-subtitle"> <b>Shipping Detail</b> </h4>
                                            <form class="register-form" role="form"
                                                action="{{ route('checkout.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="info-title" for="exampleInputEmail1">Shipping Name
                                                        <span>*</span></label>
                                                    <input type="text"
                                                        class="form-control unicase-form-control text-input"
                                                        id="exampleInputEmail1" name="ship_name"
                                                        value="{{ Auth::user()->name }}" placeholder="" required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="info-title" for="exampleInputPassword1">Email
                                                        <span>*</span></label>
                                                    <input type="email"
                                                        class="form-control unicase-form-control text-input"
                                                        id="exampleInputPassword1" name="ship_email"
                                                        value="{{ Auth::user()->email }}" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title" for="exampleInputPassword1">Mobile
                                                        <span>*</span></label>
                                                    <input type="number"
                                                        class="form-control unicase-form-control text-input"
                                                        id="exampleInputPassword1" name="ship_mobile"
                                                        value="{{ Auth::user()->phone }}" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title" for="exampleInputPassword1">Postal Code
                                                        <span>*</span></label>
                                                    <input type="text"
                                                        class="form-control unicase-form-control text-input"
                                                        id="exampleInputPassword1" name="post_code"
                                                        placeholder="Postal Code" required>
                                                </div>

                                        </div>
                                        <!-- guest-login -->

                                        <!-- already-registered-login -->
                                        <div class="col-md-6 col-sm-6 already-registered-login">
                                            <div class="form-group">
                                                <label for="division_id">Division name</label>
                                                <select class="form-control" name="division_id" id="division_id"
                                                    required>
                                                    <option selected disabled>--select-- </option>
                                                    @foreach ($devisions as $devision)
                                                        <option value="{{ $devision->id }}">
                                                            {{ $devision->division_name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="district_id">District name</label>
                                                <select class="form-control" name="district_id" id="district_id"
                                                    required>
                                                    <option selected disabled>--select-- </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="state_id">State name</label>
                                                <select class="form-control" name="state_id" id="state_id" required>
                                                    <option selected disabled>--select-- </option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputPassword1">Note
                                                    <span>*</span></label>
                                                <textarea class="form-control" name="note" id="note" cols="40" rows="5" required></textarea>
                                            </div>


                                        </div>
                                        <!-- already-registered-login -->

                                    </div>
                                </div>
                                <!-- panel-body  -->

                            </div><!-- row -->
                        </div>
                        <!-- checkout-step-01  -->

                    </div><!-- /.checkout-steps -->
                </div>
                <div class="col-md-4">
                    <!-- checkout-progress-sidebar -->
                    <div class="checkout-progress-sidebar ">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                                </div>
                                <div class="">
                                    <ul class="nav nav-checkout-progress list-unstyled">

                                        @foreach ($carts as $cart)
                                            <li> <strong> <img src="/{{ $cart->options->image }}" alt="zdf"
                                                        height="50" width="50">
                                                </strong>
                                            </li>
                                            &nbsp; &nbsp; &nbsp;
                                            <li>
                                                <strong> Qty :</strong>( {{ $cart->qty }} )
                                                <strong> Size :</strong>( {{ $cart->options->size }} )
                                                <strong>Color : </strong>( {{ $cart->options->color }} )
                                            </li> &nbsp; &nbsp; &nbsp;
                                        @endforeach

                                        <hr>


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

                    <div class="checkout-progress-sidebar ">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="unicase-checkout-title">Select Payment Method</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="payment_mode"
                                                    id="payment_mode" value="stripe">
                                                Stripe
                                            </label>
                                            <img src="{{ asset('frontend/assets/images/payments/4.png') }}"
                                                alt="" srcset="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="payment_mode"
                                                id="payment_mode" value="card">
                                            Card
                                        </label>
                                        <img src="{{ asset('frontend/assets/images/payments/3.png') }}"
                                            alt="" srcset="">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="payment_mode"
                                                id="payment_mode" value="cash">
                                            Cash
                                        </label>
                                        <img src="{{ asset('frontend/assets/images/payments/6.png') }}"
                                            alt="" srcset="">
                                    </div>
                                    <hr>
                                    <div class="pt-4">

                                        <button type="submit"
                                            class="btn-upper btn btn-primary checkout-page-button">Proceed to
                                            Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>

                    <!-- checkout-progress-sidebar -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->

        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div><!-- /.body-content -->



<script type="text/javascript">
    $(document).ready(function() {

        $('select[name="division_id"]').on('change', function() {
            var division_id = $(this).val();

            console.log(division_id);

            if (division_id) {
                $.ajax({
                    url: "{{ url('/district-get/ajax/') }}/" + division_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {

                        console.log(data);

                        var d = $('select[name="district_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="district_id"]').append(
                                '<option value="' + value.id + '">' + value
                                .district_name + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });

        $('select[name="district_id"]').on('change', function() {
            var district_id = $(this).val();

            console.log(district_id);

            if (district_id) {
                $.ajax({
                    url: "{{ url('/state-get/ajax/') }}/" + district_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {

                        console.log(data);

                        var d = $('select[name="state_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="state_id"]').append(
                                '<option value="' + value.id + '">' + value
                                .state_name + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
</script>



@endsection
