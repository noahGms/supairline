<?php

namespace App\Http\Controllers;

use App\Airplane;
use App\Flight;
use App\Route;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::all();
        $routes = Route::all();
        $airplanes = Airplane::all();
        return view('flights.index', compact('flights', 'routes', 'airplanes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flight = new Flight();
        $routes = Route::all();
        $airplanes = Airplane::all();
        return view('flights.create', compact('flight', 'routes', 'airplanes'));
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
            'periodeValidity1' => 'required|date',
            'periodeValidity2' => 'required|date',
            'departureTime' => 'required',
            'arrivalTime' => 'required',
            'route_id' => 'required|integer',
            'airplane_id' => 'required|integer'
        ]);

        Flight::create($data);
        flash('Le vol a bien été créé')->success();
        return redirect('/flights');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flight = Flight::findOrFail($id);
        $routes = Route::all();
        $airplanes = Airplane::all();
        return view('flights.edit', compact('flight', 'routes', 'airplanes'));
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
            'periodeValidity1' => 'required|date',
            'periodeValidity2' => 'required|date',
            'departureTime' => 'required',
            'arrivalTime' => 'required',
            'route_id' => 'required|integer',
            'airplane_id' => 'required|integer'
        ]);

        $flight = Flight::findOrFail($id);
        $flight->update($data);
        flash('Le vol a bien été modifié')->success();
        return redirect('/flights');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::findOrFail($id);
        $flight->delete();
        flash('Le vol a bien été supprimé')->success();
        return redirect('/flights');
    }
}
