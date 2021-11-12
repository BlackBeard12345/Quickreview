@extends('layouts.app')

@section('content')

        @foreach($films as $film)

            <div class="card mb-3 col-12" style="background-color: rgb(41, 41, 36)">
                <div class="row g-0">
                    <div class="col-md-5" style="background:url({{ $film->path }}) no-repeat  center center ; background-size: cover">
                    </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                <h5 class="card-title text-warning">{{ mb_strimwidth($film->title, 0, 50) }}</h5>
                            </div>
                            <div class="col-2">
                                <p class="card-text text-warning "><i class="fas fa-star"></i> {{ $film->stars ? mb_strimwidth($film->stars, 0, 50) : '-' }}</p>
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
                                <a href="{{ route('user.films.show', $film->id) }}" class="btn btn-outline-info float-end m-1" >
                                    Zobacz
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    {{ $films->links() }}
@endsection

