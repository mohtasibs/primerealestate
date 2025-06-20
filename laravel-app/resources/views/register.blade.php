<!-- resources/views/register.blade.php -->
@extends('layouts.no-header')

@section('title', 'Register Page')

@section('content')

<div class="bg-cover" style="background: #ffe8ee url({{ asset('assets/img/auth-bg.png') }}) no-repeat;">

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
									<div class="text-center"><h1 class="mb-2 fs-2">Create An Account!</h1></div>

									<!-- Form START -->
									<form class="mt-5 text-start">
										
										<div class="form mb-5">
											<div class="form-group">
												<label class="form-label">User or Email</label>
												<input type="email" class="form-control" placeholder="name@example.com">
											</div>
											<div class="form-group">
												<label class="form-label">Enter Password</label>
												<div class="position-relative">
													<input type="password" class="form-control" id="password-field" name="password"
														placeholder="Password">
													<span
														class="fa-solid fa-eye toggle-password position-absolute top-50 end-0 translate-middle-y me-3"></span>
												</div>
											</div>

											<div class="form-group">
												<label class="form-label">Confirm Password</label>
												<input type="password" class="form-control" placeholder="*********">
											</div>

											<div class="form-group mb-4">
												<button type="submit" class="btn btn-primary full-width fw-medium">Create Account</button>
											</div>

											<div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
												<div class="modal-flex-first">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="savepassword" value="option1">
														<label class="form-check-label" for="savepassword">Save Password</label>
													</div>
												</div>
												<div class="modal-flex-last">
													<a href="{{ url('/forgot-password') }}" class="text-primary fw-medium">Forget Password?</a>
												</div>
											</div>
										</div>
										
										<div class="prixer my-5">
											<div class="devider-wraps position-relative">
												<div class="devider-text text-muted text-md">Or Signup with</div>
											</div>
										</div>
										
										<div class="social-login">
											<div class="d-flex align-items-center justify-content-center flex-wrap gap-3 p-0">
												<div class="flex-first flex-fill mob-100">
													<a href="#" class="btn bg-white border text-dark full-width">
														<i class="fa-brands fa-google-plus-g color--googleplus me-2"></i>
														<span class="fw-medium text-md">Signup with Google</span>
													</a>
												</div>
												<div class="flex-last flex-fill mob-100">
													<a href="#" class="btn bg-white border text-dark full-width">
														<i class="fa-brands fa-facebook color--facebook me-2"></i>
														<span class="fw-medium text-md">Signup with Facebook</span>
													</a>
												</div>
											</div>
										</div>
										
									</form>
									<!-- Form END -->
								</div>
								
							</div>
						</div>
						
						<div class="authfooter">
							<div class="text-center"><p class="text-dark mb-0">Already an account?<a href="{{ url('/login') }}" class="fw-medium text-primary"> Login Here</a></p></div>
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