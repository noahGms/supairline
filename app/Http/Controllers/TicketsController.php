<?php

namespace App\Http\Controllers;

use App\Departure;
use App\Passanger;
use App\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        $departures = Departure::all();
        $passangers = Passanger::all();
        return view('tickets.index', compact('tickets', 'departures', 'passangers'));
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
            'date' => 'required|date',
            'price' => 'required',
            'departure_id' => 'required|integer',
            'passanger_id' => 'required|integer',
        ]);

        Ticket::create($data);
        flash('Le ticket a bien été créé')->success();
        return redirect('/tickets');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);
        $departures = Departure::all();
        $passangers = Passanger::all();
        return view('tickets.edit', compact('ticket', 'departures', 'passangers'));
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
            'date' => 'required|date',
            'price' => 'required',
            'departure_id' => 'required|integer',
            'passanger_id' => 'required|integer',
        ]);

        $ticket = Ticket::findOrFail($id);
        $ticket->update($data);
        flash('Le ticket a bien été modifié')->success();
        return redirect('/tickets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
        flash('Le ticket a bien été supprimé')->success();
        return redirect('/tickets');
    }
}
