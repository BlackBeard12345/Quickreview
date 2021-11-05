<?php

namespace App\Http\Helpers;

use App\Models\Film;

class ReviewHelper
{
    /**
     * @param $filmId
     * @return string
     */
    public static function updateFilmStars($filmId)
    {
        $film = Film::where('id', $filmId)
            ->with('reviews')
            ->firstOrFail();

        $sum = 0;
        $count = 0;
        foreach ($film->reviews as $review) {
            $sum += $review->stars;
            $count++;
        }

        if ($count > 0) {
            return round($sum/$count, 2);
        }

        return 0;
    }
}
