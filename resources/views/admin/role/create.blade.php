@extends('admin.layouts.app')

@section('content')
    <div class="container-full">

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Add Admin</h2>
                    <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" name="name" value="" id="name" class="form-control"
                                        placeholder="Username" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value="" name="email" id="email"
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
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" value="" name="password" id="password"
                                        placeholder="password" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img id="showImage"
                                    src=""
                                    class="" alt="" height="100" width="">
                            </div>
                        </div>




                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">

                                    <div class="controls">
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_2" name="brand" value="1">
                                            <label for="checkbox_2">Brand</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_3" name="category" value="1">
                                            <label for="checkbox_3">Category</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_4" name="product" value="1">
                                            <label for="checkbox_4">Product</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_5" name="slider" value="1">
                                            <label for="checkbox_5">Slider</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_6" name="coupons" value="1">
                                            <label for="checkbox_6">Coupons</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">

                                    <div class="controls">
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_7" name="shipping" value="1">
                                            <label for="checkbox_7">Shipping</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_8" name="blog" value="1">
                                            <label for="checkbox_8">Blog</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_9" name="setting" value="1">
                                            <label for="checkbox_9">Setting</label>
                                        </fieldset>


                                        <fieldset>
                                            <input type="checkbox" id="checkbox_10" name="returnorder" value="1">
                                            <label for="checkbox_10">Return Order</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_11" name="review" value="1">
                                            <label for="checkbox_11"> Review</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">

                                    <div class="controls">
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_12" name="orders" value="1">
                                            <label for="checkbox_12">Orders</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_13" name="stock" value="1">
                                            <label for="checkbox_13">Stock</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_14" name="reports" value="1">
                                            <label for="checkbox_14">Reports</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_15" name="alluser" value="1">
                                            <label for="checkbox_15">Alluser</label>
                                        </fieldset>

                                        <fieldset>
                                            <input type="checkbox" id="checkbox_16" name="adminuserrole" value="1">
                                            <label for="checkbox_16">Adminuserrole</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-light">Add</button>

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
