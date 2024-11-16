@extends('layouts.marchantDashLays')
@section('title')
    All Orders
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Order List</h3>
                    <div class="input-group w-25 p-3 mt-0 pt-0 mb-0 pb-0">
                        <input type="text" id="search" name="search" class="form-control" style="height: 40px;" placeholder="Search Order Here">
                        <button class="btn btn-primary" type="submit" style="height: 40px;">Search</button>
                    </div>
                    <div class="input-group w-25 p-3 mt-0 pt-0 mb-0 pb-0">
                        <form class="d-flex" action="" method="GET">
                            <select class="custom-select" id="inlineFormCustomSelectPref" style="height: 38px" name="status">
                              <option selected>All Orders</option>
                              <option value="pending" >Pending Order</option>
                              <option value="canceled">Canceled Order</option>
                              <option value="partital">Partial Order</option>
                              <option value="delivered">Delivered Order</option>
                            </select>
                            <button class="btn btn-primary" type="submit" style="height: 38px;">Sort</button>
                        </form>
                    </div>
                    <a class="btn btn-primary h-25" href="{{route('order.create')}}"><i class="fa-solid fa-plus"></i> Add</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Barcode</th>
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
                                <th scope="row">{!! DNS1D::getBarcodeHTML("$order->id", 'UPCA',2,50) !!}
                                    <p>CTC - {{$order->order_id}}</p>
                                </th>
                                <td>{{$order->customer_name}}</td>
                                <td>{{$order->customer_number}}</td>
                                <td><i class="fa-solid fa-bangladeshi-taka-sign"> {{$order->cod_amount}}</i></td>
                                <td>
                                    @if ($order->status == 'pending')
                                        <span class="btn btn-warning text-dark font-weight-bold">{{$order->status}}</span>
                                    @elseif ($order->status == 'canceled')
                                        <span class="btn btn-danger text-dark font-weight-bold">{{$order->status}}</span>
                                    @elseif ($order->status == 'delivered')
                                        <span class="btn btn-success text-dark font-weight-bold">{{$order->status}}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('order.show',$order->id)}}"><i class="fa fa-eye"></i></a>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-danger">Track</button>
                                </td>
                            </tr>
                            @empty
                                <span class="text-danger">Empty</span>
                            @endforelse
                        </tbody>
                        <tbody id="search_list">
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
     $('#search').on('keyup',function(){
         $value= $(this).val();
         $.ajax({
            url:'{{URL::to('search')}}',
            type:"GET",
            data:{'search':$value},
            success:function(data){
                consol.log(data);
                $('#search_list').html(data);
            }
     });
     //end of ajax call
    });
    });
</script>
@endsection
