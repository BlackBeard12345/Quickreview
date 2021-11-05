@extends('layouts.app')

@section('content')
    <form class="registration-form form" id="login-form" method="POST">
        @csrf
        <p>Załóż konto</p>
        @if ($errors->any())
            <p>
                <ul style="color: red">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </p>
        @endif
        <input type="text" placeholder="Imię" name="name" required>
        <input type="text" placeholder="Nazwisko" name="surname" required>
        <input type="email" placeholder="Adres e-mail" name="email" required>
        <input type="text" placeholder="Login" name="login" required>
        <input type="password" placeholder="Hasło" name="password" required>
        <input type="password" placeholder="Powtórz hasło" name="passwordRepeat" required>
        <button type="submit">Załóż konto</button>
    </form>
@endsection
