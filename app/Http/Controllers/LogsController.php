<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogsController extends Controller
{
    public function show()
    {
        return view('queue')->with(['logs' => $this->getLogs()]);
    }

    private function getLogs() {
        return DB::table('logs')->orderBy('created_at', 'desc')->where('status', 0)->get();
    }

    public function takeFirstLog() {
        $this->updateFirstLogStatus();
        return redirect()->action('TaskController@show');
    }

    private function updateFirstLogStatus() {
        $log = $this->getFirsLog();
        return DB::table('logs')->where('id', $log->id)->where('status', 0)->update(['status' => 1]);
    }

    private function getFirsLog() {
        return DB::table('logs')->orderBy('created_at', 'asc')->where('status', 0)->first();
    }
}
