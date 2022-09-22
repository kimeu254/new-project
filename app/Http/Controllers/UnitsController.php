<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Response;
use App\Models\Units;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Units::all();
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
     * @param  \App\Http\Requests\StoreUnitsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unit = Units::create($request->all());
        return Response::json($unit);   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function show(Units $units)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUnitsRequest  $request
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unit = Units::find($id);
        $unit->update($request->all());
        return $unit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Units::destroy($id);
    }
}
