<?php

namespace App\Http\Controllers;

use App\Models\tipomision;
use App\Http\Requests\StoretipomisionRequest;
use App\Http\Requests\UpdatetipomisionRequest;

class TipomisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipomision = tipomision::all();
        return response()->json($tipomision);
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
     * @param  \App\Http\Requests\StoretipomisionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretipomisionRequest $request)
    {
        $tipomision = tipomision::create( $request->all() );
        return response()->json($tipomision);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipomision  $tipomision
     * @return \Illuminate\Http\Response
     */
    public function show(tipomision $tipomision)
    {
        $tipomision = $tipomision::findOrfail($tipomision);
        return response()->json($tipomision);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipomision  $tipomision
     * @return \Illuminate\Http\Response
     */
    public function edit(tipomision $tipomision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetipomisionRequest  $request
     * @param  \App\Models\tipomision  $tipomision
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetipomisionRequest $request, tipomision $tipomision)
    {
        $tipomision->update($request->all());
        return response()->json($tipomision);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipomision  $tipomision
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipomision $tipomision)
    {
        $tipomision = $tipomision::findOrfail($tipomision);
        $tipomision->delete();
        return response()->json(null);
    }
}
