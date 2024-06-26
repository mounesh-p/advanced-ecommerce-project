@extends('admin.layouts.app')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">State</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Tables</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-6">

                    <div class="box">
                        <div class="box-header with-borte
                 <h3 class="box-title">Update te</h3>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('admin.state.update', $state->id) }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="division_id">Division name</label>
                                        <select class="form-control" name="division_id" id="division_id">
                                            <option disabled>--select-- </option>
                                            @foreach ($devisions as $devision)
                                                <option value="{{ $devision->id }}"
                                                    {{ $devision->id == $state->division_id ? 'selected' : '' }}>
                                                    {{ $devision->division_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="district_id">District name</label>
                                        <select class="form-control" name="district_id" id="district_id">
                                            <option disabled>--select-- </option>
                                            @foreach ($districts as $district)
                                                <option value="{{ $district->id }}"
                                                    {{ $district->id == $state->district_id ? 'selected' : '' }}>
                                                    {{ $district->district_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="state_name">State Name </label>
                                        <input type="text" name="state_name" value="{{ $state->state_name }}"
                                            id="state_name" class="form-control" placeholder="District Name" required>
                                        @error('state_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="float-right btn btn-info">Add</button>

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
