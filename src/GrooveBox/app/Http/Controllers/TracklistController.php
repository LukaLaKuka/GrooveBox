<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTracklistRequest;
use App\Http\Requests\UpdateTracklistRequest;
use app\Models\Tracklist\Tracklist;

class TracklistController extends Controller
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
     * @param  \App\Http\Requests\StoreTracklistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTracklistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \app\Models\Tracklist\Tracklist  $tracklist
     * @return \Illuminate\Http\Response
     */
    public function show(Tracklist $tracklist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \app\Models\Tracklist\Tracklist  $tracklist
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracklist $tracklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTracklistRequest  $request
     * @param  \app\Models\Tracklist\Tracklist  $tracklist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTracklistRequest $request, Tracklist $tracklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \app\Models\Tracklist\Tracklist  $tracklist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracklist $tracklist)
    {
        //
    }
}
