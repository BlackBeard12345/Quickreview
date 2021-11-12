<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quick Review</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('theme/assets/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('theme/css/styles.css') }}" rel="stylesheet" />

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
            <div class="container">
                <h1 class="text-warning">Quick Review</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        @if(Auth::user())
                            @if(Auth::user()->isAdmin())
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">Filmy</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.reviews.index') }}">Moje Recenzje</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.reviews.all') }}">Wszystkie recenzje</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user-cog"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <li><a class="dropdown-item" href="{{ route('admin.profile.index') }}">Profil</a></li>
                                      <li><a class="dropdown-item" href="{{ route('logout') }}">Wyloguj się</a></li>
                                    </ul>
                                </li>
                            @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('user.index') }}">Filmy</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('user.reviews.index') }}">Moje Recenzje</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user-cog"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" href="{{ route('user.profile.index') }}">Profil</a></li>
                                  <li><a class="dropdown-item" href="{{ route('logout') }}">Wyloguj się</a></li>
                                </ul>
                            </li>
                            @endif

                            @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Zaloguj się</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Zarejestruj się</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>

        @yield('js')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('theme/js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
