<?php

namespace App\Http\Controllers;

use App\Models\prdacte;
use Illuminate\Http\Request;

class PrdacteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
return view('prodactes');    }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prdacte  $prdacte
     * @return \Illuminate\Http\Response
     */
    public function show(prdacte $prdacte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prdacte  $prdacte
     * @return \Illuminate\Http\Response
     */
    public function edit(prdacte $prdacte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prdacte  $prdacte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prdacte $prdacte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prdacte  $prdacte
     * @return \Illuminate\Http\Response
     */
    public function destroy(prdacte $prdacte)
    {
        //
    }
}
