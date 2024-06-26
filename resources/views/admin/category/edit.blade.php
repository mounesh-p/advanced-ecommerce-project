@extends('admin.layouts.app')

@section('content')

<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Update Category</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
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
                 <h3 class="box-title">Update Category</h3>
               </div>

               <div class="card">
                <div class="card-body">

                  <form action="{{ route('admin.category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  {{-- <input type="hidden" name="brand_id" value="{{ $category->id }}"> --}}
                  <div class="form-group">
                    <label for="category_name_en">Category Name Eng</label>
                    <input type="text" name="category_name_en" value="{{ $category->category_name_en }}" id="category_name_en" class="form-control" placeholder="Category Name Eng" required>
                    @error('category_name_en')
                          <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_name_hin">Category Name Hindi</label>
                    <input type="text" name="category_name_hin" value="{{ $category->category_name_hin }}" id="category_name_hin" class="form-control" placeholder="Category Name Hindi" required>
                    @error('category_name_hin')
                          <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="category_icon">Category Icon</label>
                  <input type="text" class="form-control" name="category_icon" value="{{ $category->category_icon }}" id="category_icon" placeholder="Choose Image" aria-describedby="fileHelpId">
                  @error('Category_icon')
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
