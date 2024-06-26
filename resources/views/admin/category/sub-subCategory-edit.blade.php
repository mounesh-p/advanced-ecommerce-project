@extends('admin.layouts.app')

@section('content')

<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Update Sub SubCategory</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Sub SubCategory</li>
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
                 <h3 class="box-title">Update New Sub Category</h3>
               </div>

               <div class="card">
                <div class="card-body">

                  <form action="{{ route('admin.SubSubCategory.update',$subSubCats->id) }}" method="POST">
                  @csrf

                            <div class="form-group">
                              <label for="category_id">Select Category</label>
                              <select class="form-control" name="category_id" id="category_id">
                                <option value="" selected disabled>--select category--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $subSubCats->category_id ? 'selected' : '' }}>{{ $category->category_name_en }}</option>
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
                                  @foreach ($subCats as $subCat)
                                  <option value="{{ $subCat->id }}" {{ $subCat->id == $subSubCats->sub_category_id ? 'selected' : '' }}>{{ $subCat->sub_category_name_en }}</option>
                                 @endforeach
                                </select>
                                @error('sub_category_id')
                                      <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>


                          <div class="form-group">
                              <label for="sub_sub_category_name_en">Sub SubCategory Name Eng</label>
                              <input type="text" name="sub_sub_category_name_en" value="{{ $subSubCats->sub_sub_category_name_en }}" id="sub_sub_category_name_en" class="form-control" placeholder="Sub SubCategory Name Eng" required>
                              @error('sub_sub_category_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="sub_sub_category_name_hin">Sub SubCategory Name Hindi</label>
                              <input type="text" name="sub_sub_category_name_hin" value="{{ $subSubCats->sub_sub_category_name_hin }}" id="sub_sub_category_name_hin" class="form-control" placeholder="Sub SubCategory Name Hindi" required>
                              @error('sub_sub_category_name_hin')
                                    <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>

                          <button type="submit" class="float-right btn btn-info" >Add</button>

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
