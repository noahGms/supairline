<?php

namespace App\Http\Controllers;

use App\EmployeesFunction;
use Illuminate\Http\Request;

class EmployeesFunctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeesFunctions = EmployeesFunction::all();
        return view('employeesFunctions.index', compact('employeesFunctions'));
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
            'name' => 'required'
        ]);

        EmployeesFunction::create($data);
        flash('La fonctions a bien été crée');
        return redirect('/functions');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employeesFunction = EmployeesFunction::findOrFail($id);
        return view('employeesFunctions.edit', compact('employeesFunction'));
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
            'name' => 'required'
        ]);

        $employeesFunction = EmployeesFunction::findOrFail($id);
        $employeesFunction->update($data);
        flash('La fonction a bien été modifier');
        return redirect('/functions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeesFunction = EmployeesFunction::findOrFail($id);
        $employeesFunction->delete();
        flash('La fonction a bien été supprimée');
        return redirect('/functions');
    }
}
