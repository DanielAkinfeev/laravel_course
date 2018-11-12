<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureFormRequest;
use App\Http\Requests\PlaceFormRequest;
use App\Picture;
use App\Place;
use App\Type;

class PlacesController extends Controller
{
    public function show()
    {
        $places = Place::orderBy('created_at', 'desc')->get();
        return view('places.list')->with(['places' => $places]);
    }

    public function create(PlaceFormRequest $request)
    {
        Place::create(['name' => $request->name, 'type_id' => $request->type]);
        return redirect()->route('places');
    }

    public function detail($id) {
        $place = Place::findOrFail($id);
        $placeGrades = $place->grades->count();
        $pictureGrades = $place->gradesPictures->count();
        $total = $placeGrades + $pictureGrades;

        $counts = [
            "total" => $total,
            "placeCount" => $placeGrades,
            "pictureCount" => $pictureGrades,
        ];
        $pictures = $place->pictures;
        return view('places.detail')->with(['place' => $place, 'pictures' => $pictures, 'counts' => $counts]);
    }

    public function photo($id)
    {
        $place = Place::findOrFail($id);
        return view('places.photo.add')->with(['photos' => $place->pictures()->get(), 'id' => $id]);
    }

    public function photo_add()
    {
        $places = Place::all();
        return view('places.photo.addWithPlace')->with(['places' => $places]);
    }

    public function add(PictureFormRequest $request)
    {
        $request->file->store('public');
        $name = $request->file->hashName();
        Picture::create(['path' => $name, 'place_id' => $request->place]);

        return redirect()->route('places');
    }

    public function add_with_places(PictureFormRequest $request)
    {
        $request->file->store('public');
        $name = $request->file->hashName();
        Picture::create(['path' => $name, 'place_id' => $request->place]);

        return redirect()->route('places');
    }

    public function form()
    {
        $types = Type::all();
        return view('places.create')->with(['types' => $types]);
    }

    public function rate()
    {
        $places = Place::all();
        $places = $places->map(function($place) {
            $item = $place->id;
            return [
                'name' => $place->name,
                'rate' => $place->getRate(),
            ];
        })->sortByDesc('rate');

        return view('rate')->with(['places' => $places]);
    }
}
