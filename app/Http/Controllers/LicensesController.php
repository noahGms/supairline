<?php

namespace App\Http\Controllers;

use App\License;
use Illuminate\Http\Request;

class LicensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licenses = License::all();

        return view('licenses.index', compact('licenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('licenses.create');
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
            'validityDate' => 'required'
        ]);

        License::create($data);
        flash('La licence a bien été crée')->success();
        return redirect('/licenses');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $license = License::findOrFail($id);
        return view('licenses.edit', compact('license'));
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
            'validityDate' => 'required'
        ]);

        $license = License::findOrFail($id);
        $license->update($data);

        flash('La licence a bien été modifier')->success();
        return redirect('/licenses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $license = License::findOrFail($id);
        $license->delete();
        flash('La licence a bien été supprimée')->success();
        return redirect('/licenses');
    }
}
