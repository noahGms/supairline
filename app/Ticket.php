<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['date', 'price', 'departure_id', 'passanger_id'];
    public function departure() {
        return $this->belongsTo('App\Departure', 'departure_id');
    }
    public function passanger() {
        return $this->belongsTo('App\Passanger', 'passanger_id');
    }
}
