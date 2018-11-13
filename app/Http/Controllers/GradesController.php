<?php

namespace App\Http\Controllers;

use App\Picture;
use App\Place;

class GradesController extends Controller
{
    public function pictureLike($photoId, $placeId) {
        Picture::findOrFail($photoId)->grades()->create(['like' => true]);
        return redirect()->route('detail', ['id' => $placeId]);
    }

    public function pictureDislike($photoId, $placeId) {
        Picture::findOrFail($photoId)->grades()->create(['like' => false]);
        return redirect()->route('detail', ['id' => $placeId]);
    }

    public function placeLike($placeId) {
        Place::findOrFail($placeId)->grades()->create(['like' => true]);
        return redirect()->route('detail', ['id' => $placeId]);
    }

    public function placeDislike($placeId) {
        Place::findOrFail($placeId)->grades()->create(['like' => false]);
        return redirect()->route('detail', ['id' => $placeId]);
    }
}
