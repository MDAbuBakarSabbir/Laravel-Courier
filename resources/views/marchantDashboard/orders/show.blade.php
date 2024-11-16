@extends('layouts.marchantDashLays')
@section('title')
    Create Order
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Default form</h4>
        <form class="forms-sample" action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Customer Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputUsername1" value="{{$order_details->customer_name}}" name="name" disabled>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Customer Phone</label>
                      <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="exampleInputEmail1" value="{{$order_details->customer_number}}" name="phone" disabled>
                  </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Customer Alternative Phone</label>
                      <input type="tel" class="form-control @error('alt_phone') is-invalid @enderror" id="exampleInputEmail1" value="{{$order_details->customer_alt_number}}" name="alt_phone" disabled>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <textarea type="text" class="form-control @error('address') is-invalid @enderror" style="height: 50px;" name="address" disabled>{{$order_details->customer_address}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Division</label>
                      <input type="text" class="form-control @error('division') is-invalid @enderror" id="exampleInputPassword1" value="{{$order_details->customer_district}}" name="division" disabled>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Thana</label>
                      <input type="text" class="form-control @error('thana') is-invalid @enderror" id="exampleInputPassword1" value="{{$order_details->customer_thana}}" name="thana" disabled>
                    </div>
                    {{-- <div class="form-group">
                      <label for="exampleInputPassword1">Area</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" value="Area" name="area">
                    </div> --}}

                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Actual Amount</label>
                    <input type="number" class="form-control @error('actual_amount') is-invalid @enderror" id="exampleInputPassword1" value="{{$order_details->actual_amount}}" name="actual_amount" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Cash on Delivery Amount</label>
                    <input type="number" class="form-control @error('amount') is-invalid @enderror" id="exampleInputPassword1" value="{{$order_details->cod_amount}}" name="amount" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Invoice</label>
                    <input type="text" class="form-control @error('invoice') is-invalid @enderror" id="exampleInputPassword1" value="{{$order_details->invoice}}" name="invoice" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Note</label>
                    <input type="text" class="form-control @error('note') is-invalid @enderror" id="exampleInputPassword1" value="{{$order_details->note}}" name="note" disabled>
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Weight</label>
                        <select class="form-control form-control-sm" data-select2-id="1" tabindex="-1" aria-hidden="true" name="weight" disabled>
                            <option value="500g" @if ($order_details->weight == '500g') selected  @endif><=500 gram</option>
                            <option value="1kg" @if ($order_details->weight == '1kg') selected  @endif >Weight: 500 - 1 Kg</option>
                            <option value="2kg" @if ($order_details->weight == '2kg') selected  @endif >Weight: 1-2 kg</option>
                            <option value="3kg" @if ($order_details->weight == '3kg') selected  @endif >Weight: 2-3 kg</option>
                            <option value="3kg" @if ($order_details->weight == '4kg') selected  @endif >Weight: 3-4 kg</option>
                            <option value="5kg" @if ($order_details->weight == '5kg') selected  @endif >Weight: 4-5 kg</option>
                            <option value="6kg" @if ($order_details->weight == '6kg') selected  @endif >Weight: 5-6 kg</option>
                            <option value="7kg" @if ($order_details->weight == '7kg') selected  @endif >Weight: 6-7 kg</option>
                            <option value="8kg" @if ($order_details->weight == '8kg') selected  @endif >Weight: 7-8 kg</option>
                            <option value="9kg" @if ($order_details->weight == '9kg') selected  @endif >Weight: 8-9 kg</option>
                            <option value="10kg" @if ($order_details->weight == '10kg') selected  @endif >Weight: 9-10 kg</option>
                            <option value="15kg" @if ($order_details->weight == '15kg') selected  @endif >Weight: 10-15 kg</option>
                            <option value="20kg" @if ($order_details->weight == '20kg') selected  @endif >Weight: 15-20 kg</option>
                            <option value="30kg" @if ($order_details->weight == '30kg') selected  @endif >Weight: 20-30 kg</option>

                        </select>
                    </div>
                    <div class="extras d-flex justify-content-between">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">hdff</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">kasf</label>
                      </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="{{route('order.index')}}" class="btn btn-light">Cancel</a>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
            </div>
        </form>
      </div>
</div>
@endsection
