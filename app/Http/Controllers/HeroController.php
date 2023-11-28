<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Http\Requests\StoreHeroRequest;
use App\Http\Requests\UpdateHeroRequest;
class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $hero = Hero::all();
       return response()->json($hero);
    }

    // Agrega métodos para otras operaciones CRUD (show, create, store, edit, update, destroy)

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
     * @param  \App\Http\Requests\StoreHeroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHeroRequest $request)
    {
        $hero = Hero::create( $request->all() );
        return response()->json($hero);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        $hero = Hero::findOrfail($hero);
        return response()->json($hero);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHeroRequest  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHeroRequest $request, Hero $hero)
    {
        $hero->update($request->all());
        return response()->json($hero);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        $hero = Hero::findOrfail($hero);
        $hero->delete();
        return response()->json(null);
    }
}