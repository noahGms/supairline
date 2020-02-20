<?php

namespace App\Http\Controllers;

use App\City;
use App\Passanger;
use Illuminate\Http\Request;

class PassangersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passangers = Passanger::all();
        $cities = City::all();
        return view('passangers.index', compact('passangers', 'cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $passanger = new Passanger();
        $cities = City::all();
        return view('passangers.create', compact('passanger', 'cities'));
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
            'name' => 'required',
            'firstName' => 'required',
            'address' => 'required',
            'city_id' => 'required|integer',
            'job' => 'required',
            'bank' => 'required'
        ]);

        Passanger::create($data);
        flash('Le passager a bien été créé')->success();
        return redirect('/passangers');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $passanger = Passanger::find($id);
        $cities = City::all();
        return view('passangers.edit', compact('passanger', 'cities'));
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
            'name' => 'required',
            'firstName' => 'required',
            'address' => 'required',
            'city_id' => 'required|integer',
            'job' => 'required',
            'bank' => 'required',

        ]);

        $passanger = Passanger::find($id);
        $passanger->update($data);
        flash('Le passager a bien été modifié')->success();
        return redirect('/passangers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passanger = Passanger::find($id);
        $passanger->delete();
        flash('Le passager a bien été supprimé')->success();
        return redirect('/passangers');
    }
}
