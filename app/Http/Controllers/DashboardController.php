<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // function index

    public function index()
    {
        return view('dashboard.index', [
            'title'         => 'Dashboard | Klinik Gigi',
            'menu'          => 'dashboard',
            'header_bar'    => 'Dashboard'
        ]);
    }
}
