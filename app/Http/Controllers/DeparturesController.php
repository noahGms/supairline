<?php

namespace App\Http\Controllers;

use App\Departure;
use App\Employee;
use App\Flight;
use Illuminate\Http\Request;

class DeparturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departures = Departure::all();
        $employees = Employee::all();
        $flights = Flight::all();
        return view('departures.index', compact('departures', 'employees', 'flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departure = new Departure();
        $employees = Employee::all();
        $flights = Flight::all();
        return view('departures.create', compact('departure', 'employees', 'flights'));
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
            'numero' => 'required|max:8',
            'departureDate' => 'required|date',
            'placeEmpty' => 'required|integer',
            'placeUsed' => 'required|integer',
            'employeesPiloteId' => 'required|integer',
            'employeesPiloteId1' => '',
            'employeesMemberId1' => 'required|integer',
            'employeesMemberId2' => 'required|integer',
            'employeesMemberId3' => '',
            'employeesMemberId4' => '',
            'flight_id' => 'required|integer'
        ]);

        Departure::create($data);
        flash('Le départ a bien été créé')->success();
        return redirect('/departures');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departure = Departure::findOrFail($id);
        $employees = Employee::all();
        $flights = Flight::all();
        return view('departures.edit', compact('departure', 'employees', 'flights'));
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
            'numero' => 'required|max:8',
            'departureDate' => 'required|date',
            'placeEmpty' => 'required|integer',
            'placeUsed' => 'required|integer',
            'employeesPiloteId' => 'required|integer',
            'employeesPiloteId1' => '',
            'employeesMemberId1' => 'required|integer',
            'employeesMemberId2' => 'required|integer',
            'employeesMemberId3' => '',
            'employeesMemberId4' => '',
            'flight_id' => 'required|integer'
        ]);

        $departure = Departure::findOrFail($id);
        $departure->update($data);
        flash('Le départ a bien été modifié')->success();
        return redirect('/departures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departure = Departure::findOrFail($id);
        $departure->delete();
        flash('Le départ a bien été supprimé')->success();
        return redirect('/departures');
    }
}
