<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'name', 'type',
    ];

    public function pictures() {
        return $this->hasMany(Picture::class);
    }
}
