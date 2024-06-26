@extends('admin.layouts.app')

@section('content')

<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Update Slider</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Slider</li>
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
                 <h3 class="box-title">Update Slider</h3>
               </div>

               <div class="card">
                <div class="card-body">

                  <form action="{{ route('admin.slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  {{-- <input type="hidden" name="brand_id" value="{{ $brand->id }}"> --}}
                          <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" name="title" value="{{ $slider->title }}" id="title" class="form-control" placeholder="Slider Title" required>
                          </div>
                          <div class="form-group">
                              <label for="desc">Description</label>
                              <input type="text" name="desc" value="{{ $slider->desc }}" id="desc" class="form-control" placeholder="Slider Desc" required>
                          </div>
                          <div class="form-group">
                            <label for="slider_image">Chose Image</label>
                            <input type="file" class="form-control" name="slider_image" id="slider_image" placeholder="Choose Image" aria-describedby="fileHelpId">
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
