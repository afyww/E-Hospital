<?php

namespace App\Http\Controllers;

use App\Models\Rekam;
use Illuminate\Http\Request;

class RekamController extends Controller
{
    public function index()
    {
        $rekam = Rekam::with('antrian')->get();
        // dd($rekam);
        return view('rekam', compact('rekam'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Rekam $rekam)
    {
        
    }

    public function edit(Rekam $rekam)
    {
        //
    }

    public function update(Request $request, Rekam $rekam)
    {
        //
    }

    public function destroy(Rekam $rekam)
    {
        //
    }
}
