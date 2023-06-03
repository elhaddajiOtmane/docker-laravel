<?php

namespace App\Http\Controllers;

use App\Models\Constomer;
use App\Http\Requests\StoreConstomerRequest;
use App\Http\Requests\UpdateConstomerRequest;

class ConstomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('constomer\index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConstomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Constomer $constomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Constomer $constomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConstomerRequest $request, Constomer $constomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Constomer $constomer)
    {
        //
    }
}
