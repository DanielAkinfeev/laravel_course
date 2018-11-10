@extends('main')
@section('title', 'Рейтинг')
@section('content')
    @foreach($places as $place)
        <div>
           {{$place['name']}} - {{$place['rate']}}
        </div><br>
    @endforeach
@endsection