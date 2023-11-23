<?php

namespace App\Http\Controllers;

use App\Models\poder;
use App\Http\Requests\StorepoderRequest;
use App\Http\Requests\UpdatepoderRequest;

class PoderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poder = poder::all();
        return response()->json($poder);
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
     * @param  \App\Http\Requests\StorepoderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepoderRequest $request)
    {
        $poder = poder::create( $request->all() );
        return response()->json($poder);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\poder  $poder
     * @return \Illuminate\Http\Response
     */
    public function show(poder $poder)
    {
        $poder = $poder::findOrfail($poder);
        return response()->json($poder);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\poder  $poder
     * @return \Illuminate\Http\Response
     */
    public function edit(poder $poder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepoderRequest  $request
     * @param  \App\Models\poder  $poder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepoderRequest $request, poder $poder)
    {
        $poder->update($request->all());
        return response()->json($poder);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\poder  $poder
     * @return \Illuminate\Http\Response
     */
    public function destroy(poder $poder)
    {
        $poder = $poder::findOrfail($poder);
        $poder->delete();
        return response()->json(null);
    }
}
