@extends('layouts.marchantDashLays')

@section('dtl')
<h3 class="welcome-sub-text">Your performance summary</h3>
@endsection
@section('title')
    Dashboard
@endsection
@section('content')
<div class="card">
    <div class="card-header" style="border-top-left-radius: 20px;border-top-right-radius: 20px">
        Order Reports
    </div>
    <div class="card-body">
        <div class="row my-2">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header d-flex" style="border-top-left-radius: 20px;border-top-right-radius: 20px">
                        <div class="card-icon text-primary"><i class="fa-solid fa-box"></i></i></div>
                        <h4>Total Parcel</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="{{route('order.index')}}" class="text-decoration-none text-dark">{{$orders}}</a>
                            <h4>{{$totalamount}} BDT</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header d-flex" style="border-top-left-radius: 20px;border-top-right-radius: 20px">
                        <div class="card-icon text-warning"><i class="fa-solid fa-clock"></i></div>
                        <h4 class="">Pending Parcel</h4>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="" class="text-decoration-none text-dark">{{$pending_orders}}</a>
                            <h4>{{$pending_amount}} BDT</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header d-flex" style="border-top-left-radius: 20px;border-top-right-radius: 20px">
                        <div class="card-icon text-success"><i class="fa-solid fa-circle-check"></i></div>
                        <h4>Delivered Parcel</h4>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="" class="text-decoration-none text-dark">{{$delivered_orders}}</a>
                            <h4>{{$delivered_amount}} BDT</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header d-flex" style="border-top-left-radius: 20px;border-top-right-radius: 20px">
                        <div class="card-icon text-success"><i class="fa-solid fa-clipboard-check"></i></div>
                        <h4>Paritally Delivered Parcel</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="" class="text-decoration-none text-dark">0</a>
                            <h4>0 BDT</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header d-flex" style="border-top-left-radius: 20px;border-top-right-radius: 20px">
                        <div class="card-icon text-danger"><i class="fa-solid fa-circle-xmark"></i></div>
                        <h4>Canceled Parcel</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-decoration-none text-dark">{{$canceled_order}}</a>
                            <h4>{{$canceled_amount}} BDT</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header d-flex" style="border-top-left-radius: 20px;border-top-right-radius: 20px">
                        <div class="card-icon text-success"><i class="fa-solid fa-clipboard-check"></i></div>
                        <h4>Approval Status</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4>0</h4>
                            <h4>0 BDT</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card my-3">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-2">
                <a href="{{route('order.create')}}" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body addparcel" style="text-align: center;">
                            <i class="fa-solid fa-plus"></i>
                            <h3>Add Parcel</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="{{route('order.index')}}" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body" style="text-align: center; text-decoration:none">
                            <i class="fa-solid fa-plus"></i>
                            <h3>All Parcel</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .h3{
        text-decoration: none;
    }
</style>
