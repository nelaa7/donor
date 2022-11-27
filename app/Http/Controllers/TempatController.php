<?php

namespace App\Http\Controllers;

use App\Models\tempat;
use App\Http\Requests\StoretempatRequest;
use App\Http\Requests\UpdatetempatRequest;

class TempatController extends Controller
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
     * @param  \App\Http\Requests\StoretempatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretempatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function show(tempat $tempat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function edit(tempat $tempat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetempatRequest  $request
     * @param  \App\Models\tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetempatRequest $request, tempat $tempat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function destroy(tempat $tempat)
    {
        //
    }
}
