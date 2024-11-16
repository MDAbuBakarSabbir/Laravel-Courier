<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarchantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('marchantDashboard.settings.profile.profile');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    public function password(Request $request)
    {
        return view('marchantDashboard.settings.password.password');
    }


    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function payhistory()
    {
        return view('marchantDashboard.payments.payhistory');
    }
    public function complain()
    {
return view('marchantDashboard.complain.complain');
    }
    public function complain_store(Request $request)
    {

    }


    public function feedback()
    {
        return view('marchantDashboard.feedback.feedback');
    }

    public function feedback_store(Request $request)
    {
        //
    }


    public function api()
    {
        return view('marchantDashboard.api.api');
    }


    public function pricing()
    {
        return view('marchantDashboard.pricing.pricing');
    }



}
