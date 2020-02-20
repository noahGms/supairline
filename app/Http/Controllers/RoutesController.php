<?php

namespace App\Http\Controllers;

use App\City;
use App\Route;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::all();
        $cities = City::all();
        return view('routes.index', compact('routes', 'cities'));
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
            'departureCity' => 'required|integer',
            'arrivalCity' => 'required|integer'
        ]);

        Route::create($data);
        flash("L'itinéraire a bien été créé")->success();
        return redirect('/routes');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $route = Route::findOrFail($id);
        $cities = City::all();
        return view('routes.edit', compact('route', 'cities'));
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
            'departureCity' => 'required|integer',
            'arrivalCity' => 'required|integer'
        ]);

        $route = Route::findOrFail($id);
        $route->update($data);
        flash("L'itinéraire a bien été modifié")->success();
        return redirect('/routes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route = Route::findOrFail($id);
        $route->delete();
        flash("L'itinéraire a bien été supprimé")->success();
        return redirect('/routes');
    }
}
