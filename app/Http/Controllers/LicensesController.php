<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\License;

class LicensesController extends Controller
{
    public function index() {
        $licenses = License::all();
        return view('licenses.index', compact('licenses'));
    }

    public function create() {
        $license = new License();
        return view('licenses.create', compact('license'));
    }

    public function store() {
        $data = request()->validate([
            'numero' => 'required|max:8',
            'validityDate' => 'required'
        ]);

        License::create($data);

        return back();
    }
}
