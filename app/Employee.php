<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'socialNumero',
        'name',
        'firstName',
        'address',
        'city_id',
        'salary',
        'hours',
        'license_id',
        'employeesFunction_id'
    ];

    public function license() {
        return $this->hasOne('App\License', 'id');
    }

    public function employeesFunction() {
        return $this->belongsTo('App\EmployeesFunction', 'id');
    }

    public function city() {
        return $this->belongsTo('App\City');
    }
}
