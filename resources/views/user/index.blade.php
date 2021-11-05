@extends('layouts.app')

@section('content')

<div class="form">

    <table class="all-films-table">

        <thead>
        <tr>
            <th>Obraz</th>
            <th>Gatunek</th>
            <th>Nazwa filmu</th>
            <th>Data wydania</th>
            <th>Średnia ocen</th>
            <th>Reżyser</th>
            <th>Liczba recenzji</th>
            <th>Akcje</th>
        </tr>
        </thead>
        <tbody id="table-body" class="table-body">
        @foreach($films as $film)
            <tr>
                <td>
                    <img src="{{ $film->path }}" width="200">
                </td>
                <td>{{ mb_strimwidth($film->kind, 0, 50) }}</td>
                <td>{{ mb_strimwidth($film->title, 0, 50) }}</td>
                <td>{{ mb_strimwidth($film->date, 0, 50) }}</td>
                <td>{{ $film->stars ? mb_strimwidth($film->stars, 0, 50) : '-' }}</td>
                <td>{{ mb_strimwidth($film->producer, 0, 50) }}</td>
                <td>{{ $film->reviews_count }}</td>
                <td><a href="{{ route('user.films.show', $film->id) }}">Zobacz</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $films->links() }}
</div>
@endsection
