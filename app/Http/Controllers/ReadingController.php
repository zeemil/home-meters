<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Meter;
use App\Models\Reading;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Meter $meter)
    {
        $readings = $meter->readings()->orderBy('date')->get();

        return view('reading.index', compact('meter', 'readings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Meter $meter)
    {
        return view('Reading.create', compact('meter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Meter $meter)
    {

        $validated = $request->validate([
            'value' => 'required|numeric|gt:0',
            'isOfficial' => 'required|boolean',
            'date' => 'required|date'
        ]);


        $reading = $meter->readings()->create($validated);


        return redirect(route('readings.index', ['meter' => $meter->id]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Reading $reading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reading $reading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reading $reading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reading $reading)
    {
        //
    }
}
