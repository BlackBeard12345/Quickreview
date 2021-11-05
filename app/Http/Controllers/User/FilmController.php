<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function show($id)
    {
        $film = Film::where('id', $id)
            ->with('reviews.user')
            ->firstOrFail();


        return view('user.films.show', [
            'film'  => $film
        ]);
    }
}
