@extends('main')
@section('title', 'Список мест')
@section('content')
    {{$place->name}} - {{$place->type->name}} оценка места :
    <a href="{{URL::route('place_like', ['placeId' => $place->id])}}">like</a> -
    <a href="{{URL::route('place_dislike', ['placeId' => $place->id])}}">dislike</a>
    <div>
        <table>
    @foreach($pictures as $picture)
        <tr>
        <td>
            <img class="image" width='400px' src="{{Storage::url($picture->path)}}">
        </td>
        <td>
            <a href="{{URL::route('photo_like', ['photoId' => $picture->id, 'placeId' => $place->id])}}">like</a> -
            <a href="{{URL::route('photo_dislike', ['photoId' => $picture->id, 'placeId' => $place->id])}}">dislike</a>
            <form action="{{URL::route('pictures.destroy', $picture)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete">
            </form>
            <br>
            <a href="{{URL::route('download', $picture)}}">download</a>
        </td>
        </tr>
    @endforeach
        </table>
    </div>
    <a href="{{URL::route('photo_add', ['id' => $place->id])}}"> Добавить фото</a>
    <div>
        Общая оценка: {{$counts['total']}}<br>
        Оценка за место: {{$counts['placeCount']}} <br>
        Оценка за фотографии оценка: {{$counts['pictureCount']}} <br>
    </div>
@endsection