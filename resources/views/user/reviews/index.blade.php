@extends('layouts.app')

@section('content')

<div class="form">

    <table class="all-films-table">

        <thead>
        <tr>
            <th>Film</th>
            <th>Tytuł recenzji</th>
            <th>Recenzja</th>
            <th>Ocena</th>
            <th>Data dodania</th>
            <th>Akcje</th>
        </tr>
        </thead>
        <tbody id="table-body" class="table-body">
        @foreach($reviews as $review)
            <tr>
                <td>{{ mb_strimwidth($review->film->title, 0, 50) }}</td>
                <td>{{ mb_strimwidth($review->title, 0, 50) }}</td>
                <td>{{ mb_strimwidth($review->desc, 0, 50) }}</td>
                <td>{{ mb_strimwidth($review->stars, 0, 50) }}</td>
                <td>{{ mb_strimwidth($review->created_at, 0, 50) }}&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <a href="{{ route('user.reviews.show', $review->id) }}">Zobacz</a> |
                    <a href="{{ route('user.reviews.edit', $review->film->id) }}">Edytuj</a> | <a href="{{ route('user.reviews.delete', $review->film->id) }}">Usuń</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
