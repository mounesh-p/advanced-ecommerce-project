@extends('admin.layouts.app')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">All Review</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Tables</li>
                                <li class="breadcrumb-item active" aria-current="page">All Review</li>
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
                            <h3 class="box-title">All Review {{ count($review) }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Summary</th>
                                            <th>Review</th>
                                            <th>User</th>
                                            <th>Product</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($review as $item)
                                            <tr>
                                                <td>{{ $item->comment }}</td>
                                                <td>{{ $item->summary }}</td>
                                                <td>{{ $item->user->name }}</td>
                                                <td>{{ $item->product->product_name_en }}</td>
                                                <td>
                                                    @if ($item->status == 0)
                                                        <span class="badge badge-pill badge-primary">Pending
                                                    @elseif ($item->status == 1)
                                                        <span class="badge badge-pill badge-success">Publish
                                                        </span>
                                                    @endif
                                                </td>

                                                <td width="25%">
                                                    @if ($item->status == 0)
                                                    <a name="" id="" class="btn btn-success"
                                                    href="{{ route('admin.review.approve', $item->id) }}"
                                                    role="button">Approve</a>
                                                @elseif ($item->status == 1)
                                                <a name="" id="" class="btn btn-danger"
                                                href="{{ route('admin.review.approve', $item->id) }}"
                                                role="button">Dis Approve</a>
                                                @endif

                                                <a name="" id="" class="btn btn-danger"
                                                href="{{ route('admin.review.delete', $item->id) }}"
                                                role="button"><i class="fa fa-trash"></i></a>

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


                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
@endsection
