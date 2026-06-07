<!DOCTYPE html>
<html lang="en">
<head>
    @php
        $basicInfo = \App\Models\BasicInfo::first();
    @endphp
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $basicInfo->title }}</title>

    {{-- Summernote --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    {{-- Summernote End --}}

    <link rel="icon" href="{{ asset('public/upload/'. $basicInfo->favIcon) }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('public/admin_assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('public/admin_assets') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/admin_assets') }}/dist/css/adminlte.min.css">

    <!-- Selectize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css" integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome (local) -->
    <link rel="stylesheet" href="{{ asset('public/admin_assets') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/admin_assets') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="img-profile rounded-circle"
                src="{{ asset('public/admin_assets') }}/dist/img/avatar5.png"
                height="30" width="30">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link"></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <!-- User Dropdown -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white-600 small">
                            <b>{{ Auth::user()->name }}</b>
                        </span>
                        <img class="img-profile rounded-circle"
                            src="{{ asset('public/admin_assets') }}/dist/img/avatar5.png"
                            height="30" width="30">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">
                            <i class="fas fa-sign-out-alt mr-2"></i> Ready to Leave?
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure you want to logout?</div>
                    <div class="modal-footer">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">
                                <i class="fas fa-times mr-1"></i> Cancel
                            </button>
                            <button class="btn btn-danger" type="submit">
                                <i class="fas fa-sign-out-alt mr-1"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

       <!-- Main Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#02182a;">
            <!-- Brand -->
            <a href="#" class="brand-link bg-info">
                <img src="{{ asset('public/admin_assets') }}/dist/img/avatar5.png"
                    alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">{{ $basicInfo->title }}</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column"
                        data-widget="treeview" role="menu" data-accordion="false">

                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}"
                               class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <!-- User Manage (Admin only) -->
                        @if(Auth::guard('web')->user()->roleid == 1)
                        <li class="nav-item">
                            <a href="{{ url('usermanage') }}"
                               class="nav-link {{ Request::is('usermanage*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>User Manage</p>
                            </a>
                        </li>
                        @endif

                        <!-- Sub Menu Manage -->
                        <li class="nav-item">
                            <a href="{{ url('sub-menu') }}"
                               class="nav-link {{ Request::is('sub-menu*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-list-ul"></i>
                                <p>Sub Menu Manage</p>
                            </a>
                        </li>

                        <!-- Content Manage -->
                        <li class="nav-item">
                            <a href="{{ url('contents') }}"
                               class="nav-link {{ Request::is('contents*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Content Manage</p>
                            </a>
                        </li>

                        <!-- Project Manage -->
                        <li class="nav-item">
                            <a href="{{ url('admin/projects') }}"
                               class="nav-link {{ Request::is('admin/projects*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-project-diagram"></i>
                                <p>Project Manage</p>
                            </a>
                        </li>

                        <!-- Blogs Manage -->
                        <li class="nav-item">
                            <a href="{{ url('admin/blogs') }}"
                               class="nav-link {{ Request::is('admin/blogs*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-blog"></i>
                                <p>Blogs Manage</p>
                            </a>
                        </li>

                        <!-- Slider Manage -->
                        <li class="nav-item">
                            <a href="{{ url('slider') }}"
                               class="nav-link {{ Request::is('slider*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-images"></i>
                                <p>Slider Manage</p>
                            </a>
                        </li>

                        <!-- Messages -->
                        <li class="nav-item">
                            <a href="{{ url('message') }}"
                               class="nav-link {{ Request::is('message*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>Messages</p>
                            </a>
                        </li>

                        <!-- Basic Info Manage -->
                        <li class="nav-item">
                            <a href="{{ url('basicinfo') }}"
                               class="nav-link {{ Request::is('basicinfo*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Basic Info Manage</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="main-footer justify-content-center">
            <div class="row"></div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark"></aside>

    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    <script src="{{ asset('public/admin_assets') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('public/admin_assets') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('public/admin_assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/admin_assets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('public/admin_assets') }}/dist/js/adminlte.js"></script>

    <!-- DataTables -->
    <script src="{{ asset('public/admin_assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('public/admin_assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('public/admin_assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('public/admin_assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('public/admin_assets') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('public/admin_assets') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('public/admin_assets') }}/plugins/pdfmake/vfs_fonts.js"></script>

    <!-- Selectize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js" integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        // Selectize normalization
        $('.normalize').selectize();

        // DataTable init
        $(function () {
            $("#example1").DataTable({
                "responsive": false,
                "lengthChange": true,
                "autoWidth": true,
            });
        });
    </script>

    @yield('script')
</body>
</html>