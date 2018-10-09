<?php

namespace App\Http\Controllers;

use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function show()
    {
        return view('task.list')->with(['tasks' => $this->getTasks()]);
    }

    private function getTasks() {
        return DB::table('tasks')->get();
    }

    public function inc($id)
    {
        $this->incrementTaskCounter($id);
        $this->putToLog($id);
        return redirect()->action('TaskController@show');
    }

    private function incrementTaskCounter($id)
    {
        DB::table('tasks')->where('id', $id)->increment('counter');
    }

    private function putToLog($id)
    {
        DB::table('logs')->insert(['task_id' => $id, 'status' => 0, 'created_at' => date('Y-m-d H:i:s')]);
    }

}
