<?php

namespace App\Http\Controllers;

use App\Models\peran;
use App\Http\Requests\StoreperanRequest;
use App\Http\Requests\UpdateperanRequest;

class PeranController extends Controller
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
     * @param  \App\Http\Requests\StoreperanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreperanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function show(peran $peran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function edit(peran $peran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateperanRequest  $request
     * @param  \App\Models\peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateperanRequest $request, peran $peran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function destroy(peran $peran)
    {
        //
    }
}
