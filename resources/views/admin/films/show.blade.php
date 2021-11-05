@extends('layouts.app')

@section('content')

    <form class="form">
        <p>Informacja o filmie</p>

        <label>Nazwa filmu</label>
        <input type="text" value="{{ mb_strimwidth($film->title, 0, 50) }}" placeholder="Nazwa" disabled>

        <label>Gatunek</label>
        <input type="text" value="{{ mb_strimwidth($film->kind, 0, 50) }}" placeholder="Gatunek" disabled>

        <label>Data wydania</label>
        <input type="date" value="{{ $film->date }}" placeholder="Nazwa" disabled>

        <label>Reżyser</label>
        <input type="text" value="{{ mb_strimwidth($film->producer, 0, 50) }}" placeholder="Reżyser" disabled>

        <label>Ocena</label>
        <input type="text" value="{{ $film->stars ? mb_strimwidth($film->stars, 0, 50) : '-' }}" placeholder="Stars" disabled>

        <label>Obraz</label>
        <img src="{{ $film->path }}" width="400">
    </form>

    <div class="form">
        <p>Recenzji</p>
        <table class="all-films-table">
            <thead>
            <tr>
                <th>Imię użytkownika</th>
                <th>Temat recenzji</th>
                <th>Recenzja</th>
                <th>Ocena</th>
                <th>Akcje</th>
            </tr>
            </thead>
            <tbody id="table-body" class="table-body">
            @foreach($film->reviews as $review)
                <tr>
                    <td>{{ mb_strimwidth($review->user->name, 0, 50) }}</td>
                    <td>{{ mb_strimwidth($review->title, 0, 50) }}</td>
                    <td>{{ mb_strimwidth($review->desc, 0, 50, '...') }}</td>
                    <td>{{ mb_strimwidth($review->stars, 0, 50) }}</td>
                    <td>
                        <a href="{{ route('admin.reviews.show', $review->id) }}">Zobacz</a> |
                        <a href="{{ route('admin.reviews.edit', [$film->id, $review->user->id]) }}">Edytuj</a> | <a href="{{ route('admin.reviews.delete', $film->id) }}">Usuń</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <form class="form" method="POST" action="{{ route('admin.reviews.store', $film->id) }}">
        @csrf
        <p>Dodaj recenzję</p>
        @if ($errors->any())
            <p>
            <ul style="color: red">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </p>
        @endif

        <label>Tytuł</label>
        <input type="text" name="title" placeholder="Tytuł" required>

        <label>Recenzja</label>
        <input type="text" name="desc" placeholder="Recenzja" required>

        <label>Ocena</label>
        <input type="number" name="stars" placeholder="Ocena" min="0" max="10" step="1" required>

        <button type="submit" id="add-new-film-button">Dodaj recenzję</button>
    </form>
@endsection
