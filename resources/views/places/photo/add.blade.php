@extends('main')
@section('title', 'Добавить фото')
@section('content')
    <form action="/{{Request::path()}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input name="file" type="file" class="form-control">
        <select name="place">
            @foreach($places as $place)
                <option @if($place->id === $id) selected @endif value="{{$place->id}}">{{$place->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="добавить">
    </form>
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endsection