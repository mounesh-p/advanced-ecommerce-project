@extends('admin.layouts.app')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Coupon</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Tables</li>
                                <li class="breadcrumb-item active" aria-current="page">All Coupon</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">



                <div class="col-8">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Coupon {{ count($coupons) }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Coupon Name</th>
                                            <th>Coupon Discount</th>
                                            <th>Coupon Validity</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupons as $coupon)
                                            <tr>
                                                <td>{{ $coupon->coupon_name }}</td>
                                                <td>{{ $coupon->coupon_discount }}</td>
                                                <td class="w-25">
                                                    {{ Carbon\Carbon::parse($coupon->coupon_validity)->format('D, d F Y') }}
                                                </td>
                                                <td>
                                                    @if ($coupon->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d'))
                                                        <span class="badge badge-pill badge-success">Valid</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">Invalid</span>
                                                    @endif
                                                </td>
                                                <td width="25%">
                                                    <a name="" id="" class="btn btn-info"
                                                        href="{{ route('admin.coupon.edit', $coupon->id) }}"
                                                        role="button"><i class="fa fa-edit"></i></a>
                                                    <a name="" id="delete" class="btn btn-danger"
                                                        href="{{ route('admin.coupon.delete', $coupon->id) }}"
                                                        role="button"><i class="fa fa-trash"></i></a></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    {{-- <tfoot>
                        <tr>
                            <th>Brand Eng</th>
                            <th>Brand Hin</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> --}}
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-4">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add New Coupon</h3>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('admin.coupon.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="coupon_name">Coupon Name </label>
                                        <input type="text" name="coupon_name" value="" id="coupon_name"
                                            class="form-control" placeholder="Coupon Name" required>
                                        @error('coupon_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="coupon_discount">Coupon Discount (%)</label>
                                        <input type="text" name="coupon_discount" value="" id="coupon_discount"
                                            class="form-control" placeholder="Coupon Discount" required>
                                        @error('coupon_discount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="coupon_validity">Coupon Validity</label>
                                        <input type="date" class="form-control" name="coupon_validity"
                                            min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                        @error('coupon_validity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="float-right btn btn-info">Add</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
@endsection
