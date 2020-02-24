<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Ticket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $employees = Employee::where('employeesFunction_id', 1)->get();
        $allPrice = $this->calculPrice();
        //dd($allPrice);
        return view('dashboard.index', compact('employees', 'allPrice'));
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
