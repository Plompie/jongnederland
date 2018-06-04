<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeheerController extends Controller
{
    public function index()
    {
        return redirect()->route('beheer.dashboard');
    }

    public function dashboard()
    {
        return view('beheer.dashboard');
    }
}
