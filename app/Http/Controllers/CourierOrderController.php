<?php

namespace App\Http\Controllers;

use App\Models\CourierOrder;
use App\Http\Requests\StoreCourierOrderRequest;
use App\Http\Requests\UpdateCourierOrderRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class CourierOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orders = CourierOrder::where('marchant_id',Auth::user()->id)->latest()->get();

        // $orders = CourierOrder::where('marchant_id',Auth::user()->id)
        // ->when($request->status != null, function($query) use ($request){
        //   return $query->where('status',$request->status);
        // })
        // ->latest()->get();

        return view('marchantDashboard.orders.index',compact('orders'));
    }

//     public function search(Request $request){
//         if($request->ajax()){

//             $data=CourierOrder::where('id','like','%'.$request->search.'%')
//             ->orwhere('customer_name','like','%'.$request->search.'%')
//             ->orwhere('customer_number','like','%'.$request->search.'%')->get();


//             $output='';
//         if(count($data)>0){

//              $output ='
//                 <table class="table">
//                 <thead>
//                 <tr>
//                     <th scope="col">#</th>
//                     <th scope="col">Title</th>
//                     <th scope="col">Description</th>
//                 </tr>
//                 </thead>
//                 <tbody>';

//                     foreach($data as $row){
//                         $output .='
//                         <tr>
//                         <th scope="row">'.$row->id.'</th>
//                         <td>'.$row->customer_name.'</td>
//                         <td>'.$row->customer_number.'</td>
//                         </tr>
//                         ';
//                     }



//              $output .= '
//                  </tbody>
//                 </table>';



//         }
//         else{

//             $output .='No results';

//         }
//         return $output;
//     }
// }
    // public function search(Request $request){
    //     $output = " ";
    //     $orders = CourierOrder::where('id','Like','%'.$request->search.'%')->get();
    //     foreach ($$orders as $order) {
    //         $output .=
    //         '<tr>
    //         <td>'.$order->name.'</td>
    //         </tr>';
    //     }
    //     return $output;
    // }
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
            'actual_amount' => 'required',
            'amount' => 'required',
            'note' => 'required',
            'weight' => 'required',
        ]);
        // Auth::user()->id
        if ($request->all()) {
            CourierOrder::create([
                'order_id' => rand(1,9999),
                'marchant_id' => Auth::user()->id,
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
            return redirect(route('order.index'));
        }else{
            return view('marchantDashboard.api.api');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(CourierOrder $courierOrder,$id)
    {
        $order_details = CourierOrder::where('id',$id)->first();
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


    public function bulk_order()
    {
        return view('marchantDashboard.orders.bulk');
    }
    public function order_track()
    {
        return view('marchantDashboard.order-track.track');
    }


    public function fraud_check()
    {
        return view('marchantDashboard.fraud-check.fraud');
    }
}
