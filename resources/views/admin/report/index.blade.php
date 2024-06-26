@extends('admin.layouts.app')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Report</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Tables</li>
                                <li class="breadcrumb-item active" aria-current="page">All Report</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-4">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Search By Date</h3>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('search-by-date') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="date">Date </label>
                                        <input type="date" name="date" value="" id="date"
                                            class="form-control" placeholder="Coupon Name" required>
                                        @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="float-right btn btn-info">Search</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Search By Month</h3>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('search-by-month') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="month">Select Month</label>
                                        <select class="form-control" name="month" id="month">
                                            <option value='' selected disabled>--Select Month--</option>
                                            <option selected value='Janaury'>Janaury</option>
                                            <option value='February'>February</option>
                                            <option value='March'>March</option>
                                            <option value='April'>April</option>
                                            <option value='May'>May</option>
                                            <option value='June'>June</option>
                                            <option value='July'>July</option>
                                            <option value='August'>August</option>
                                            <option value='September'>September</option>
                                            <option value='ctober'>October</option>
                                            <option value='November'>November</option>
                                            <option value='December'>December</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <select class="form-control" name="year" id="year">
                                            <option selected disabled>--select year--</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="float-right btn btn-info">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Search By Year</h3>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('search-by-year') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <select class="form-control" name="year" id="year">
                                            <option selected disabled>--select year--</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="float-right btn btn-info">Search</button>

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
