<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeesFunction extends Model
{
    protected $fillable = ['name'];

    public function employee() {
        return $this->hasMany('App\Employee');
    }
}
