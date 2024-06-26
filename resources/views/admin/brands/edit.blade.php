@extends('admin.layouts.app')

@section('content')

<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Update Brands</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Brands</li>
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
                 <h3 class="box-title">Update Brands</h3>
               </div>

               <div class="card">
                <div class="card-body">

                  <form action="{{ route('admin.brand.update',$brand->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="brand_id" value="{{ $brand->id }}">
                  <input type="hidden" name="old_image" value="{{ $brand->brand_image }}">
                          <div class="form-group">
                              <label for="brand_name_en">Brand Name Eng</label>
                              <input type="text" name="brand_name_en" value="{{ $brand->brand_name_en }}" id="brand_name_en" class="form-control" placeholder="Brand Name Eng" required>
                              @error('brand_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="brand_name_hin">Brand Name Hindi</label>
                              <input type="text" name="brand_name_hin" value="{{ $brand->brand_name_hin }}" id="brand_name_hin" class="form-control" placeholder="Brand Name Hindi" required>
                              @error('brand_name_hin')
                                    <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                            <label for="brand_image">Chose Image</label>
                            <input type="file" class="form-control" name="brand_image" id="brand_image" placeholder="Choose Image" aria-describedby="fileHelpId">
                            @error('brand_image')
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
