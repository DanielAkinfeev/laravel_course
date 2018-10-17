<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogsController extends Controller
{
    public function show()
    {
        $logs = Log::orderBy('created_at', 'desc')->statusQueued()->get();
        return view('queue')->with(['logs' => $logs]);
    }

    public function takeFirstLog() {
        $log = Log::orderBy('created_at')->statusQueued()->first();
        Log::where('id', $log->id)->update(['status' => 1]);
        return redirect()->action('TaskController@show');
    }
}
