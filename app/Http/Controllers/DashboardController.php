<?php

namespace App\Http\Controllers;

use App\Departure;
use App\Employee;
use App\Flight;
use App\Ticket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $employees = Employee::where('employeesFunction_id', 1)->get();
        $flights = Flight::all();
        $departures = Departure::where('departureDate', date('Y-m-d')
        )->get();

        $allPrice = $this->calculPrice();

        return view('dashboard.index', compact('employees', 'flights', 'departures', 'allPrice'));
    }

    private function calculPrice() {
        $tickets = Ticket::all();
        $total = 0;
        foreach ($tickets as $ticket) {
            $test = floatval($ticket->price);
            $total += $test;
        }
        return $total;
    }
}
