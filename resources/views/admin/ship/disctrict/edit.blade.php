@extends('admin.layouts.app')

@section('content')

<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">District</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">All District</li>
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
               <div class="box-header with-border">
                 <h3 class="box-title">Update District</h3>
               </div>

               <div class="card">
                <div class="card-body">

                  <form action="{{ route('admin.district.update',$district->id) }}" method="POST">
                  @csrf

                        <div class="form-group">
                          <label for="division_id">Division name</label>
                          <select class="form-control" name="division_id" id="division_id">
                            <option  disabled>--select-- </option>
                            @foreach ($devisions as $devision)
                            <option value="{{ $devision->id }}" {{ $devision->id == $district->division_id ? 'selected' : '' }}>{{ $devision->division_name }}</option>

                            @endforeach

                          </select>
                        </div>

                          <div class="form-group">
                              <label for="district_name">District Name </label>
                              <input type="text" name="district_name" value="{{ $district->district_name }}" id="district_name" class="form-control" placeholder="District Name" required>
                              @error('district_name')
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
