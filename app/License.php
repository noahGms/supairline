<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $fillable = [
        'numero', 'validityDate'
    ];

    public function employee() {
        return $this->hasOne('App\Employee');
    }
}
