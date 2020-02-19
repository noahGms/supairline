<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name'];
    public function airplane() {
        return $this->hasMany('App\Airplane', 'id');
    }
}
