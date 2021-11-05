<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $films = Film::orderBy('date', 'desc')
            ->withCount('reviews')
            ->paginate(10);

        return view('admin.index', [
            'films' => $films
        ]);

    }
}
