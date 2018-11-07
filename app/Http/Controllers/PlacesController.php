<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureFormRequest;
use App\Http\Requests\PlaceFormRequest;
use App\Picture;
use App\Place;
use App\Type;
use Illuminate\Http\Request;
use Validator;

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
        $pictures = $place->pictures()->get();
        return view('places.detail')->with(['place' => $place, 'pictures' => $pictures]);
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
}
