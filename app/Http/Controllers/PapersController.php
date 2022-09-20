<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePapersRequest;
use App\Http\Requests\UpdatePapersRequest;
use App\Models\Papers;

class PapersController extends Controller
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
     * @param  \App\Http\Requests\StorePapersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePapersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function show(Papers $papers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function edit(Papers $papers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePapersRequest  $request
     * @param  \App\Models\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePapersRequest $request, Papers $papers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Papers $papers)
    {
        //
    }
}
