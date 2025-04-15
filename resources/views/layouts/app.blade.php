<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title', 'MFP Academy Admin Panel - Dashboard')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sb-admin/fonts/Nunito.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('sb-admin/page.image/logomfp.png') }}" alt="Logo MFP" style="width: 50px;">
                </div>
                <div class="sidebar-brand-text mx-3">MFP ACADEMY</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="{{ request()->routeIs('admin.dashboard') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Interface</div>

            <!-- Nav Items -->
            @can('isadmin')
            <li class="{{ request()->routeIs('admin.akun') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('admin.akun') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Akun Pemain</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('pelatih.index') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('pelatih.index') }}">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Manajemen Pelatih</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('pemain.index') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('pemain.index') }}">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Manajemen Pemain</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('layouts.user.editable') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('layouts.user.editable') }}">
                    <i class="fas fa-fw fa-receipt"></i>
                    <span>Editable Player</span>
                </a>
            </li>
            @endcan
            <li class="{{ request()->routeIs('layouts.user.individual') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('layouts.user.individual') }}">
                    <i class="fas fa-fw fa-receipt"></i>
                    <span>Statistics Player</span>
                </a>
            </li>
            @can('isadmin')
            <li class="{{ request()->routeIs('health.create') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('health.create') }}">
                    <i class="fas fa-fw fa-shield-alt"></i>
                    <span>Health Create</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('layouts.health.index') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('layouts.health.index') }}">
                    <i class="fas fa-fw fa-shield-alt"></i>
                    <span>Health Assessment</span>
                </a>
            </li>
            @endcan
            <li class="{{ request()->routeIs('layouts.health.healthy') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('layouts.health.healthy') }}">
                    <i class="fas fa-fw fa-shield-alt"></i>
                    <span>Health & Physiotherapy</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Jadwal Latihan & Pertandingan</span>
                </a>
            </li>
            @can('isadmin')
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-coins"></i>
                    <span>Keuangan</span>
                </a>
            </li>
            @endcan
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Notifikasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Logout Icon -->
                        <li class="nav-item no-arrow mx-1">
                            <a class="nav-link" href="{{ route('logout') }}" title="Logout">
                                <i class="fas fa-sign-out-alt"></i> <!-- Ikon logout -->
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('sb-admin/img/undraw_profile.svg') }}" alt="Profile Image">
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content') <!-- Content specific to each page will be injected here -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; 2024 MFP Academy . All rights reserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sb-admin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sb-admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('sb-admin/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
