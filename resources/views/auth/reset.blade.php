@extends('layouts.app')

@section('content')

    @if (isset($success))
    <span style="color: green">
        {{ $success }}
    </span>
    @endif

    <form class="offset-3 col-6 mt-5" id="login-form" method="POST">
        @csrf
        <h1 class="text-center text-warning my-4">Resetowanie hasła</h1>
        <span style="color: red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </span>

        <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-4 col-form-label text-white">Twój adres email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" placeholder="Twój adres email" name="email" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary float-end col-lg-3 text-center text-dark">Resetuj</button>

    </form>
@endsection
