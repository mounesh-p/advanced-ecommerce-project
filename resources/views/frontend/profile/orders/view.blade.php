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
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Shipping Details</h4>
                                    </div>
                                    <hr>
                                    <div class="card-body" style="background: #E9EBEC;">
                                        <table class="table">
                                            <tr>
                                                <th> Shipping Name : </th>
                                                <th> {{ $order->name }} </th>
                                            </tr>

                                            <tr>
                                                <th> Shipping Phone : </th>
                                                <th> {{ $order->phone }} </th>
                                            </tr>

                                            <tr>
                                                <th> Shipping Email : </th>
                                                <th> {{ $order->email }} </th>
                                            </tr>

                                            <tr>
                                                <th> Division : </th>
                                                <th> {{ $order->division->division_name }} </th>
                                            </tr>

                                            <tr>
                                                <th> District : </th>
                                                <th> {{ $order->district->district_name }} </th>
                                            </tr>

                                            <tr>
                                                <th> State : </th>
                                                <th>{{ $order->state->state_name }} </th>
                                            </tr>

                                            <tr>
                                                <th> Post Code : </th>
                                                <th> {{ $order->post_code }} </th>
                                            </tr>

                                            <tr>
                                                <th> Order Date : </th>
                                                <th> {{ $order->order_date }} </th>
                                            </tr>

                                        </table>


                                    </div>

                                </div>

                            </div> <!-- // end col md -5 -->



                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Order Details
                                            <span class="text-danger"> Invoice : {{ $order->invoice_no }}</span>
                                        </h4>
                                    </div>
                                    <hr>
                                    <div class="card-body" style="background: #E9EBEC;">
                                        <table class="table">
                                            <tr>
                                                <th> Name : </th>
                                                <th> {{ $order->user->name }} </th>
                                            </tr>

                                            <tr>
                                                <th> Phone : </th>
                                                <th> {{ $order->user->phone }} </th>
                                            </tr>

                                            <tr>
                                                <th> Payment Type : </th>
                                                <th> {{ $order->payment_method }} </th>
                                            </tr>

                                            <tr>
                                                <th> Tranx ID : </th>
                                                <th> {{ $order->transaction_id }} </th>
                                            </tr>

                                            <tr>
                                                <th> Invoice : </th>
                                                <th class="text-danger"> {{ $order->invoice_no }} </th>
                                            </tr>

                                            <tr>
                                                <th> Order Total : </th>
                                                <th>{{ $order->amount }} </th>
                                            </tr>

                                            <tr>
                                                <th> Order : </th>
                                                <th>
                                                    <span class="badge badge-pill badge-warning"
                                                        style="background: #418DB9;">{{ $order->status }} </span>
                                                </th>
                                            </tr>



                                        </table>


                                    </div>

                                </div>

                            </div> <!-- // 2ND end col md -5 -->


                            <div class="row">



                                <div class="col-md-12">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>

                                                <tr style="background: #e2e2e2;">
                                                    <td class="col-md-1">
                                                        <label for=""> Image</label>
                                                    </td>

                                                    <td class="col-md-3">
                                                        <label for=""> Product Name </label>
                                                    </td>

                                                    <td class="col-md-3">
                                                        <label for=""> Product Code</label>
                                                    </td>


                                                    <td class="col-md-2">
                                                        <label for=""> Color </label>
                                                    </td>

                                                    <td class="col-md-2">
                                                        <label for=""> Size </label>
                                                    </td>

                                                    <td class="col-md-1">
                                                        <label for=""> Quantity </label>
                                                    </td>

                                                    <td class="col-md-1">
                                                        <label for=""> Price </label>
                                                    </td>
                                                    <td class="col-md-1">
                                                        <label for=""> Downlaod </label>
                                                    </td>

                                                </tr>


                                                @foreach ($orderItem as $item)
                                                    <tr>
                                                        <td class="col-md-1">
                                                            <label for=""><img
                                                                    src="{{ asset($item->product->product_thambnail) }}"
                                                                    height="50px;" width="50px;"> </label>
                                                        </td>

                                                        <td class="col-md-3">
                                                            <label for="">
                                                                {{ $item->product->product_name_en }}</label>
                                                        </td>


                                                        <td class="col-md-3">
                                                            <label for="">
                                                                {{ $item->product->product_code }}</label>
                                                        </td>

                                                        <td class="col-md-2">
                                                            <label for=""> {{ $item->color }}</label>
                                                        </td>

                                                        <td class="col-md-2">
                                                            <label for=""> {{ $item->size }}</label>
                                                        </td>

                                                        <td class="col-md-2">
                                                            <label for=""> {{ $item->qty }}</label>
                                                        </td>

                                                        <td class="col-md-2">
                                                            <label for=""> ${{ $item->price }} ( $
                                                                {{ $item->price * $item->qty }} ) </label>
                                                        </td>

                                                        @php
                                                            $file = App\Models\Product::where('id',$item->product_id)->first();
                                                        @endphp

                                                        <td class="col-md-2">

                                                           @if ($order->status == 'Pending')
                                                           <span class="badge badge-pill badge-success" style="background: #418DB9;"> No File</span>  </strong>

                                                           @elseif ($order->status == 'confirm')
                                                           <a target="_blank" href="{{ asset('upload/pdf/'.$file->digital_product) }}">
                                                            <strong>
                                                           <span class="badge badge-pill badge-success" style="background: #FF0000;"> Download Ready</span>  </strong> </a>

                                                           @endif

                                                        </td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- / end col md 8 -->
                            </div> <!-- // END ORDER ITEM ROW -->

                                @if ($order->status !== 'delivered')
                                @else
                                    {{-- @php
                                        $order = App\Models\Order::where('id', $order->id)
                                            ->where('return_reason', '=', null)
                                            ->first();
                                        // dd($order);
                                    @endphp --}}
                                    @if ($order->return_reason == null)
                                        <form action="{{ route('return-oder', $order->id) }}" method="POST">
                                            @csrf
                                            <div class="p-4 pt-4">
                                                <div class="form-group">
                                                    <label for="return_reason">Return Order Reason</label>
                                                    <textarea class="form-control" name="return_reason" id="return_reason" rows="3">Return Order Reason</textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info float-right">Return Order</button>
                                        </form>
                                    @else
                                        <div>
                                            <span class="badge badge-pill badge-warning" style="background: red">You Have
                                                send
                                                return request for this product</span>
                                        </div>
                                    @endif
                                @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
