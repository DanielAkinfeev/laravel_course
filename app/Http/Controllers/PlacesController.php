<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureFormRequest;
use App\Http\Requests\PlaceFormRequest;
use App\Picture;
use App\Place;
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
        Place::create(['name' => $request->name, 'type' => $request->type]);

        return redirect('/places');
    }

    public function detail($id) {
        $place = Place::findOrFail($id);
        $pictures = Picture::orderBy('created_at', 'desc')->where('place_id', $place->id)->get();
        return view('places.detail')->with(['place' => $place, 'pictures' => $pictures]);
    }

    public function photo($id)
    {
        $photos = Picture::where('place_id', $id)->get();
        return view('places.photo.add')->with(['photos' => $photos, 'id' => $id]);
    }

    public function add(PictureFormRequest $request)
    {
        $request->file->store('public');
        $name = $request->file->hashName();
        Picture::create(['path' => $name, 'place_id' => $request->place]);

        return redirect('/');
    }

    public function form()
    {
        return view('places.create');
    }
}
