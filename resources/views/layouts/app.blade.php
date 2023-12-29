<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Layanan Aduan Masyarakat</title>
    <meta content="siapmas" name="description">
    <meta content="siapmas" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assets/') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" href="
    https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/') }}/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="  {{ Auth::check() ? '' : 'toggle-sidebar' }}">




    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <span class=" d-lg-block">SiapMas</span>
            </a>
            @auth

                <i class="bi bi-list toggle-sidebar-btn"></i>
            @endauth
        </div><!-- End Logo -->




        @auth
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->



                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->nama }}</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>{{ Auth::user()->nama }}</h6>
                                <span>{{ Auth::user()->email }}</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.index') }}">
                                    <i class="bi bi-person"></i>
                                    <span>Profile</span>
                                </a>
                            </li>


                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>

                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item d-flex align-items-center">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Keluar </span>
                                </form>

                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav>
        @endauth

        @guest
            <nav class="header-nav ms-auto me-3 d-flex">

                <a href="{{ route('login') }}" class=" mx-2  btn btn-success">
                    MASUK
                </a>


            </nav>
        @endguest
        <!-- End Icons Navigation -->

    </header><!-- End Header -->


    @auth
        <x-sidebar />
    @endauth





    <main id="main" class="main">

        {{ $slot }}

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            <a href="/"> &copy; Copyright <strong><span>SiapMas</span></strong>.
            </a>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/datatables/dataTables.bootstrap5.min.js"></script>
    {{--
    https://code.jquery.com/jquery-3.7.0.js
    https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js --}}
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/') }}/js/main.js"></script>



    @stack('script')

</body>

</html>
