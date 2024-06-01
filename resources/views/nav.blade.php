<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .navbar-menu {
            display: none;
        }

        .navbar-menu.show {
            display: block;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="">
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 text-sm">
                                <div class="site-info">
                                    <a href="#"><span class="mai-call text-primary"></span> +256 784 348462</a>
                                    <span class="divider">|</span>
                                    <a href="#"><span class="mai-mail text-primary"></span> pinehealthfoundation@gmail.com</a>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right text-sm">
                                <div class="social-mini-button">
                                    <a href="#"><span class="mai-logo-facebook-f"></span></a>
                                    <a href="#"><span class="mai-logo-twitter"></span></a>
                                    <a href="#"><span class="mai-logo-dribbble"></span></a>
                                    <a href="#"><span class="mai-logo-instagram"></span></a>
                                </div>
                            </div>
                        </div> <!-- .row -->
                    </div> <!-- .container -->
                </div> <!-- .topbar -->

                <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="#"><span class="text-primary">Pine</span>-Health</a>

                        <form action="#">
                            <div class="input-group input-navbar">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                            </div>
                        </form>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse navbar-menu" id="navbarSupport">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="doctors.html">Doctors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                @if (Route::has('login'))
                                    @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('myappointment') }}">My Appointment</a>
                                    </li>
                                    <li class="nav-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="nav-link" type="submit">Logout</button>
                                        </form>
                                    </li>
                                    @else
                                    @include('credential')
                                    @endauth
                                @endif
                            </ul>
                        </div> <!-- .navbar-collapse -->
                    </div> <!-- .container -->
                </nav>
            </header>
            {{-- <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div> --}}
        @endif

        <!-- Page Content -->
        {{-- <main>
            {{ $slot }}
        </main> --}}
    </div>

    <div class="container">
        <div class="row px-md-3">
            <!-- Footer content here -->
        </div>
    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>
</html>