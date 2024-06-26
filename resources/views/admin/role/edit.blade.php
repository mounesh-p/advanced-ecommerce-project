@extends('admin.layouts.app')

@section('content')
    <div class="container-full">

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Update Admin</h2>
                    <form action="{{ route('admin.user.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf


	 	<input type="hidden" name="id" value="{{ $adminuser->id }}">
         <input type="hidden" name="old_image" value="{{ $adminuser->profile_photo_path }}">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" name="name" value="{{ $adminuser->name }}" id="name" class="form-control"
                                        placeholder="Username" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value="{{ $adminuser->email }}" name="email" id="email"
                                        placeholder="Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profile_photo_path">Select Profile</label>
                                    <input type="file" id="image" class="form-control"
                                        value=""
                                        name="profile_photo_path" id="profile_photo_path" placeholder="Profile">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <img id="showImage"
                                    src="{{ (!empty($adminuser->profile_photo_path)) ? url($adminuser->profile_photo_path) : url('images/no_image.jpg') }}"
                                    class="" alt="" height="100" width="">
                            </div>
                        </div>




                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">

                                    <div class="controls">
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_2" {{ $adminuser->brand == 1 ? 'checked' : '' }} name="brand" value="1">
                                            <label for="checkbox_2">Brand</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_3" {{ $adminuser->category == 1 ? 'checked' : '' }} name="category" value="1">
                                            <label for="checkbox_3">Category</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_4" {{ $adminuser->product == 1 ? 'checked' : '' }} name="product" value="1">
                                            <label for="checkbox_4">Product</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_5" {{ $adminuser->sliders == 1 ? 'checked' : '' }} name="slider" value="1">
                                            <label for="checkbox_5">Slider</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_6" {{ $adminuser->coupon == 1 ? 'checked' : '' }} name="coupons" value="1">
                                            <label for="checkbox_6">Coupons</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">

                                    <div class="controls">
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_7" {{ $adminuser->shipping == 1 ? 'checked' : '' }} name="shipping" value="1">
                                            <label for="checkbox_7">Shipping</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_8" {{ $adminuser->blog == 1 ? 'checked' : '' }} name="blog" value="1">
                                            <label for="checkbox_8">Blog</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_9" {{ $adminuser->settings == 1 ? 'checked' : '' }} name="setting" value="1">
                                            <label for="checkbox_9">Setting</label>
                                        </fieldset>


                                        <fieldset>
                                            <input type="checkbox" id="checkbox_10" {{ $adminuser->return_order == 1 ? 'checked' : '' }} name="returnorder" value="1">
                                            <label for="checkbox_10">Return Order</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_11" {{ $adminuser->review == 1 ? 'checked' : '' }} name="review" value="1">
                                            <label for="checkbox_11"> Review</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">

                                    <div class="controls">
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_12" {{ $adminuser->orders == 1 ? 'checked' : '' }} name="orders" value="1">
                                            <label for="checkbox_12">Orders</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_13" {{ $adminuser->product_stock == 1 ? 'checked' : '' }} name="stock" value="1">
                                            <label for="checkbox_13">Stock</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_14" {{ $adminuser->report == 1 ? 'checked' : '' }} name="reports" value="1">
                                            <label for="checkbox_14">Reports</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_15" {{ $adminuser->brand == 1 ? 'checked' : '' }} name="alluser" value="1">
                                            <label for="checkbox_15">Alluser</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_16" {{ $adminuser->adminuserrole == 1 ? 'checked' : '' }} name="adminuserrole" value="1">
                                            <label for="checkbox_16">Admin User Role</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-light">Update</button>

                    </form>

                </div>


        </section>


        <!-- /.content -->
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
