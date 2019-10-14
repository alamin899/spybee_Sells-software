<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/dev/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 05:39:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--Admin profile css link--}}
{{--<link rel="stylesheet" href="{{asset('admin/profile/profile.css')}}">--}}
{{--End Admin profile css link--}}
<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" />
    <link rel="stylesheet" href="{{asset('admin/adminlte/plugins/')}}/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin/adminlte/')}}/code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/adminlte/dist/')}}/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin/adminlte/plugins/')}}/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('admin/adminlte/plugins/')}}/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('admin/adminlte/plugins/')}}/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('admin/adminlte/plugins/')}}/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admin/adminlte/plugins/')}}/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('admin/adminlte/plugins/')}}/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    {{--external css--}}
    <link rel="stylesheet" href="{{asset('admin/external/menuEdit.css')}}">

    {{--dropdown searchable--}}

{{--    datatable css--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    {{--jquery cdn google--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    {{--jquery modal--}}

    <link rel="stylesheet" href="{{asset('admin/jquery_modal/jquery_modal.css')}}">
    <script src="{{asset('admin/jquery_modal/jquery_modal.js')}}"></script>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
{{--@include('admin.include.jquery_modal')--}}
<!-- Navbar -->
@include('adminPannel.include.header')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('adminPannel.include.sidebar')



<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
            @yield('chart')
{{--            @include('admin.include.chart')--}}
            <!-- /.row -->
                <!-- Main row -->

            @yield('body')
            <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
    @yield('userinfo')
    @yield('menuEdit')
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@include('adminPannel.include.footer')

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin/adminlte/plugins/')}}/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/adminlte/')}}code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/adminlte/plugins/')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="{{asset('admin/adminlte/')}}cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset('admin/adminlte/plugins/')}}/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('admin/adminlte/plugins/')}}/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{asset('admin/adminlte/plugins/')}}/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('admin/adminlte/plugins/')}}/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/adminlte/plugins/')}}/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/adminlte/')}}cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{asset('admin/adminlte/plugins/')}}/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{asset('admin/adminlte/plugins/')}}/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin/adminlte/plugins/')}}/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{asset('admin/adminlte/plugins/')}}/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{asset('admin/adminlte/plugins/')}}/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/adminlte/dist/')}}/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/adminlte/dist/')}}/js/{{asset('admin/adminlte/pages/')}}/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/adminlte/dist/')}}/js/demo.js"></script>
<script src="{{asset('admin/dataTable.js')}}"></script>

{{--Data Table--}}

{{--<script src="code.jquery.com/jquery-1.10.2.min.js"></script>--}}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

{{--ajax setup--}}
<script>
    $(function () {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content') }
        });
    });
</script>
<script src="{{asset('validation.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

</body>

<!-- Mirrored from adminlte.io/themes/dev/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 05:39:06 GMT -->
</html>

{{--jquery catagory modal--}}
