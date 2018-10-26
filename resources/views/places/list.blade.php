@extends('main')
@section('title', 'Список мест')
@section('content')
@foreach($places as $place)
    <div>
        <a href="/places/{{$place->id}}">
        {{$place->name}} - {{$place->type}}
        </a>
    </div><br>
@endforeach
@endsection