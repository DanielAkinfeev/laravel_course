<?php

namespace App\Http\Controllers;

use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function show()
    {
        $tasks = DB::table('tasks')->get();
        return view('task.list')->with(['tasks' => $tasks]);
    }

    public function inc($id)
    {
        DB::table('tasks')->where('id', $id)->increment('counter');
        DB::table('logs')->insert(['task_id' => $id, 'created_at' => date('Y-m-d H:i:s')]);
        return redirect()->action('TaskController@show');
    }

}
