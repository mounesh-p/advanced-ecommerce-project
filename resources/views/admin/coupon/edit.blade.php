@extends('admin.layouts.app')

@section('content')

<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Coupon Update</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">Update Coupon</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Update Coupon</h3>
               </div>

               <div class="card">
                <div class="card-body">

                  <form action="{{ route('admin.coupon.update',$coupon->id) }}" method="POST">
                  @csrf
                          <div class="form-group">
                              <label for="coupon_name">Coupon Name </label>
                              <input type="text" name="coupon_name" value="{{ $coupon->coupon_name }}" id="coupon_name" class="form-control" placeholder="Coupon Name" required>
                              @error('coupon_name')
                                    <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="coupon_discount">Coupon Discount (%)</label>
                              <input type="text" name="coupon_discount" value="{{ $coupon->coupon_discount }}" id="coupon_discount" class="form-control" placeholder="Coupon Discount" required>
                              @error('coupon_discount')
                                    <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                            <label for="coupon_validity">Coupon Validity</label>
                            <input type="date" class="form-control" name="coupon_validity"  min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ $coupon->coupon_validity }}">
                            @error('coupon_validity')
                                    <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>

                          <button type="submit" class="float-right btn btn-info" >Update</button>

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
