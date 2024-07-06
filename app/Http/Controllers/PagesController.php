<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {

        return view('dashboard');
    }

    public function user()
    {

        return view('user');
    }

    public function dashboardpasien(){

        return view('dashboard-pasien');
    }

}
