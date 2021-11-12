@extends('layouts.app')

@section('content')
    <form class="login-form form" id="login-form" method="POST">
    @csrf
        <p>Logowanie</p>
        <span style="color: red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </span>

        <input type="text" placeholder="Login" name="login" required>
        <input type="password" placeholder="Hasło" name="password" required>
        <a href="{{ route('reset') }}" class="forgot-link">Nie pamiętam hasła</a>
        <button type="submit">Zaloguj się</button>
        <span>lub</span>
        <a href="{{ route('register') }}">Załóż konto</a>
    </form>
@endsection
