<!DOCTYPE html>
<html>
<head>
  <base href="{{ url('admin')}}"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ジョイカル花園インター店｜新車の軽 月々1万円専門店<</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets_admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <!-- daterange picker -->
  <link rel="stylesheet" href="assets_admin/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="assets_admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets_admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="assets_admin/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    body {
      font-family: 'Noto Sans JP', sans-serif;
    }
    .select2-results__options li:nth-child(2) {
      color: red !important;
    }
    
    .select2-results__options li:nth-child(3) {
      color: green !important;
    }
  </style>

@yield('header')

</head>

<body class="hold-transition sidebar-mini layout-fixed" style="overflow-x: hidden;">
    <!-- WRAPPER -->
	<div class="wrapper">

		<!-- NAVBAR -->
		@include('layouts.includes._navbar')
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->

    {{-- FOOTER --}}
    <footer class="main-footer">    
        <strong>Copyright <a href="#">Joycal</a>        
    </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
  </div>
  {{-- endWrapper --}}

    {{-- JAVASCRIPT --}}
    <!-- jQuery -->
    <script src="assets_admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="assets_admin/plugins/moment/moment.min.js"></script>
    <script src="assets_admin/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets_admin/plugins/select2/js/select2.full.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets_admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets_admin/dist/js/demo.js"></script>

    @yield('footer')
</body>
</html>

