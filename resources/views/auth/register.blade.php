@extends('layouts.app')

@section('content')
    <form class="offset-3 col-6 mt-5" id="login-form" method="POST">
        @csrf
        <h1 class="text-center text-warning my-4"><i class="fas fa-user-circle"></i> Załóż konto</h1>
        @if ($errors->any())
            <p>
                <ul style="color: red">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </p>
        @endif
            <div class="row mb-3">
                <label for="name" class="col-sm-3 col-form-label text-white">Imię</label>
                    <div class="col-sm-9">
                        <input  type="text" class="form-control" id="name" placeholder="Imię" name="name" required>
                    </div>
            </div>

            <div class="row mb-3">
                <label for="surname" class="col-sm-3 col-form-label text-white">Nazwisko</label>
                    <div class="col-sm-9">
                        <input  type="text" class="form-control" id="surname" placeholder="nazwisko" name="surname" required>
                    </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-sm-3 col-form-label text-white">E-mail</label>
                    <div class="col-sm-9">
                        <input  type="email" class="form-control" id="email" placeholder="Adres e-mail" name="email" required>
                    </div>
            </div>

            <div class="row mb-3">
                <label for="login" class="col-sm-3 col-form-label text-white">Login</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="login" placeholder="Login" name="login" required>
                    </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-sm-3 col-form-label text-white">Hasło</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control mb-2" id="password" placeholder="Hasło" name="password" required>
                    </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-sm-3 col-form-label text-white">Powtórz hasło</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control mb-2" id="password" placeholder="Powtórz Hasło" name="passwordRepeat" required>
                    </div>
            </div>

            <button type="submit" class="btn btn-primary float-end col-lg-3 text-center text-dark">Załóż konto</button>
            <a href="{{ route('login') }}" class="float-end p-2">Logowanie</a>

        </form>
@endsection
