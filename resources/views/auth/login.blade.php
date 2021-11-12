@extends('layouts.app')

@section('content')
        <form class="offset-3 col-6 mt-5" id="login-form" method="POST">
            @csrf
            <h1 class="text-center text-warning my-4"><i class="fas fa-key"></i> Logowanie</h1>
            <span style="color: red">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </span>
                <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label text-white text-center">Login</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Login" name="login" required>
                    </div>
                </div>
                <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-3 col-form-label text-white text-center">Hasło</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control mb-2" placeholder="Hasło" name="password" required>
                        <a href="{{ route('reset') }}" class="forgot-link">Nie pamiętam hasła</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-end col-lg-3 text-center text-dark">zaloguj się</button>
                    <a href="{{ route('register') }}" class="float-end p-2">Załóż konto</a>

            </form>
@endsection



