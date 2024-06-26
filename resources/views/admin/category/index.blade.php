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



                <div class="col-8">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Category {{ count($categories) }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Category Icon</th>
                                            <th>Category English</th>
                                            <th>Category Hindi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td><span><i class="{{ $category->category_icon }}"></i></span></td>
                                                <td>{{ $category->category_name_en }}</td>
                                                <td>{{ $category->category_name_hin }}</td>
                                                <td>
                                                    <a name="" id="" class="btn btn-info"
                                                        href="{{ route('admin.category.edit', $category->id) }}"
                                                        role="button"><i class="fa fa-edit"></i></a>
                                                    <a name="" id="delete" class="btn btn-danger"
                                                        href="{{ route('admin.category.delete', $category->id) }}"
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
                            <h3 class="box-title">Add New Category</h3>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('admin.category.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="category_name_en">Category Name Eng</label>
                                        <input type="text" name="category_name_en" value="" id="category_name_en"
                                            class="form-control" placeholder="Category Name Eng" required>
                                        @error('category_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name_hin">Category Name Hindi</label>
                                        <input type="text" name="category_name_hin" value="" id="category_name_hin"
                                            class="form-control" placeholder="Category Name Hindi" required>
                                        @error('category_name_hin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="category_icon">Category Icon</label>
                                        <input type="text" class="form-control" name="category_icon" id="category_icon"
                                            placeholder="Category Icon" aria-describedby="fileHelpId">
                                        @error('Category_icon')
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
