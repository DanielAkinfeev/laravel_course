<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureFormRequest;
use App\Http\Requests\PlaceFormRequest;
use App\Picture;
use App\Place;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;
use Response;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places = Place::all();
        return view('places.photo.addWithPlace')->with(['places' => $places]);
    }

    public function add_with_places(PictureFormRequest $request)
    {
        $request->file->store('public');
        $name = $request->file->hashName();
        Picture::create(['path' => $name, 'place_id' => $request->place]);

        return redirect()->route('places');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Picture $picture
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Picture $picture)
    {
        Picture::destroy([$picture->id]);
        return redirect()->route('places');
    }

    public function download(Picture $picture) {
        return response()->download(public_path(\Storage::url($picture->path)));
    }
}
