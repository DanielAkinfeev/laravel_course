<style>
    table, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table style="">
    <tr>
        <td>id</td>
        <td>
            name
        </td>
        <td>counter</td>
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
<a href="/queue">Очередь</a>