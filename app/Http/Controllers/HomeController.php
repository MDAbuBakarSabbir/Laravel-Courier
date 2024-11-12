<?php

namespace App\Http\Controllers;

use App\Models\CourierOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = CourierOrder::where('marchant_id',Auth::user()->id)->count();
        $pending_orders = CourierOrder::where('marchant_id',Auth::user()->id && 'status','pending')->count();
        $delivered_orders = CourierOrder::where('marchant_id',Auth::user()->id && 'status','pending')->count();
        return view('marchantDashboard.marchant-dash-home',compact('orders','pending_orders','delivered_orders'));
    }



}
