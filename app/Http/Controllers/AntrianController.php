<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Antrian;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index()
    {
        $antrian = Antrian::with('pasien', 'dokter')->get();
        return view('antrian', compact('antrian'));
    }

    public function create()
    {
        $pasien = User::where('level', 'pasien')->get();
        $dokter = User::where('level', 'dokter')->get();

        return view('addantrian', compact('pasien', 'dokter'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pasien_id' => 'required|integer|exists:users,id',
            'dokter_id' => 'required|integer|exists:users,id',
            'penyakit' => 'required|string',
            'pada_tanggal' => 'required|date', // Validate the date field
        ]);

        // Create a new Antrian instance and assign the validated data
        $antrian = new Antrian();
        $antrian->pasien_id = $validatedData['pasien_id'];
        $antrian->dokter_id = $validatedData['dokter_id'];
        $antrian->penyakit = $validatedData['penyakit'];
        $antrian->pada_tanggal = $validatedData['pada_tanggal'];
        $antrian->save();

        return redirect()->route('antrian');
    }


    public function show(Antrian $antrian)
    {
        //
    }

    public function destroy(Antrian $antrian)
    {
        $antrian->delete();

        return redirect()->route('antrian')->with('success', 'Antrian has been deleted successfully');
    }
}
