@extends('layouts.adminlays')
@section('title')
    Order Process
@endsection

@section('content')

    <div class="card">
        <form action="{{route('order.search')}}" method="get">
            {{-- @csrf --}}
            <div class="card-body" style="margin-left: 125px">
                <div class="row">
                    <div class="col">
                        <div class="form-group row" style="margin-left: 3px; margin-right: 124px;">
                            <label>Order Ids</label>
                            <textarea class="form-control" rows="4" style="height: 98px;" placeholder="EX: CFC-124561564" name="search">{{isset($search) ? $search : '' }} </textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-username">Marchant</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Marchant Name" name="search" value="{{isset($search) ? $search : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-email">POD Number</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="POD Number" name="search">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-password">Customer Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-password" name="val-password" placeholder="Customer Name" name="search">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-password">Customer Mobile</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-password" placeholder="Ex:01614694444" name="number" value="{{isset($number) ? $number : '' }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-content-center my-5">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>

@if (isset($result))
    <div class="row">
        <div class="col-0.1">
            <div class="card">
                <div class="card-body">
                    <div class="col-1">
                        <h5>1</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <div class="card-header">
                    <h6>Order Details</h6>
                </div>
                <div class="card-body">
                    <h3>{{$result}}</h3>
                </div>
            </div>
        </div>
    </div>
@endif



@endsection
