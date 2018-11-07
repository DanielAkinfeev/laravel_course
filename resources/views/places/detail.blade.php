@extends('main')
@section('title', 'Список мест')
@section('content')
    {{$place->name}} - {{$place->type->name}}
    <div>
    @foreach($pictures as $picture)
        <img class="image" width='400px' src="{{Storage::url($picture->path)}}">
    @endforeach
    </div>
    <a href="{{URL::route('photo_add', ['id' => $place->id])}}"> Добавить фото</a>
@endsection