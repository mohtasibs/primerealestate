<!-- resources/views/forgot-password.blade.php -->
@extends('layouts.no-header')

@section('title', 'Forgot-Password Page')

@section('content')

<div class="bg-cover" style="background: #ffe8ee url({{ asset('assets/img/auth-bg.png') }}) no-repeat; height:100vh">

	<div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div>
				
	<!-- Login Form Start -->
	<section>
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-5 col-lg-7 col-md-9">
					<div class="authWrap">
					
						<div class="authhead">
							<!-- Logo -->
							<div class="text-center mb-4"><a href="{{ url('/') }}"><img class="img-fluid" src="{{ asset('assets/img/icon.png') }}" width="55" alt="logo"></a></div>
						</div>
						
						<div class="authbody d-black mb-4">
							<div class="card rounded-4 p-sm-5 p-4">
								<div class="card-body p-0">
							
									
									<!-- Title -->
									<div class="text-center">
										<h1 class="mb-2 fs-2">Forgot Password?</h1>
										<p class="mb-0">Enter the email address associated with an account.</p>
									</div>

									<!-- Form START -->
									<form class="mt-4 text-start">
										
										<div class="form py-4">
											<div class="form-group">
												<label class="form-label">Enter email or user</label>
												<input type="email" class="form-control" placeholder="name@example.com">
											</div>

											<div class="form-group">
												<button type="submit" class="btn btn-primary full-width fw-medium">Reset Password</button>
											</div>
										</div>
										
									</form>
									<!-- Form END -->
								</div>
								
							</div>
						</div>
						
						<div class="authfooter">
							<div class="text-center"><p class="text-dark mb-0">Back to<a href="{{ url('/login') }}" class="fw-medium text-primary"> Sign In</a></p></div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- Login Form End -->

</div>

	<!-- includes/Home/index/log.blade.php -->
	@include('includes.Home.index.log')

@endsection