<div class="body-content outer-top-xs">

    <div class="col-lg-2">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ !empty(Auth::user()->profile_photo_path) ? url('images/user/' . Auth::user()->profile_photo_path) : url('images/no_image.jpg') }}"
                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <div class="d-flex justify-content-center mb-2 pt-4"><br>
                    <a name="" id="" class="btn btn-block btn-primary" href="{{ route('profile') }}"
                        role="button">Home</a> <br><br>
                    <a name="" id="" class="btn btn-block btn-primary"
                        href="{{ route('profile.edit') }}" role="button">Profile Update</a><br><br>
                    <a name="" id="" class="btn btn-block btn-primary"
                        href="{{ route('user.changePassword') }}" role="button">Change Password</a><br><br>
                    <a name="" id="" class="btn btn-block btn-primary" href="{{ route('my.order') }}"
                        role="button">Orders</a><br><br>

                    <a name="" id="" class="btn btn-block btn-primary"
                        href="{{ route('return.order.list') }}" role="button">Return Orders</a><br><br>

                    <a name="" id="" class="btn btn-block btn-primary"
                        href="{{ route('cancel.order.list') }}" role="button">Cancel Orders</a><br><br>

                    <a name="" id="" class="btn btn-block btn-danger"
                        href="{{ route('user.logout') }}">Logout</a><br><br>
                </div>
            </div>
        </div>

    </div>
</div>
