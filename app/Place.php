<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public $table = "places";
    protected $fillable = [
        'name', 'type',
    ];
}
