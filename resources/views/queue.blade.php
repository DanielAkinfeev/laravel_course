@extends('main')
@section('title', 'Логи')
@section('content')
    @isset($logs)
    <table class="table table-hover">
        <tr>
            <td scope="col">id</td>
            <td scope="col">task id</td>
            <td scope="col">date create</td>
        </tr>
        @foreach($logs as $log)
            <tr>
                <td>{{$log->id}}</td>
                <td>{{$log->task_id}}</td>
                <td>{{$log->created_at}}</td>
            </tr>
        @endforeach
    </table>
    @endisset
@endsection