<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title') | Your Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('backend/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">    
    <link rel="stylesheet" href="{{asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">    
    <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        .btn-create{font-size: .875rem;margin: -.75rem 0;padding: .25rem .5rem}.select2-container--default .select2-selection--single{border: 1px solid #ced4da;padding: .2rem 0.75rem;height: calc(1.8125rem + 2px);border-radius: 0px}.select2-container--default .select2-selection--single .select2-selection__arrow{top: -3px}.select2-search--dropdown .select2-search__field{border-radius: 0px}.form-control-sm{border-radius: 0px}.btn-group-sm > .btn, .btn-sm{border-radius: 0px}.page-item:first-child .page-link{border-top-left-radius: 0px;border-bottom-left-radius: 0px}.page-item:last-child .page-link{border-top-right-radius: 0px;border-bottom-right-radius: 0px}
        .min-height-500{min-height: 500px}
        .nav-sidebar .nav-treeview > .nav-item > .nav-link > .nav-icon{width: 1.6rem;font-size: 10px}[class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link.active, [class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link.active:focus, [class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link.active:hover{background-color: rgba(255,255,255,.1);color: #fff}
    </style>
    @stack('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed text-sm" style="min-height: 750px;">
<div class="wrapper">
    @include('backend.component.header')
    @include('backend.component.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-2">
        <!-- Content Header (Page header) -->
        {{-- <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@yield('title')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div> --}}
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                    @include('backend.component.success')
                    @include('backend.component.error')
                </div>
                @yield('content')
                
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    {{-- @include('backend.component.footer') --}}
  
</div>
<!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>    
    <script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>    
    <script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('backend/js/adminlte.js')}}"></script>
    <script>
        $('[data-toggle="tooltip"]').tooltip();
    </script>
    @stack('scripts')
</body>
</html>
