<?php
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Review</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
<header>
    <h1>Quick Review</h1>
    <nav>
        @if (Auth::user())
            @if (Auth::user()->isAdmin())
                <a href="{{ route('admin.index') }}">Filmy</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('admin.reviews.index') }}">Moje recenzje</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('admin.reviews.all') }}">Wszystkie recenzje</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('admin.profile.index') }}">Profil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            @else
                <a href="{{ route('user.index') }}">Filmy</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('user.reviews.index') }}">Moje recenzje</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('user.profile.index') }}">Profil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            @endif

            <a href="{{ route('logout') }}">Wyloguj się</a>
        @else
            <a href="{{ route('login') }}">Zaloguj się</a> &nbsp;
            <a href="{{ route('register') }}">Zarejstruj się</a>
        @endif
    </nav>
</header>
<div class="content">
    @yield('content')
</div>

@yield('js')
</body>
</html>