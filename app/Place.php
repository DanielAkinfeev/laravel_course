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

    public function gradesPictures() {
        return $this->hasManyThrough(Grade::class, Picture::class, 'place_id', 'gradetable_id');
    }

    public function grades() {
        return $this->morphMany(Grade::class, 'gradetable');
    }
}
