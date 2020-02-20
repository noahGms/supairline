<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    protected $fillable = ['numero', 'capacity', 'type_id'];

    public function type() {
        return $this->belongsTo('App\Type', 'id');
    }

    public function flight() {
        return $this->hasMany('App\Flight');
    }
}
