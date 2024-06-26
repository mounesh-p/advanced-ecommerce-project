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
                        <h2 class="card-title">Update Password</h2>
                        <div class="card-body">

                            <x-jet-validation-errors class="mb-4" />

                            <form action="{{ route('user.updatePassword') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <input type="password" class="form-control" name="current_password"
                                        id="current_password" value="" aria-describedby="helpId"
                                        placeholder="Current Password">
                                </div>
                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="password" class="form-control" name="new_password" id="new_password"
                                        value="" aria-describedby="helpId" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password"
                                        id="confirm_password" value="" aria-describedby="helpId"
                                        placeholder="Confirm Password">
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
