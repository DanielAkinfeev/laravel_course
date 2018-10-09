<style>
    table, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
@isset($logs)
<table>
    <tr>
        <td>id</td>
        <td>task id</td>
        <td>date create</td>
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