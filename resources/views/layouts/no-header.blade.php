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

		<!-- All Plugins (root-relative paths so they work regardless of APP_URL) -->
		<link href="/assets/css/animation.css" rel="stylesheet">
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/assets/css/dropzone.min.css" rel="stylesheet">
		<link href="/assets/css/rome.css" rel="stylesheet">
		<link href="/assets/css/owl.carousel.min.css" rel="stylesheet">
		<link href="/assets/css/owl.theme.default.min.css" rel="stylesheet">
		<link href="/assets/css/rangeSlider.min.css" rel="stylesheet">
		<link href="/assets/css/select2.min.css" rel="stylesheet">
		<link href="/assets/css/magnific-popup.css" rel="stylesheet">
		<link href="/assets/css/prism.css" rel="stylesheet">

		<!-- Icons CSS -->
		<link href="/assets/css/fontawesome.css" rel="stylesheet">
		<link href="/assets/css/bootstrap-icons.css" rel="stylesheet">


		<!-- Custom CSS -->
		<link href="/assets/css/style.css" rel="stylesheet">
	</head>

	<body>

        <div id="main-wrapper">

            <!-- Main Content -->
            <div class="content">
                @yield('content')
            </div>

        </div>
		<!-- End Wrapper -->

		<!-- All Jquery (root-relative paths so they work regardless of APP_URL) -->
		<script src="/assets/js/jquery.min.js"></script>
		<script src="/assets/js/popper.min.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="/assets/js/dropzone.min.js"></script>
		<script src="/assets/js/counterup.min.js"></script>
		<script src="/assets/js/rangeslider.js"></script>
		<script src="/assets/js/select2.min.js"></script>
		<script src="/assets/js/owl.carousel.min.js"></script>
		<script src="/assets/js/rome.js"></script>
		<script src="/assets/js/jquery.magnific-popup.min.js"></script>

		<script src="/assets/js/custom.js"></script>
		<!-- This page plugins -->

	</body>

</html>
