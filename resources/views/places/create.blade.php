@extends('main')
@section('title', 'Добавить место')
@section('content')
    <form action="{{URL::route('post_create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input name="name" type="text" value="{{ old('name') }}" class="form-control">
        <select name="type">
            @foreach($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Отправить">
    </form>
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endsection