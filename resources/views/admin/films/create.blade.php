@extends('layouts.app')

@section('content')

    <form class="form" method="POST" enctype="multipart/form-data">
        @csrf
        <p>Dodanie filmu</p>
        @if ($errors->any())
            <p>
            <ul style="color: red">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </p>
        @endif
        <label>Nazwa filmu</label>
        <input type="text" value="" name="title" placeholder="Nazwa filmu" required>

        <label>Gatunek</label>
        <input type="text" value="" name="kind" placeholder="Gatunek" required>

        <label>Data wydania</label>
        <input type="date" value="" name="date" placeholder="Data wydania" required>

        <label>Reżyser</label>
        <input type="text" value="" name="producer" placeholder="Reżyser" required>

        <label>Obraz</label>
        <input type="file" value="" name="image" placeholder="Obraz" required>

        <button type="submit" id="add-new-film-button">Dodaj film</button>
    </form>
@endsection
