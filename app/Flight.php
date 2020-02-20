<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'numero', 'periodeValidity1', 'periodeValidity2', 'departureTime', 'arrivalTime', 'route_id', 'airplane_id'
    ];

    public function route() {
        return $this->belongsTo('App\Route', 'route_id');
    }

    public function airplane() {
        return $this->belongsTo('App\Airplane', 'airplane_id');
    }

    public function departure() {
        return $this->hasMany('App\Departure');
    }
}
