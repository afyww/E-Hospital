<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = User::where('level', 'pasien')->get();
        return view('pasien', compact('pasien'));
    }
    
    public function create()
    {
        return view('addpasien');
    }
}
