<!DOCTYPE html>
<html lang="en">

<head>
	<title>{{ config('app.name', 'SIGA') }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- Favicons -->
	<link href="{{ asset('img/favicon.png') }}" rel="icon">
	<link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">
	<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/quill/quill.snow.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/quill/quill.bubble.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
	<link rel="stylesheet" href="{{url('css/custom.css')}}">
</head>

<body>

	<!-- ======= Header ======= -->
	@include('layouts.includes.header')

	<!-- ======= Sidebar ======= -->
	@include('layouts.includes.aside')

	<main id="main" class="main pb-0">
		@yield('content')
	</main>

	<!-- ======= Footer ======= -->
	@include('layouts.includes.footer')

	<!-- ======= scripts ====== -->
	<script>
		const _url_ = "{{url('/')}}";
	</script>
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/datatables.min.js') }}"></script>
	<script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
	<script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
	<script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
	<script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
	<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	@yield('scripts')
</body>

</html>