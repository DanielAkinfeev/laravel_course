@extends('main')
@section('title', 'Список работ')
@section('content')
<table class="table table-hover">
    <tr>
        <td scope="col">id</td>
        <td scope="col">
            name
        </td>
        <td scope="col">counter</td>
    </tr>
    @foreach($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>
                <a href="/tasks/{{$task->id}}">
                    {{$task->name}}
                </a>
            </td>
            <td>{{$task->counter}}</td>
        </tr>
    @endforeach
</table>
<a href="/get">Принять в работу</a><br>
@endsection