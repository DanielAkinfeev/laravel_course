@extends('main')
@section('title', 'Добавить фото')
@section('content')
    <form action="/{{Request::path()}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input name="file" type="file" class="form-control">
        <input name="place" type="hidden" value="{{$id}}">
        <input type="submit" value="добавить">
    </form>
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endsection