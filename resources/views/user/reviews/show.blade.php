@extends('layouts.app')

@section('content')
        <form class="form" method="POST">
            @csrf
            <p>Recenzja</p>

            <label>Tytuł filmu</label>
            <input type="text" value="{{ $review->film->title }}" placeholder="Tytuł filmu" disabled>

            <label>Tytuł</label>
            <input type="text" name="title" value="{{ $review->title }}" placeholder="Tytuł" disabled>

            <label>Recenzja</label>
            <textarea name="desc" placeholder="Recenzja" disabled rows="10"> {{ $review->desc }} </textarea>

            <label>Ocena</label>
            <input type="number" name="stars" value="{{ $review->stars }}" placeholder="Ocena" min="0" max="10" step="1" disabled>

        </form>
@endsection
