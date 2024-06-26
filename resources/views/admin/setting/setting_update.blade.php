@extends('admin.layouts.app')

@section('content')
    <div class="container-full">

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Site Setting</h2>

                    <x-jet-validation-errors class="mb-4" />


                    <form method="post" action="{{ route('update.sitesetting') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $setting->id }}">
                        <div class="row">
                            <div class="col-12">

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <h5>Site Logo <span class="text-danger"> </span></h5>
                                            <div class="controls">
                                                <input type="file" name="logo" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <h5>Phone One <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="phone_one" class="form-control"
                                                    value="{{ $setting->phone_one }}">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <h5>Phone Two <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="phone_two" class="form-control"
                                                    value="{{ $setting->phone_two }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Email <span class="text-danger">*</span></h5>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $setting->email }}">
                                        </div>
                                        <div class="form-group">
                                            <h5>Company Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="company_name" class="form-control"
                                                    value="{{ $setting->company_name }}">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <h5>Company Address <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="company_address" class="form-control"
                                                    value="{{ $setting->company_address }}">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <h5>Facebook <span class="text-danger">*</span></h5>

                                            <input type="text" name="facebook" class="form-control"
                                                value="{{ $setting->facebook }}">
                                        </div>


                                        <div class="form-group">
                                            <h5>Twitter <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="twitter" class="form-control"
                                                    value="{{ $setting->twitter }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Linkedin <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="linkedin" class="form-control"
                                                    value="{{ $setting->linkedin }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Youtube <span class="text-danger">*</span></h5>
                                            <input type="text" name="youtube" class="form-control"
                                                value="{{ $setting->youtube }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>



                                </div>
                            </div>


                        </div> <!-- end cold md 6 -->
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
