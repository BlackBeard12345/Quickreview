@extends('layouts.app')

@section('content')

        <form class="offset-3 col-6 mt-5" method="POST">
            @csrf
            <h1 class="text-center text-warning my-4"><i class="fas fa-pen-fancy"></i></i> Edycja Recenzji</h1>
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
                    <label for="title" class="col-sm-3 col-form-label text-white">Tytuł filmu</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control" value="{{ mb_strimwidth($review->film->title, 0, 50) }}" placeholder="Tytuł filmu" disabled>
                        </div>
                </div>

                <div class="row mb-3">
                    <label for="title" class="col-sm-3 col-form-label text-white">Tytuł</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control" value="{{ mb_strimwidth($review->title, 0, 50) }}" placeholder="Tytuł filmu" required>
                        </div>
                </div>

                <div class="row mb-3">

                    <label for="title" class="col-sm-3 col-form-label text-white">Recenzja</label>
                        <div class="col-sm-9">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Recenzja" required rows="10"   style="height: 200px">{{ $review->desc }}</textarea>
                            </div>
                        </div>
                </div>

                <div class="row mb-3">
                    <label for="stars" class="col-sm-3 col-form-label text-white">Ocena </label>
                        <div class="col-sm-9">
                            <input type="number" name="stars" class="form-control" value="{{ mb_strimwidth($review->stars, 0, 50) }}" placeholder="Ocena" min="0" max="10" step="1" required>
                        </div>
                </div>
                        <button type="submit" class="btn btn-primary float-end text-center text-dark" id="add-new-film-button">Edytuj recenzję</button>
            </form>
@endsection
