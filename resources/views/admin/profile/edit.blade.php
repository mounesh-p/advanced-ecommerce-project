@extends('admin.layouts.app')

@section('content')
 <div class="container-full">

    <!-- Main content -->
    <section class="content">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="bg-black widget-user-header" style="background: url('../images/gallery/full/10.jpg') center center;">
              <h3 class="widget-user-username">Admin Name : {{ Auth::guard('admin')->user()->name }}</h3>

              <a name="" id="" style="float: right;" class="mb-5 btn btn-rounded btn-primary" href="#" role="button">Edit Profile</a>

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


          <div class="card">
              <div class="card-body">
                <h2 class="card-title">Update Profile</h2>
                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" name="name" value="{{ Auth::guard('admin')->user()->name }}" id="name" class="form-control" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" value="{{ Auth::guard('admin')->user()->email }}" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="profile_photo_path">Select Profile</label>
                  <input type="file" id="image" class="form-control" value="{{ Auth::guard('admin')->user()->profile_photo_path }}" name="profile_photo_path" id="profile_photo_path" placeholder="Profile">
                </div>
                    </div>
                    <div class="col-md-6">
                        <img id="showImage" src="{{ (!empty(Auth::guard('admin')->user()->profile_photo_path)) ? url(Auth::guard('admin')->user()->profile_photo_path) : url('images/no_image.jpg') }}" class="" alt="" height="100" width="">
                    </div>
            </div>

            <button type="submit" class="btn btn-light">Update</button>

        </form>

          </div>


    </section>


    <!-- /.content -->
  </div>


<script type="text/javascript">
    $(document).ready(function()
    {
        $('#image').change(function(e)
        {
            var reader=new FileReader();
            reader.onload=function(e)
            {
             $('#showImage').attr('src',e.target.result);
            }
             reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection
