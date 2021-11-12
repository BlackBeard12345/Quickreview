@extends('layouts.app')

@section('content')
<div class="row g-3">
        @foreach($reviews as $review)
        <div class="col-6 g-3">
            <div class="card m-2" style="background-color: rgb(32, 32, 29)">
                <div class="card-header text-white">
                    <div class="float-end">
                        <p class="card-text text-warning "><i class="fas fa-star"></i> {{ $review->stars ? mb_strimwidth($review->stars, 0, 50) : '-' }}</p>
                    </div>
                    <p class="card-text white "><i class="fas fa-user-edit"></i> {{ mb_strimwidth($review->user->name, 0, 50) }}</p>

                </div>
                <div class="card-body text-center" style="background-color: rgb(41, 41, 36)">
                <h5 class="card-title text-warning">{{ mb_strimwidth($review->title, 0, 30, '...') }}</h5>
                <p class="card-text text-white ">{{ mb_strimwidth($review->desc, 0, 150, '...') }}</p>
                </div>
                <div class="card-footer text-muted">
                    <div >
                                <a href="{{ route('user.reviews.edit', $review->film->id) }}" class="btn btn-warning float-end m-1 text-dark">
                                    Edytuj
                                </a>
                                <a href="{{ route('user.reviews.delete', $review->film->id) }}" class="btn btn-danger float-end m-1 text-dark">
                                    Usuń
                                </a>
                        <a href="{{ route('admin.reviews.show', $review->id) }}" class="btn btn-info float-end m-1 text-dark" >
                            Zobacz
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
@endsection
