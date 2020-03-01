<?php

namespace App\Http\Controllers;

use App\Departure;
use App\Employee;
use App\EmployeesFunction;
use App\Flight;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        //$employees = Employee::where($ef->name, 'Pilote')->get();
        $employees = DB::table('employees_functions')
            ->join('employees', 'employees_functions.id', '=', 'employees.employeesFunction_id')
            ->select('employees.*')
            ->where('employees_functions.name', '=', 'Pilote')
            ->get();
        $flights = Flight::all();
        $departures = Departure::where('departureDate', date('Y-m-d'))->get();

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
