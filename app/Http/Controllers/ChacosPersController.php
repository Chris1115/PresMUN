<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storechacos_persRequest;
use App\Http\Requests\Updatechacos_persRequest;
use App\Models\chacos_pers;

class ChacosPersController extends Controller
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
     * @param  \App\Http\Requests\Storechacos_persRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storechacos_persRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chacos_pers  $chacos_pers
     * @return \Illuminate\Http\Response
     */
    public function show(chacos_pers $chacos_pers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chacos_pers  $chacos_pers
     * @return \Illuminate\Http\Response
     */
    public function edit(chacos_pers $chacos_pers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatechacos_persRequest  $request
     * @param  \App\Models\chacos_pers  $chacos_pers
     * @return \Illuminate\Http\Response
     */
    public function update(Updatechacos_persRequest $request, chacos_pers $chacos_pers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chacos_pers  $chacos_pers
     * @return \Illuminate\Http\Response
     */
    public function destroy(chacos_pers $chacos_pers)
    {
        //
    }
}
