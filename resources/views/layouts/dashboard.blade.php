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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/quill/quill.snow.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/quill/quill.bubble.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/custom.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{asset('vendor/plugins/jqvmap/jqvmap.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('vendor/dist/css/adminlte.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('vendor/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Styles -->
    @livewireStyles
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
        const _url_ = "{{ url('/') }}";
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
    <!-- ChartJS -->
    <script src="{{asset('vendor/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('vendor/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('vendor/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('vendor/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('vendor/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('vendor/dist/js/adminlte.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('vendor/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('vendor/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('vendor/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": [ "csv", "excel", "pdf"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $("#plate_insurance").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": [ "csv", "excel", "pdf"]
          }).buttons().container().appendTo('#plate_insurance_wrapper .col-md-6:eq(0)');
          $("#plate_insurance_seller").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": [ "csv", "excel", "pdf"]
          }).buttons().container().appendTo('#plate_insurance_seller_wrapper .col-md-6:eq(0)');
        });
      </script>
    @yield('scripts')
    @livewireScripts
</body>

</html>
