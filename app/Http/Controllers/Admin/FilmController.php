<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Uploader;
use App\Http\Requests\Films\StoreRequest;
use App\Http\Requests\Films\UpdateRequest;
use App\Models\Film;

class FilmController extends Controller
{
    public function create()
    {
        return view('admin.films.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $data['path'] = Uploader::uploadImage('images', $data['image']);

        Film::create($data);

        return redirect()
            ->route('index');
    }

    public function show($id)
    {
        $film = Film::where('id', $id)
            ->with('reviews.user')
            ->firstOrFail();


        return view('admin.films.show', [
            'film'  => $film
        ]);
    }

    public function edit($id)
    {
        $film = Film::where('id', $id)
            ->firstOrFail();


        return view('admin.films.edit', [
            'film'  => $film
        ]);
    }

    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated();

        $film = Film::where('id', $id)
            ->firstOrFail();

        if (isset($data['image'])) {
            $data['path'] = Uploader::uploadImage('images', $data['image']);
            Uploader::deleteAttachment($film->path);
        }

        $film->update($data);

        return redirect()
            ->route('index');
    }

    public function delete($id)
    {
        $film = Film::where('id', $id)
            ->with('reviews')
            ->firstOrFail();

        Uploader::deleteAttachment($film->path);

        $film->reviews()->delete();
        $film->delete();

        return redirect()
            ->route('index');
    }
}
