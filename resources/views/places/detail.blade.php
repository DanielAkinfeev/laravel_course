@extends('main')
@section('title', 'Список мест')
@section('content')
    {{$place->name}} - {{$place->type}}
    <div>
    @foreach($pictures as $picture)
        <img class="image" width='400px' src="{{Storage::url($picture->path)}}">
    @endforeach
    </div>
    <a href="/places/{{$place->id}}/photos/add"> Добавить фото</a>
@endsection