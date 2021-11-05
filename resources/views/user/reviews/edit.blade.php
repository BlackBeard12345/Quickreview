@extends('layouts.app')

@section('content')
        <form class="form" method="POST">
            @csrf
            <p>Recenzja</p>
            @if ($errors->any())
                <p>
                <ul style="color: red">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </p>
            @endif

            <label>Tytuł filmu</label>
            <input type="text" value="{{ mb_strimwidth($review->film->title, 0, 50) }}" placeholder="Tytuł filmu" disabled>

            <label>Tytuł</label>
            <input type="text" name="title" value="{{ mb_strimwidth($review->title, 0, 50) }}" placeholder="Tytuł" required>

            <label>Recenzja</label>

            <input type="text" name="desc" value="{{ mb_strimwidth($review->desc, 0, 50) }}" placeholder="Recenzja" required>

            <label>Ocena</label>
            <input type="number" name="stars" value="{{ mb_strimwidth($review->stars, 0, 50) }}" placeholder="Ocena" min="0" max="10" step="1" required>

            <button type="submit" id="add-new-film-button">Edytuj recenzję</button>
        </form>
@endsection
