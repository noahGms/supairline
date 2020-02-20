<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'zipCode'];

    public function employee() {
        return $this->hasMany('App\Employee');
    }

    public function route() {
        return $this->hasMany('App\Route');
    }

    public function passager() {
        return $this->hasMany('App\Passanger');
    }
}
