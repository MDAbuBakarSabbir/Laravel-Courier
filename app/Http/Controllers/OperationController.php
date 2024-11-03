<?php

namespace App\Http\Controllers;

use App\Models\CourierOrder;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function order_process(){
        return view('adminDashboard.operation.orderProcess');
    }

    public function order_search(Request $request){
        $search = $request->search;
        $number = $request->number;

        $result = CourierOrder::where(function($query) use ($search){
            $query->where('order_id','like',"%$search%")
            ->orWhere('customer_number','like',"%$search%");
        })->get();

        return view('adminDashboard.operation.orderProcess',compact('result','search','number'));

        $result = CourierOrder::where(function($query) use ($number){
            $query->where('customer_number','like',"%$number%");
        })->get();

        return view('adminDashboard.operation.orderProcess',compact('result','number','search'));

    }
}
