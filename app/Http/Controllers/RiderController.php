<?php

namespace App\Http\Controllers;

use App\Models\Rider;
use App\Http\Requests\StoreRiderRequest;
use App\Http\Requests\UpdateRiderRequest;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('riderDash.auth.index');
    }

    public function home()
    {
        return view('riderDash.home.index');
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
    public function store(StoreRiderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rider $rider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rider $rider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRiderRequest $request, Rider $rider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rider $rider)
    {
        //
    }
}