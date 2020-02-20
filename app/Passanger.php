<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passanger extends Model
{
    protected $fillable = [
        'numero', 'name', 'firstName', 'address', 'city_id', 'job', 'bank'
    ];

    public function city() {
        return $this->belongsTo('App\City');
    }
}
