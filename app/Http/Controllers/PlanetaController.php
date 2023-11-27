<?php

namespace App\Http\Controllers;

use App\Models\Planeta;
use App\Http\Requests\StorePlanetaRequest;
use App\Http\Requests\UpdatePlanetaRequest;

class PlanetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlanetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanetaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planeta  $planeta
     * @return \Illuminate\Http\Response
     */
    public function show(Planeta $planeta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planeta  $planeta
     * @return \Illuminate\Http\Response
     */
    public function edit(Planeta $planeta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlanetaRequest  $request
     * @param  \App\Models\Planeta  $planeta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlanetaRequest $request, Planeta $planeta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planeta  $planeta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planeta $planeta)
    {
        //
    }
}
