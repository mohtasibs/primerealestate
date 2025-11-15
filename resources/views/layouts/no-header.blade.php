<!-- resources/views/layouts/no-header.blade.php -->

<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="ListingHub - Laravel 12 Business Directory & Listing Template">
		<meta name="author" content="Shreethemes">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Prime Real Estate</title>
		<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

		<!-- All Plugins -->
		<link href="{{ asset('assets/css/animation.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/dropzone.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/rome.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/rangeSlider.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/prism.css') }}" rel="stylesheet">

		<!-- Icons CSS -->
		<link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">


		<!-- Custom CSS -->
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	</head>

	<body>

        <div id="main-wrapper">

            <!-- Main Content -->
            <div class="content">
                @yield('content')
            </div>

        </div>
		<!-- End Wrapper -->

        <!-- All Jquery -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
		<script src="{{ asset('assets/js/counterup.min.js') }}"></script>
		<script src="{{ asset('assets/js/rangeslider.js') }}"></script>
		<script src="{{ asset('assets/js/select2.min.js') }}"></script>
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/js/rome.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

		<script src="{{ asset('assets/js/custom.js') }}"></script>
		<!-- This page plugins -->

	</body>

</html>
