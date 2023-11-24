<?php

namespace App\Http\Controllers;

use App\Models\grupo;
use App\Http\Requests\StoregrupoRequest;
use App\Http\Requests\UpdategrupoRequest;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupo = grupo::all();
        return response()->json($grupo);
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
     * @param  \App\Http\Requests\StoregrupoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregrupoRequest $request)
    {
        $grupo = grupo::create( $request->all() );
        return response()->json($grupo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(grupo $grupo)
    {
        $grupo = grupo::findOrfail($grupo);
        return response()->json($grupo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(grupo $grupo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategrupoRequest  $request
     * @param  \App\Models\grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategrupoRequest $request, grupo $grupo)
    {
        $grupo->update($request->all());
        return response()->json($grupo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(grupo $grupo)
    {
        $grupo = grupo::findOrfail($grupo);
        $grupo->delete();
        return response()->json(null);
    }
}
