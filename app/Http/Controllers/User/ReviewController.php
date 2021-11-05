<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ReviewHelper;
use App\Http\Requests\Reviews\StoreRequest;
use App\Models\Film;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('user_id', Auth::id())
            ->with('film')
            ->get();

        return view('user.reviews.index', [
            'reviews' => $reviews
        ]);
    }

    public function store(StoreRequest $request, $id)
    {
        $data = $request->validated();

        $review = Review::where([
            ['user_id', Auth::id()],
            ['film_id', $id]
        ])
            ->first();

        if ($review) {
            return redirect()
                ->back()
                ->withErrors(['Recenzja do tego filmu już została stworzona']);
        }

        $film = Film::where('id', $id)
            ->firstOrFail();

        $data['user_id'] = Auth::id();

        $film->reviews()->create($data);

        $film->update([
            'stars' => ReviewHelper::updateFilmStars($film->id)
        ]);

        return redirect()
            ->back();
    }

    public function show($id)
    {
        $review = Review::where([
            ['id', $id],
        ])
            ->with('film')
            ->firstOrFail();

        return view('user.reviews.show', [
            'review'    => $review
        ]);
    }

    public function edit($id)
    {
        $review = Review::where([
            ['film_id', $id],
            ['user_id', Auth::id()]
        ])
            ->with('film')
            ->firstOrFail();

        return view('user.reviews.edit', [
            'review'    => $review
        ]);
    }

    public function update(StoreRequest $request, $id)
    {
        $data = $request->validated();

        $review = Review::where([
            ['film_id', $id],
            ['user_id', Auth::id()]
        ])
            ->with('film')
            ->firstOrFail();

        $review->update($data);

        $review->film->update([
            'stars' => ReviewHelper::updateFilmStars($review->film->id)
        ]);

        return redirect()
            ->route('index');
    }

    public function delete($id)
    {
        $review = Review::where([
            ['film_id', $id],
            ['user_id', Auth::id()]
        ])->firstOrFail();

        $review->delete();

        return redirect()
            ->back();
    }
}
