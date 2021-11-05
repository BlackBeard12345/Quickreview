@extends('layouts.app')

@section('content')
        <form class="form" method="POST">
            @csrf
            <p>Moje dane</p>
            @if ($errors->any())
                <p>
                <ul style="color: red">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </p>
            @endif

            <label>Imię</label>
            <input type="text" value="{{ mb_strimwidth($user->name, 0, 50) }}" name="name" placeholder="Imię" required>

            <label>Nazwisko</label>
            <input type="text" value="{{ mb_strimwidth($user->surname, 0, 50) }}" name="surname" placeholder="Nazwisko" required>

            <label>Login</label>
            <input type="text" value="{{ mb_strimwidth($user->login, 0, 50) }}" name="login" placeholder="Login" required>

            <button type="submit" id="add-new-film-button">Edytuj swoje dane</button>
        </form>
@endsection
