<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dashboard') - Perpustakaan</title>
            <link
                href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}"
                rel="stylesheet">
            <link
                href="{{ asset('css/sb-admin-2.min.css') }}"
                rel="stylesheet">

</head>
<body id="page-top">

    <div id="wrapper">

        {{-- Sidebar --}}
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
            id="accordionSidebar">

                    {{-- Brand --}}
                    <a class="sidebar-brand d-flex align-items-center justify-content-center"
                    href="{{ route('dashboard') }}">
                            <div class="sidebar-brand-icon">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div class="sidebar-brand-text mx-3">
                                Perpustakaan
                            </div>
                    </a>

                    <hr class="sidebar-divider my-0">

                    {{-- Dashboard --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <hr class="sidebar-divider">

                    <div class="sidebar-heading">
                        Data Perpustakaan
                    </div>

                    {{-- Pengunjung --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-fw fa-users"></i>
                            <span>Pengunjung</span>
                        </a>
                    </li>

                    {{-- Buku --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Buku</span>
                        </a>
                    </li>

                    {{-- Peminjaman --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-fw fa-book-reader"></i>
                            <span>Peminjaman</span>
                        </a>
                    </li>

                    {{-- Pengembalian --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-fw fa-undo"></i>
                            <span>Pengembalian</span>
                        </a>
                    </li>

                    {{-- Perpanjangan --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-fw fa-sync-alt"></i>
                            <span>Perpanjangan</span>
                        </a>
                    </li>

                    {{-- Jadwal Sif --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-fw fa-calendar-alt"></i>
                            <span>Jadwal Sif</span>
                        </a>
                    </li>

                    <hr class="sidebar-divider">

                    {{-- Logout --}}
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <button type="submit"
                                    class="nav-link btn btn-link text-left w-100 border-0">
                                <i class="fas fa-fw fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </button>
                        </form>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0"
                        id="sidebarToggle">
                </button>
            </div>

        </ul>

        {{-- End Sidebar --}}


        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                {{-- Navbar --}}
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop"
                            class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <span class="font-weight-bold text-gray-800">
                        Sistem Informasi Perpustakaan
                    </span>

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle"
                               href="#"
                               id="userDropdown"
                               role="button"
                               data-toggle="dropdown">

                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{ Auth::user()->name }}
                                </span>

                                <i class="fas fa-user-circle fa-lg"></i>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow">

                                <form action="{{ route('logout') }}"
                                      method="POST">

                                    @csrf

                                    <button type="submit"
                                            class="dropdown-item">

                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                                        Logout

                                    </button>

                                </form>

                            </div>

                        </li>

                    </ul>

                </nav>

                {{-- Page Content --}}
                <div class="container-fluid">

                    @yield('content')

                </div>

            </div>

        </div>

    </div>

    <a class="scroll-to-top rounded"
       href="#page-top">

        <i class="fas fa-angle-up"></i>

    </a>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>