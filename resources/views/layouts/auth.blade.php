<!DOCTYPE html>
<html lang="en">

<head>
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- Favicons -->
	<link href="{{ asset('img/favicon.png') }}" rel="icon">
	<link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
	<!-- Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
	<main id="main" class="main">
		@yield('content')
	</main>

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">
		<div class="copyright">
			&copy; Copyright <strong><span>SIGA</span></strong>. Todos lo derechos reservados.
		</div>
		<div class="credits">
			Diseñado por <a href="#">SIGA</a>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
	<script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
	<script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
	<script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
	<script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
	<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>