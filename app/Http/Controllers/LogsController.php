<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogsController extends Controller
{
    public function show()
    {
        $logs = DB::table('logs')->orderBy('created_at', 'desc')->where('status', 0)->get();
        return view('queue')->with(['logs' => $logs]);
    }

    public function takeFirstLog() {
        $log = DB::table('logs')->orderBy('created_at')->where('status', 0)->first();
        DB::table('logs')->where('id', $log->id)->where('status', 0)->update(['status' => 1]);
        return redirect()->action('TaskController@show');
    }
}
