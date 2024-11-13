@extends('layouts.marchantDashLays')
@section('title')
    Order Details
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Name</label>
                                    <input type="text" class="form-control" value="{{$order_details->customer_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Number</label>
                                    <input type="text" class="form-control" value="{{$order_details->customer_number}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Alternative Number</label>
                                    <input type="text" class="form-control" value="{{$order_details->customer_alt_number}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" value="{{$order_details->customer_address}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">District</label>
                                    <input type="text" class="form-control" value="{{$order_details->customer_district}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thana</label>
                                    <input type="text" class="form-control" value="{{$order_details->customer_thana}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Actual Amount</label>
                                    <input type="text" class="form-control" value="{{$order_details->actual_amount}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">COD Amount</label>
                                    <input type="text" class="form-control" value="{{$order_details->cod_amount}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Invoice</label>
                                    <input type="text" class="form-control" value="{{$order_details->invoice}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Note</label>
                                    <input type="text" class="form-control" value="{{$order_details->note}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Weight</label>
                                    <input type="text" class="form-control" value="{{$order_details->weight}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <input type="text" class="form-control" value="{{$order_details->status}}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
