@extends('layouts.marchantDashLays')

@section('title')
    Fraud Check
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="common-form frauds">
                <div class="inner-page-search-box d-flex gap-4 mb-4">
                    <div class="input-group mb-3" style="margin: 15px 500px">
                        <input type="search" class="form-control form-control-lg" placeholder="Search by phone number">
                        <button class="btn btn-primary"><i class="fa-solid fa-magnifying-glass h-auto w-auto ml-5"></i>Search</button>
                    </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-column gap-4 mt-5">
                        <img src="{{asset('marchantDash/images/fraud/fraud.png')}}" alt="" style="height: 350px">
                        <p>Check fraud search by phone number</p>
                    </div>
                <div class="fraud-ratio d-flex justify-content-center align-items-center flex-column">
                </div>
            </div>
        </div>
    </div>
@endsection
