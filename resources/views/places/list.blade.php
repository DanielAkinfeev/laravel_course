@extends('main')
@section('title', 'Список мест')
@section('content')
@foreach($places as $place)
    <div>
        <a href="{{URL::route('detail', ['id' => $place->id])}}">
        {{$place->name}} - {{$place->type->name}}
        </a>
    </div><br>
@endforeach
@endsection