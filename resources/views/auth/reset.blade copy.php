@extends('layouts.app')

@section('content')

    @if (isset($success))
    <span style="color: green">
        {{ $success }}
    </span>
    @endif

    <form class="login-form form" id="login-form" method="POST">
        @csrf
        <p>Resetowanie hasła</p>
        <span style="color: red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </span>

        <label>Twój adres email</label>
        <input type="email" placeholder="Twój adres email" name="email" required>
        <button type="submit">Resetuj</button>
    </form>
    
@endsection
