@extends('main')
@section('title', 'Добавить место')
@section('content')
    <form action="/places/create" method="POST" enctype="multipart/form-data">
        @csrf
        <input name="name" type="text" value="{{ old('name') }}" class="form-control">
        <select name="type">
            <option value="1">Тип1</option>
            <option value="2">Тип2</option>
            <option value="3">Тип3</option>
        </select>
        <input type="submit" value="Отправить">
    </form>
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endsection