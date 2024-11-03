@extends('layouts.frontend')

@section('title')
    Pricing
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="inner-page-content">
            <div class="section-heading d-none d-sm-inline-block">
                <h6>Price Calculator</h6>
            </div>

            <pricing />

        </div>
    </div>
</div>
@endsection
