<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function admin()
    {
        return view('admin.index');
    }
    public function surverior()
    {
        return view('surverior.home');
    }
}
