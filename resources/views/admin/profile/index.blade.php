@extends('admin.layouts.app')

@section('content')
 <div class="container-full">

    <!-- Main content -->
    <section class="content">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="bg-black widget-user-header" style="background: url('../images/gallery/full/10.jpg') center center;">
              <h3 class="widget-user-username">Admin Name : {{ Auth::guard('admin')->user()->name }}</h3>

              <a name="" id="" style="float: right;" class="mb-5 btn btn-rounded btn-primary" href="{{ route('admin.profile.edit') }}" role="button">Edit Profile</a>

              <h6 class="widget-user-desc">Admin Name : {{ Auth::guard('admin')->user()->email }}</h6>
            </div>
            <div>
            </div>
            <div class="widget-user-image">
              <img class="rounded-circle" src="{{ (!empty(Auth::guard('admin')->user()->profile_photo_path)) ? url(Auth::guard('admin')->user()->profile_photo_path) : url('images/no_image.jpg') }}" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">12K</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 br-1 bl-1">
                  <div class="description-block">
                    <h5 class="description-header">550</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">158</h5>
                    <span class="description-text">TWEETS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
