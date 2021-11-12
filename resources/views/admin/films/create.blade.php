@extends('layouts.app')

@section('content')

    <form class="offset-3 col-6 mt-5" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center text-warning my-4"><i class="fas fa-film"></i> Dodawanie filmu</h1>
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
                <label for="title" class="col-sm-3 col-form-label text-white">Nazwa filmu</label>
                    <div class="col-sm-9">
                        <input  type="text" class="form-control" name="title" placeholder="Nazwa filmu" required>
                    </div>
            </div>

            <div class="row mb-3">
                <label for="kind" class="col-sm-3 col-form-label text-white">Gatunek</label>
                    <div class="col-sm-9">
                        <input  type="text" class="form-control" name="kind" placeholder="Gatunek" required>
                    </div>
            </div>

            <div class="row mb-3">
                <label for="date" class="col-sm-3 col-form-label text-white">E-mail</label>
                    <div class="col-sm-9">
                        <input type="date" value="" class="form-control" name="date" placeholder="Data wydania" required>
                    </div>
            </div>

            <div class="row mb-3">
                <label for="producer" class="col-sm-3 col-form-label text-white">Login</label>
                    <div class="col-sm-9">
                        <input type="text" value="" class="form-control" name="producer" placeholder="Reżyser" required>
                    </div>
            </div>

            <div class="row mb-3">
                <label for="image" class="col-sm-3 col-form-label text-white">Grafika</label>
                    <div class="col-sm-9">
                        <input type="file" value=""  class="form-control" name="image" placeholder="Obraz" accept="image/*" required>
                    </div>
            </div>

            <button type="submit" class="btn btn-primary float-end col-lg-3 text-center text-dark" id="add-new-film-button">Dodaj Film</button>

        </form>
@endsection
