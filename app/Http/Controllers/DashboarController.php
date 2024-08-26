<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboarController extends Controller
{
    //
    public function index()
    {
        $title = 'Halaman Utama';
        $halaman = '';
        return view('dashboard.index', compact('title', 'halaman'));
    }
}
