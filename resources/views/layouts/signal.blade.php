<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @include('partials.header')
    @include('partials.siderbar')
    @yield('content')



    @include('partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('adminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminLTE/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('adminLTE/dist/js/demo.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('adminLTE/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('adminLTE/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('adminLTE/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('adminLTE/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('adminLTE/plugins/chart.js/Chart.min.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/vue.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<!-- PAGE SCRIPTS -->
<script src="{{ asset('adminLTE/dist/js/pages/dashboard2.js') }}"></script>

</body>
</html>
