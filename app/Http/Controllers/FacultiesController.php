<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacultiesRequest;
use App\Http\Requests\UpdateFacultiesRequest;
use App\Models\Faculties;

class FacultiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Faculties::all();
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
     * @param  \App\Http\Requests\StoreFacultiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacultiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function show(Faculties $faculties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculties $faculties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacultiesRequest  $request
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacultiesRequest $request, Faculties $faculties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculties $faculties)
    {
        //
    }
}
