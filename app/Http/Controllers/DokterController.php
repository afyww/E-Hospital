<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = User::where('level', 'dokter')->get();
        return view('dokter', compact('dokter'));
    }

    public function create()
    {
        return view('adddokter');
    }
}
