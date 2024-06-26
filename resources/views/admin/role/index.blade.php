@extends('admin.layouts.app')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Admin Users</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Tables</li>
                                <li class="breadcrumb-item active" aria-current="page">All Admin Users</li>
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
                            <h3 class="box-title">All Admin Users {{ count($adminuser) }}</h3>
                            <a href="{{ route('add.admin') }}" class="btn btn-danger" style="float: right;">Add Admin
                                User</a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            {{-- <th>Mobile</th> --}}
                                            <th>Status</th>
                                            <th>Access</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($adminuser as $item)
                                            <tr>
                                                <td>
                                                    <img src="{{ !empty($item->profile_photo_path) ? url($item->profile_photo_path) : url('images/no_image.jpg') }}"
                                                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                                        alt="brands" width="100" height="100">
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                {{-- <td>{{ $user->phone }}</td> --}}
                                                <td>
                                                    @if ($item->brand == 1)
                                                        <span class="badge btn-primary">Brand</span>
                                                    @else
                                                    @endif

                                                    @if ($item->category == 1)
                                                        <span class="badge btn-secondary">Category</span>
                                                    @else
                                                    @endif


                                                    @if ($item->product == 1)
                                                        <span class="badge btn-success">Product</span>
                                                    @else
                                                    @endif


                                                    @if ($item->sliders == 1)
                                                        <span class="badge btn-danger">Slider</span>
                                                    @else
                                                    @endif


                                                    @if ($item->coupon == 1)
                                                        <span class="badge btn-warning">Coupons</span>
                                                    @else
                                                    @endif


                                                    @if ($item->shipping == 1)
                                                        <span class="badge btn-info">Shipping</span>
                                                    @else
                                                    @endif


                                                    @if ($item->blog == 1)
                                                        <span class="badge btn-light">Blog</span>
                                                    @else
                                                    @endif


                                                    @if ($item->settings == 1)
                                                        <span class="badge btn-dark">Setting</span>
                                                    @else
                                                    @endif


                                                    @if ($item->return_order == 1)
                                                        <span class="badge btn-primary">Return Order</span>
                                                    @else
                                                    @endif


                                                    @if ($item->review == 1)
                                                        <span class="badge btn-secondary">Review</span>
                                                    @else
                                                    @endif


                                                    @if ($item->orders == 1)
                                                        <span class="badge btn-success">Orders</span>
                                                    @else
                                                    @endif

                                                    @if ($item->product_stock == 1)
                                                        <span class="badge btn-danger">Stock</span>
                                                    @else
                                                    @endif

                                                    @if ($item->report == 1)
                                                        <span class="badge btn-warning">Reports</span>
                                                    @else
                                                    @endif

                                                    @if ($item->alluser == 1)
                                                        <span class="badge btn-info">Alluser</span>
                                                    @else
                                                    @endif

                                                    @if ($item->adminuserrole == 1)
                                                        <span class="badge btn-dark">Adminuserrole</span>
                                                    @else
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->UserOnline())
                                                        <span class="badge badge-pill badge-success">Active Now</span>
                                                    @else
                                                        <span
                                                            class="badge badge-pill badge-danger">{{ Carbon\Carbon::parse($item->last_seen)->diffForHumans() }}</span>
                                                    @endif
                                                </td>


                                                <td>
                                                    <a  id="" class="btn btn-info" href="{{ route('edit.admin.user',$item->id) }}"
                                                        role="button"><i class="fa fa-edit"></i></a>
                                                    <a id="" class="btn btn-danger" href="{{ route('delete.admin.user',$item->id) }}"
                                                        role="button"><i class="fa fa-trash"></i></a></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>



                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
@endsection
