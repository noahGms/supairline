<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departure extends Model
{
    protected $fillable = [
        'numero',
        'departureDate',
        'placeEmpty',
        'placeUsed',
        'employeesPiloteId',
        'employeesPiloteId1',
        'employeesMemberId1',
        'employeesMemberId2',
        'employeesMemberId3',
        'employeesMemberId4',
        'flight_id'
    ];

    public function pilote1() {
        return $this->belongsTo('App\Employee', 'employeesPiloteId');
    }

    public function pilote2() {
        return $this->belongsTo('App\Employee', 'employeesPiloteId1');
    }

    public function member1() {
        return $this->belongsTo('App\Employee', 'employeesMemberId1');
    }

    public function member2() {
        return $this->belongsTo('App\Employee', 'employeesMemberId2');
    }

    public function member3() {
        return $this->belongsTo('App\Employee', 'employeesMemberId3');
    }

    public function member4() {
        return $this->belongsTo('App\Employee', 'employeesMemberId4');
    }

    public function flight() {
        return $this->belongsTo('App\Flight', 'flight_id');
    }

}
