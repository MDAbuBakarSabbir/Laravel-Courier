@extends('layouts.marchantDashLays')
@section('title')
    Profile
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img src="{{asset('marchantDash/images/profile')}}/{{Auth::user()->image}}" alt="">
                    <input type="file">
                </div>
            </div>
        </div>
    </div>
@endsection

