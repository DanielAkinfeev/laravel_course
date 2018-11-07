<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'name', 'type_id',
    ];

    public function pictures() {
        return $this->hasMany(Picture::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
