@extends('layouts.marchantDashLays')
@section('title')
    All Orders
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            <th scope="col">Track</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                            <tr>
                              <th scope="row">{{$order->id}}</th>
                              <td>{{$order->customer_name}}</td>
                              <td>{{$order->customer_number}}</td>
                              <td>{{$order->cod_amount}}</td>
                              <td>{{$order->status}}</td>
                              <td>
                                <a href="{{route('order.show',$order->id)}}"><i class="fa fa-eye"></i></a>
                              </td>
                              <td>track</td>
                            </tr>
                            @empty
                                <span class="text-danger">Empty</span>
                            @endforelse
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
