<!-- Log In Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
	<div class="modal-dialog" id="loginmodal">
		<div class="modal-content">
			<div class="modal-header justify-content-end border-0 pb-0">
				<a href="#" class="square--30 circle bg-light-danger text-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></a>
			</div>

			<div class="modal-body px-4">
				<!-- Heading -->
				<div class="text-center mb-5">
				<h2>Welcome Back</h2>
				<p class="fs-6">Login to manage your account.</p>
				</div>
				<!-- End Heading -->

				<!-- Form -->
				<form class="needs-validation px-lg-2" novalidate>

					<!-- Form -->
					<div class="row align-items-center justify-content-between g-3 mb-4">
						<div class="col-xl-6 col-lg-6 col-md-6"><a href="#" class="btn btn-outline-secondary border rounded-3 text-md px-lg-2 full-width"><img src="" class="img-fluid me-2" width="16" alt="">Login with Google</a></div>
						<div class="col-xl-6 col-lg-6 col-md-6"><a href="#" class="btn btn-outline-secondary border rounded-3 text-md px-lg-2 full-width"><img src="" class="img-fluid me-2" width="16" alt="">Login with Facebook</a></div>
					</div>
					<!-- End Form -->

					<!-- Form -->
					<div class="mb-4">
						<label class="form-label" for="email01">Your email</label>
						<input type="email" class="form-control" id="email01" placeholder="email@site.com" required>
						<span class="invalid-feedback">Please enter a valid email address.</span>
					</div>
					<!-- End Form -->

					<!-- Form -->
					<div class="mb-4">
						<div class="d-flex justify-content-between align-items-center">
							<label class="form-label" for="pass01">Password</label>
							<a class="link fw-medium text-primary" href="{{ url('/forgot-password') }}">Forgot Password?</a>
						</div>

						<div class="input-group-merge">
							<input type="password" class="form-control" id="pass01" placeholder="8+ characters required" required>
						</div>

						<span class="invalid-feedback">Please enter a valid password.</span>
					</div>
					<!-- End Form -->

					<div class="d-grid mb-3">
						<button type="submit" class="btn btn-primary fw-medium">Log in</button>
					</div>

					<div class="text-center">
						<p>Don't have an account yet? <a class="link fw-medium text-primary" href="{{ url('/signup') }}">Sign up here</a></p>
					</div>
				</form>
				<!-- End Form -->
			</div>

			<div class="modal-footer p-3 border-top">
				<div class="d-flex align-items-center justify-content-between gap-3">
					<div class="brand px-lg-4 px-3"><img src="" class="img-fluid" alt=""></div>
					<div class="brand px-lg-4 px-3"><img src="" class="img-fluid" alt=""></div>
					<div class="brand px-lg-4 px-3"><img src="" class="img-fluid" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->
