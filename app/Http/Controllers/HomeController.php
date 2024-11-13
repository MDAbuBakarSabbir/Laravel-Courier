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
        $totalamount = CourierOrder::where('marchant_id',Auth::user()->id)->sum('cod_amount');
        $orders = CourierOrder::where('marchant_id',Auth::user()->id)->count();
        $pending_amount = CourierOrder::where('marchant_id',Auth::user()->id)->where('status','pending')->sum('cod_amount');
        $pending_orders = CourierOrder::where('marchant_id',Auth::user()->id)->where('status','pending')->count();
        $delivered_amount = CourierOrder::where('marchant_id',Auth::user()->id)->where('status','delivered')->sum('cod_amount');
        $delivered_orders = CourierOrder::where('marchant_id',Auth::user()->id)->where('status','delivered')->count();
        $canceled_amount = CourierOrder::where('marchant_id',Auth::user()->id)->where('status','canceled')->sum('cod_amount');
        $canceled_order = CourierOrder::where('marchant_id',Auth::user()->id)->where('status','canceled')->count();
        return view('marchantDashboard.marchant-dash-home',compact('orders','pending_amount','pending_orders','delivered_amount','delivered_orders','totalamount','canceled_order','canceled_amount'));
    }



}
