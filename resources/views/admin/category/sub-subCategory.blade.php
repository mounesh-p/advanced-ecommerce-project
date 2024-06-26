@extends('admin.layouts.app')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Sub SubCategory</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Tables</li>
                                <li class="breadcrumb-item active" aria-current="page">All Sub SubCategory</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">



                <div class="col-md-8">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Sub Category {{ count($subSubCats) }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>
                                            <th>Sub SubCategory English </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subSubCats as $subSubCat)
                                            <tr>
                                                <td>{{ $subSubCat->category->category_name_en }}</td>
                                                <td>{{ $subSubCat->subCategory->sub_category_name_en }}</td>
                                                <td>{{ $subSubCat->sub_sub_category_name_en }}</td>
                                                <td>
                                                    <a name="" id="" class="btn btn-info"
                                                        href="{{ route('admin.SubSubCategory.edit', $subSubCat->id) }}"
                                                        role="button"><i class="fa fa-edit"></i></a>
                                                    <a name="" id="delete" class="btn btn-danger"
                                                        href="{{ route('admin.SubSubCategory.delete', $subSubCat->id) }}"
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
                            <h3 class="box-title">Add New Sub Category</h3>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('admin.SubSubCategory.store') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="category_id">Select Category</label>
                                        <select class="form-control" name="category_id" id="category_id">
                                            <option value="" selected disabled>--select category--</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name_en }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="sub_category_id">Select Sub Category</label>
                                        <select class="form-control" name="sub_category_id" id="sub_category_id">
                                            <option value="" selected disabled>--select sub category--</option>

                                        </select>
                                        @error('sub_category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>


                                    <div class="form-group">
                                        <label for="sub_sub_category_name_en">Sub SubCategory Name Eng</label>
                                        <input type="text" name="sub_sub_category_name_en" value=""
                                            id="sub_sub_category_name_en" class="form-control"
                                            placeholder="Sub SubCategory Name Eng" required>
                                        @error('sub_sub_category_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_sub_category_name_hin">Sub Category Name Hindi</label>
                                        <input type="text" name="sub_sub_category_name_hin" value=""
                                            id="sub_sub_category_name_hin" class="form-control"
                                            placeholder="Sub SubCategory Name Hindi" required>
                                        @error('sub_sub_category_name_hin')
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


    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();

                //   console.log(category_id);

                if (category_id) {
                    $.ajax({
                        url: "{{ url('admin/category/subcategory/ajax/') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="sub_category_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="sub_category_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .sub_category_name_en + '</option>');
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
