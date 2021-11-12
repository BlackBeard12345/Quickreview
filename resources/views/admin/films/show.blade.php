@extends('layouts.app')

@section('content')
<div class="row">

    {{-- Film --}}
    <div class="col-12">
        <div class="card mb-3" style="background-color: rgb(41, 41, 36)">
            <div class="row g-0" style="background-color: rgb(41, 41, 36)">
                <div class="col-md-5" style="background:url({{ $film->path }}) no-repeat  center center ; background-size: cover">
                    {{-- <img src="{{ $film->path }}" class="img-fluid rounded-start" style="background: rgb(41, 41, 36)" alt="..."> --}}
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                <h5 class="card-title text-warning">{{ mb_strimwidth($film->title, 0, 50) }}</h5>
                            </div>
                            <div class="col-2">
                                <p class="card-text text-white "><i class="fas fa-star"></i> {{ $film->stars ? mb_strimwidth($film->stars, 0, 50) : '-' }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p class="card-text"><small class="text-muted">Gatunek</small></p>
                            </div>
                            <div class="col-3">
                                <p class="card-text text-white">{{ mb_strimwidth($film->kind, 0, 50) }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p class="card-text"><small class="text-muted">Data produkcji</small></p>
                            </div>
                            <div class="col-3">
                                <p class="card-text text-white">{{ mb_strimwidth($film->date, 0, 50) }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p class="card-text"><small class="text-muted">Reżyser</small></p>
                            </div>
                            <div class="col-3">
                                <p class="card-text text-white">{{ mb_strimwidth($film->producer, 0, 50) }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p class="card-text"><small class="text-muted">Ilość recenzji</small></p>
                            </div>
                            <div class="col-3">
                                <p class="card-text text-white">{{ $film->reviews_count }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button onclick="togleShowAdReview()" class="btn btn-outline-info float-end m-1" >Dodaj Recenzję</button>
                                <a href="{{ route('admin.films.edit', $film->id) }}" class="btn btn-outline-warning float-end m-1">
                                    Edytuj
                                </a>
                                <a href="{{ route('admin.films.delete', $film->id) }}" class="btn btn-outline-danger float-end m-1">
                                    Usuń
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- chowana forma do dodwania recenzji --}}
    <div class="col-12">
        <form class=" mt-5" id="addReviewForm" style="display: none" method="POST" action="{{ route('admin.reviews.store', $film->id) }}">
            @csrf
            <h1 class="text-center text-warning my-4"><i class="fas fa-pen-fancy"></i></i> Dodaj Recenzje</h1>
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
                    <label for="title" class="col-sm-3 col-form-label text-white">Tytuł</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control" name="title" placeholder="Tytuł" required>
                        </div>
                </div>

                <div class="row mb-3">

                    <label for="title" class="col-sm-3 col-form-label text-white">Recenzja</label>
                        <div class="col-sm-9">
                            <div class="form-floating">
                                <textarea class="form-control" name="desc" placeholder="Recenzja" required></textarea>
                            </div>
                        </div>
                </div>

                <div class="row mb-3">
                    <label for="stars" class="col-sm-3 col-form-label text-white">Ocena </label>
                        <div class="col-sm-9">
                            <input type="number" name="stars" placeholder="Ocena" min="0" max="10" step="1" required>
                        </div>
                </div>

                <button type="submit" class="btn btn-primary float-end text-center text-dark" id="add-new-film-button">Dodaj recenzję</button>
        </form>
    </div>


    {{-- recenzje --}}

        @foreach($film->reviews as $review)
        <div class="col-6 g-3">
            <div class="card m-2" style="background-color: rgb(32, 32, 29)">
                <div class="card-header text-white">
                    <div class="float-end">
                        <p class="card-text text-warning "><i class="fas fa-star"></i> {{ $film->stars ? mb_strimwidth($film->stars, 0, 50) : '-' }}</p>
                    </div>
                    <p class="card-text white "><i class="fas fa-user-edit"></i> {{ mb_strimwidth($review->user->name, 0, 50) }}</p>

                </div>
                <div class="card-body text-center" style="background-color: rgb(41, 41, 36)">
                <h5 class="card-title text-warning">{{ mb_strimwidth($review->title, 0, 30, '...') }}</h5>
                <p class="card-text text-white ">{{ mb_strimwidth($review->desc, 0, 150, '...') }}</p>
                </div>
                <div class="card-footer text-muted">
                    <div >
                        <a href="{{ route('admin.reviews.show', $review->id) }}" class="btn btn-info float-end m-1 text-dark" >
                            Zobacz
                        </a>
                        <a href="{{ route('admin.reviews.edit', [$film->id, $review->user->id]) }}" class="btn btn-warning float-end m-1 text-dark" >
                            Edytuj
                        </a>
                        <a href="{{ route('admin.reviews.delete', $film->id) }}" class="btn btn-danger float-end m-1 text-dark" >
                            Usuń
                        </a>
                    </div>
                    <div class="float-left">
                        @if(isset($review->created_at))
                            {{ $review->created_at }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>

@endsection
