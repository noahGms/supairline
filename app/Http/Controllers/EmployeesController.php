<?php

namespace App\Http\Controllers;

use App\Employee;
use App\EmployeesFunction;
use App\License;
use App\City;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        //dd($employees);
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = new Employee();
        $cities = City::all();
        $licenses = License::all();
        $employeesFunctions = EmployeesFunction::all();
        return view('employees.create', compact('cities', 'licenses', 'employeesFunctions', 'employee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'socialNumero' => 'required|max:15',
            'name' => 'required',
            'firstName' => 'required',
            'address' => 'required',
            'city_id' => 'required|integer',
            'salary' => 'required',
            'hours' => 'required',
            'license_id' => 'integer',
            'employeesFunction_id' => 'required|integer'
        ]);

        Employee::create($data);
        flash("L'employé a bien été crée")->success();
        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/employees/' . $id . '/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $cities = City::all();
        $licenses = License::all();
        $employeesFunctions = EmployeesFunction::all();
        return view('employees.edit', compact('cities', 'licenses', 'employeesFunctions', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'socialNumero' => 'required|max:15',
            'name' => 'required',
            'firstName' => 'required',
            'address' => 'required',
            'city_id' => 'required|integer',
            'salary' => 'required',
            'hours' => 'required',
            'license_id' => 'integer',
            'employeesFunction_id' => 'required|integer'
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($data);
        flash("L'employé a bien été modifié")->success();
        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        flash("L'employé a bien été supprimé")->success();
        return redirect('/employees');
    }
}
