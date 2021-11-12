@extends('layouts.app')

@section('content')
<h1 class="text-center text-warning my-4"><i class="fas fa-pen-fancy"></i></i> Recenzja</h1>

<div class="card  col-12 m-2" style="background-color: rgb(32, 32, 29)">
    <div class="card-header text-white">
        <div class="float-end">
            <p class="card-text text-warning "><i class="fas fa-star"></i> {{ $review->stars ? mb_strimwidth($review->stars, 0, 50) : '-' }}</p>
        </div>
        {{ mb_strimwidth($review->user->name, 0, 50) }}
    </div>
    <div class="card-body text-center" style="background-color: rgb(41, 41, 36)">
    <h5 class="card-title text-warning">{{ mb_strimwidth($review->title, 0, 50) }}</h5>
    <p class="card-text text-white ">{{$review->desc }}</p>
    </div>
    <div class="card-footer text-muted">
        <div class="float-left">
            @if(isset($review->created_at))
                {{ $review->created_at }}
            @endif
        </div>

    </div>
</div>
@endsection
