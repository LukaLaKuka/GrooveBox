<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMixRequest;
use App\Http\Requests\UpdateMixRequest;
use app\Models\Mix\Mix;

class MixController extends Controller
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
     * @param  \App\Http\Requests\StoreMixRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMixRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \app\Models\Mix\Mix  $mix
     * @return \Illuminate\Http\Response
     */
    public function show(Mix $mix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \app\Models\Mix\Mix  $mix
     * @return \Illuminate\Http\Response
     */
    public function edit(Mix $mix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMixRequest  $request
     * @param  \app\Models\Mix\Mix  $mix
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMixRequest $request, Mix $mix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \app\Models\Mix\Mix  $mix
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mix $mix)
    {
        //
    }
}
