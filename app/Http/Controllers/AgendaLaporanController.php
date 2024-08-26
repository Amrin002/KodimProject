<?php

namespace App\Http\Controllers;

use App\Models\AgendaLaporan;
use Illuminate\Http\Request;

class AgendaLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Halaman Agenda Laporan';
        // $agendaLaporans = AgendaLaporan::all();
        $halaman = 'Agenda Laporan';
        return view('agendaLaporan.index', compact('title', 'halaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AgendaLaporan $agendaLaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AgendaLaporan $agendaLaporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AgendaLaporan $agendaLaporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AgendaLaporan $agendaLaporan)
    {
        //
    }
}
