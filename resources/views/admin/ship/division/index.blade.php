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



        <div class="col-8">

         <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">All Division</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Division Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($devisions as $devision)
                        <tr>
                            <td>{{ $devision->division_name }}</td>

                            <td>
                                <a name="" id="" class="btn btn-info" href="{{ route('admin.division.edit',$devision->id) }}" role="button"><i class="fa fa-edit"></i></a>
                                <a name="" id="delete" class="btn btn-danger" href="{{ route('admin.division.delete',$devision->id) }}" role="button"><i class="fa fa-trash"></i></a></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                            <th>Brand Eng</th>
                            <th>Brand Hin</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> --}}
                </table>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-4">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Add New Division</h3>
               </div>

               <div class="card">
                <div class="card-body">

                  <form action="{{ route('admin.division.store') }}" method="POST">
                  @csrf
                          <div class="form-group">
                              <label for="division_name">Division Name </label>
                              <input type="text" name="division_name" value="" id="division_name" class="form-control" placeholder="Division Name" required>
                              @error('division_name')
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
