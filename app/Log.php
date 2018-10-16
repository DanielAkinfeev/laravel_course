<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['task_id', 'created_at'];

    public function scopeStatusDone($query)
    {
        return $query->where('status', 1);
    }

    public function scopeStatusQueued($query)
    {
        return $query->where('status', 0);
    }
}