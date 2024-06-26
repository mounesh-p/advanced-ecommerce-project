@extends('admin.layouts.app')

@section('content')

<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Division</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">All Division</li>
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
                 <h3 class="box-title">Update Division</h3>
               </div>

               <div class="card">
                <div class="card-body">

                  <form action="{{ route('admin.division.update',$division->id) }}" method="POST">
                  @csrf
                          <div class="form-group">
                              <label for="division_name">Division Name </label>
                              <input type="text" name="division_name" id="division_name" value="{{ $division->division_name }}" class="form-control" placeholder="Division Name" required>
                              @error('division_name')
                                    <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                          <button type="submit" class="float-right btn btn-info" >Update</button>

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
