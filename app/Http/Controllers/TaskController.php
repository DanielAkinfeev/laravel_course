<?php

namespace App\Http\Controllers;

use App\Log;
use App\Task;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function show()
    {
        return view('task.list')->with(['tasks' => Task::all()]);
    }

    public function inc($id)
    {
        Task::where('id', $id)->increment('counter');
        Log::create(['task_id' => $id]);
        return redirect()->action('TaskController@show');
    }

}
