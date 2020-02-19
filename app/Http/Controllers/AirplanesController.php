<?php

namespace App\Http\Controllers;

use App\Airplane;
use App\Type;
use Illuminate\Http\Request;

class AirplanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airplanes = Airplane::all();
        $types = Type::all();
        return view('airplanes.index', compact('airplanes', 'types'));
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
            'capacity' => 'required|integer',
            'type_id' => 'required|integer'
        ]);

        Airplane::create($data);
        flash("L'avion a bien été créer");
        return redirect('/airplanes');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $airplane = Airplane::findOrFail($id);
        $types = Type::all();
        return view('airplanes.edit', compact('airplane', 'types'));
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
            'capacity' => 'required|integer',
            'type_id' => 'required|integer'
        ]);

        $airplane = Airplane::findOrFail($id);
        $airplane->update($data);
        flash("L'avion a bien été modifié");
        return redirect('/airplanes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $airplane = Airplane::findOrFail($id);
        $airplane->delete();
        flash("L'avion a bien été supprimé");
        return redirect('/airplanes');
    }
}
