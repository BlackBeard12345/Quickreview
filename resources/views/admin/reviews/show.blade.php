@extends('layouts.app')

@section('content')
        <form class="form" method="POST">
            @csrf
            <p>Recenzja</p>

            <label>Tytuł filmu</label>
            <input type="text" value="{{ mb_strimwidth($review->film->title, 0, 50) }}" placeholder="Tytuł filmu" disabled>

            <label>Tytuł</label>
            <input type="text" name="title" value="{{ mb_strimwidth($review->title, 0, 50) }}" placeholder="Tytuł" disabled>

            <label>Recenzja</label>
            <textarea name="desc" placeholder="Recenzja" disabled rows="10"> {{ $review->desc }} </textarea>

            <label>Ocena</label>
            <input type="number" name="stars" value="{{ mb_strimwidth($review->stars, 0, 50) }}" placeholder="Ocena" min="0" max="10" step="1" disabled>

        </form>
@endsection
