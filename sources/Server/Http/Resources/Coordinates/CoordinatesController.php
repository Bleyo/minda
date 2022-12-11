<?php

namespace App\Http\Controllers;

use App\Models\Coordinates;
use App\Http\Requests\UpdateCoordinatesRequest;
use App\Http\Requests\StoreCoordinatesRequest;
use App\Http\AppController;

class CoordinatesController extends AppController
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
     * @param  \App\Http\Requests\StoreCoordinatesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoordinatesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coordinates  $coordinates
     * @return \Illuminate\Http\Response
     */
    public function show(Coordinates $coordinates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coordinates  $coordinates
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordinates $coordinates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoordinatesRequest  $request
     * @param  \App\Models\Coordinates  $coordinates
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoordinatesRequest $request, Coordinates $coordinates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coordinates  $coordinates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordinates $coordinates)
    {
        //
    }
}
