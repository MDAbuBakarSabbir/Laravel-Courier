@extends('layouts.marchantDashLays')

@section('title')
    Password Settings
@endsection
@section('content')
    <div class="card" style="height: 100%">
        <div class="card-body d-flex">
            <div class="col-4">

            </div>
            <div class="col-4">
                <div class="card" style="height: 100%">
                    <div class="card-header">
                        <h3>Password Settings</h3>
                    </div>
                    <div class="card-body">
                        <div class="company font-weight-bold" style="text-align: center">
                            <h2 class="mb-3">{{Auth::user()->business_name}} </h2>
                            <p class="mb-3">Business ID: {{Auth::user()->id}} </p>
                            <p class="mb-3">Business ID: {{Auth::user()->address}} </p>
                        </div>
                        <form action="" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Current Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">New Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Confirm New Password</label>
                                </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
@endsection
