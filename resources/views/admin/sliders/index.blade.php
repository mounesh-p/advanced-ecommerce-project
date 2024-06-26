@extends('admin.layouts.app')

@section('content')

<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Sliders</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">All Sliders</li>
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
              <h3 class="box-title">All Sliders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Slider Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)

                        <tr>
                            <td>
                                <img src="{{ asset($slider->slider_image) }}" class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="sliders" width="100" height="100">
                            </td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->desc }}</td>
                            <td>
                                @if ($slider->status == 1)
                                    <span class="badge badge-pill badge-success">Active</span>
                                 @else
                                    <span class="badge badge-pill badge-danger">In-Active</span>
                                @endif
                            </td>
                            <td>
                                <a name="" id="" class="btn btn-info" href="{{ route('admin.slider.edit',$slider->id) }}" role="button"><i class="fa fa-edit"></i></a>
                                <a name="" id="delete" class="btn btn-danger" href="{{ route('admin.slider.delete',$slider->id) }}" role="button"><i class="fa fa-trash"></i></a></a>

                                <a name="" id="" class="btn btn-primary" href="{{ route('admin.slider.status',$slider->id) }}" role="button">
                                    @if ($slider->status == 1)
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

        <div class="col-md-4">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Add New Sliders</h3>
               </div>
               <div class="card">
                <div class="card-body">
                  <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                          <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" name="title" value="" id="title" class="form-control" placeholder="Slider Title" required>
                          </div>
                          <div class="form-group">
                              <label for="desc">Description</label>
                              <input type="text" name="desc" value="" id="desc" class="form-control" placeholder="Slider Desc" required>
                          </div>
                          <div class="form-group">
                            <label for="slider_image">Chose Image</label>
                            <input type="file" class="form-control" name="slider_image" id="slider_image" placeholder="Choose Image" aria-describedby="fileHelpId">
                            @error('slider_image')
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
