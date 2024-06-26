@extends('frontend.layouts.app')


@section('content')
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                @include('frontend.profile.sidebar')

                <div class="col-lg-8">
                    <div class="card mb-4">
                        <h2 class="card-title">Update Profile</h2>
                        <div class="card-body">
                            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ Auth::user()->name }}" aria-describedby="helpId" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        value="{{ Auth::user()->email }}" aria-describedby="helpId" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        value="{{ Auth::user()->phone }}" aria-describedby="helpId" placeholder="phone">
                                </div>
                                <div class="form-group">
                                    <label for="profile_photo_path">Profile image</label>
                                    <input type="file" class="form-control-file" name="profile_photo_path"
                                        id="profile_photo_path" placeholder="" aria-describedby="fileHelpId">
                                </div>

                                <button type="submit" class="btn btn-primary" role="button">Update</button>
                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
