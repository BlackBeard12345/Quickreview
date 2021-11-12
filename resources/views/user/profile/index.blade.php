@extends('layouts.app')

@section('content')
        <form class="offset-3 col-6 mt-5" method="POST">
            @csrf
            <h1 class="text-center text-warning my-4">Moje dane</h1>
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
                <label for="inputEmail3" class="col-sm-2 col-form-label text-white">Imię</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ mb_strimwidth($user->name, 0, 50) }}" name="name" placeholder="Imię" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-white">Nazwisko</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ mb_strimwidth($user->surname, 0, 50) }}" name="surname" placeholder="Nazwisko" required>
                        </div>
                 </div>

                 <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-white">Login</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ mb_strimwidth($user->login, 0, 50) }}" name="login" placeholder="Login" required>
                        </div>
                 </div>


                <button type="submit" class="btn btn-primary float-end col-lg-3 text-center text-dark">Edytuj swoje dane</button>

            </form>
@endsection
