<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function coverage()
    {
        return view('frontend.coverage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pricing()
    {
        return view('frontend.pricing');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function about()
    {
        return view('frontend.about');
    }

    /**
     * Display the specified resource.
     */
    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function returnpolicy()
    {
        return view('frontend.returnPolicy');
    }

    /**
     * Update the specified resource in storage.
     */
    public function tramsandcondition()
    {
        return view('frontend.trams&conditions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function tracking()
    {
        return view('frontend.parcelTracking');
    }

    public function login()
    {
        return view('frontend.auth.login');
    }



    public function register()
    {
        return view('frontend.auth.register');
    }

    public function register_store(Request $request)
    {

    }
}
