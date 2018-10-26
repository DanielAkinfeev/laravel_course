<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public $table = "pictures";
    protected $fillable = [
        'path', 'placeId',
    ];
}
