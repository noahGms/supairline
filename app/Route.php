<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['numero', 'departureCity', 'arrivalCity'];

    public function dCity() {
        return $this->belongsTo('App\City', 'departureCity');
    }

    public function aCity() {
        return $this->belongsTo('App\City', 'arrivalCity');
    }

    public function flight() {
        return $this->hasMany('App/Flight');
    }

}
