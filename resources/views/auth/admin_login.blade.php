<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}">

    <title>Sunny Admin - Log in </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

	<!-- Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">

</head>
<body class="hold-transition theme-primary bg-gradient-primary">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="p-10 content-top-agile">
							<h2 class="text-white">Get started with Us</h2>
							<p class="text-white-50">Sign in to start your session</p>
						</div>
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">

                        <x-jet-validation-errors class="mb-4" />


                            @if (session('status'))
                            <div class="mb-4 text-sm font-medium text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                                @csrf
                                <div class="form-group">
									<div class="mb-3 input-group">
										<div class="input-group-prepend">
											<span class="text-white bg-transparent input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="email" name="email" id="email" class="text-white bg-transparent form-control pl-15 plc-white"  :value="old('email')" required autofocus  placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<div class="mb-3 input-group">
										<div class="input-group-prepend">
											<span class="text-white bg-transparent input-group-text"><i class="ti-lock"></i></span>
										</div>
										<input type="password" id="password" class="text-white bg-transparent form-control pl-15 plc-white" placeholder="Password" name="password" required autocomplete="current-password" >
									</div>
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="text-white checkbox">
										<input type="checkbox"  id="remember_me" name="remember" >
										<label for="basic_checkbox_1">Remember Me</label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 <div class="text-right fog-pwd">
                                         @if (Route::has('password.request'))
										<a href=" href="{{ route('password.request') }}" class="text-white hover-info"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                        @endif
									  </div>

									</div>
									<!-- /.col -->
									<div class="text-center col-12">
									  <button type="submit" class="mt-10 btn btn-info btn-rounded">SIGN IN</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>

							<div class="text-center text-white">
							  <p class="mt-20">- Sign With -</p>
							  <p class="mb-20 gap-items-2">
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-facebook"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-twitter"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-google-plus"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-instagram"></i></a>
								</p>
							</div>

							<div class="text-center">
								<p class="mb-0 text-white mt-15">Don't have an account? <a href="auth_register.html" class="ml-5 text-info">Sign Up</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('/assets/icons/feather-icons/feather.min.js') }}"></script>

</body>
</html>
