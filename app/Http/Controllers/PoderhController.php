<?php

namespace App\Http\Controllers;

use App\Models\poderh;
use App\Http\Requests\StorepoderhRequest;
use App\Http\Requests\UpdatepoderhRequest;

class PoderhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poderh = poderh::all();
        return response()->json($poderh);
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
     * @param  \App\Http\Requests\StorepoderhRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepoderhRequest $request)
    {
        $poderh = poderh::create( $request->all() );
        return response()->json($poderh);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\poderh  $poderh
     * @return \Illuminate\Http\Response
     */
    public function show(poderh $poderh)
    {
        $poderh = poderh::findOrfail($poderh);
        return response()->json($poderh);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\poderh  $poderh
     * @return \Illuminate\Http\Response
     */
    public function edit(poderh $poderh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepoderhRequest  $request
     * @param  \App\Models\poderh  $poderh
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepoderhRequest $request, poderh $poderh)
    {
        $poderh->update($request->all());
        return response()->json($poderh);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\poderh  $poderh
     * @return \Illuminate\Http\Response
     */
    public function destroy(poderh $poderh)
    {
        $poderh = $poderh::findOrfail($poderh);
        $poderh->delete();
        return response()->json(null);
    }
}
