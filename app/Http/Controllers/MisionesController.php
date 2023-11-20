<?php

namespace App\Http\Controllers;

use App\Models\misiones;
use App\Http\Requests\StoremisionesRequest;
use App\Http\Requests\UpdatemisionesRequest;

class MisionesController extends Controller
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
     * @param  \App\Http\Requests\StoremisionesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremisionesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\misiones  $misiones
     * @return \Illuminate\Http\Response
     */
    public function show(misiones $misiones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\misiones  $misiones
     * @return \Illuminate\Http\Response
     */
    public function edit(misiones $misiones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemisionesRequest  $request
     * @param  \App\Models\misiones  $misiones
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemisionesRequest $request, misiones $misiones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\misiones  $misiones
     * @return \Illuminate\Http\Response
     */
    public function destroy(misiones $misiones)
    {
        //
    }
}
