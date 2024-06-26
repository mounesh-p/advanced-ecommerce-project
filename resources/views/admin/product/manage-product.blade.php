@extends('admin.layouts.app')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Category</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Tables</li>
                                <li class="breadcrumb-item active" aria-current="page">All Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Category {{ count($products) }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Product Image</th>
                                            <th>Product Name</th>
                                            <th>Product Price</th>
                                            <th>Product Quantity</th>
                                            <th>Discount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td><img src="{{ asset($product->product_thambnail) }}" alt="product_img"
                                                        width="100" height="100" srcset=""></td>
                                                <td>{{ $product->product_name_en }}</td>
                                                <td>₹ {{ $product->selling_price }}</td>
                                                <td>{{ $product->product_qty }} Piece</td>
                                                <td>
                                                    @if ($product->discount_price == null)
                                                        <span class="badge badge-pill badge-danger">No Discoumt</span>
                                                    @else
                                                        @php
                                                            $amount = $product->selling_price - $product->discount_price;
                                                            $discount = ($amount / $product->selling_price) * 100;
                                                        @endphp
                                                        <span class="badge badge-pill badge-danger">{{ round($discount) }}
                                                            %</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($product->status == 1)
                                                        <span class="badge badge-pill badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">In-Active</span>
                                                    @endif
                                                </td>
                                                <td width="25%">
                                                    <a name="" id="" class="btn btn-primary"
                                                        href="{{ route('admin.product.edit', $product->id) }}"
                                                        role="button"><i class="fa fa-eye"></i></a>
                                                    <a name="" id="" class="btn btn-info"
                                                        href="{{ route('admin.product.edit', $product->id) }}"
                                                        role="button"><i class="fa fa-edit"></i></a>
                                                    <a name="" id="delete" class="btn btn-danger"
                                                        href="{{ route('admin.product.delete', $product->id) }}"
                                                        role="button"><i class="fa fa-trash"></i></a></a>

                                                    <a name="" id="" class="btn btn-primary"
                                                        href="{{ route('admin.product.status', $product->id) }}"
                                                        role="button">
                                                        @if ($product->status == 1)
                                                            <i class="fa fa-arrow-down"></i>
                                                        @else
                                                            <i class="fa fa-arrow-up"></i>
                                                        @endif

                                                    </a>
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
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
@endsection
