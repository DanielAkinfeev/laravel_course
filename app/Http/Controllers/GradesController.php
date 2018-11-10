<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Picture;
use App\Place;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function pictureLike($photoId, $placeId) {
        Picture::findOrFail($photoId)->grades()->save(new Grade(['like' => true]));
        return redirect()->route('detail', ['id' => $placeId]);
    }

    public function pictureDislike($photoId, $placeId) {
        Picture::findOrFail($photoId)->grades()->save(new Grade(['like' => false]));
        return redirect()->route('detail', ['id' => $placeId]);
    }

    public function placeLike($placeId) {
        Place::findOrFail($placeId)->grades()->save(new Grade(['like' => true]));
        return redirect()->route('detail', ['id' => $placeId]);
    }

    public function placeDislike($placeId) {
        Place::findOrFail($placeId)->grades()->save(new Grade(['like' => true]));
        return redirect()->route('detail', ['id' => $placeId]);
    }
}
