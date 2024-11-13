<?php

namespace App\Http\Controllers;

use App\Models\CourierOrder;
use App\Http\Requests\StoreCourierOrderRequest;
use App\Http\Requests\UpdateCourierOrderRequest;
use Illuminate\Support\Facades\Auth;

class CourierOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = CourierOrder::where('marchant_id',Auth::user()->id)->latest()->get();

        return view('marchantDashboard.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marchantDashboard.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourierOrderRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'division' => 'required',
            'thana' => 'required',
            'actual_amount' => 'required|integer',
            'amount' => 'required|integer',
            'note' => 'required',
            'weight' => 'required|integer',
        ]);
        // Auth::user()->id
        CourierOrder::create([
            'order_id' => $request->weight,
            'marchant_id' => '1',
            'customer_name' => $request->name,
            'customer_number' => $request->phone,
            'customer_alt_number' => $request->alt_phone,
            'customer_district' => $request->division,
            'customer_thana' => $request->thana,
            'customer_address' => $request->address,
            'actual_amount' => $request->actual_amount,
            'cod_amount' => $request->amount,
            'invoice' => $request->invoice,
            'note' => $request->note,
            'weight' => $request->weight,
            'created_at' => now(),
        ]);
        return redirect(route('frontend.about'));

    }

    /**
     * Display the specified resource.
     */
    public function show(CourierOrder $courierOrder,$id)
    {
        $order_details = CourierOrder::where('id',$id)->get();
        return view('marchantDashboard.orders.show',compact('order_details'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourierOrder $courierOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourierOrderRequest $request, CourierOrder $courierOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourierOrder $courierOrder)
    {
        //
    }
}
