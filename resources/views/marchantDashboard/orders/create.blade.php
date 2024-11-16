@extends('layouts.marchantDashLays')
@section('title')
    Create Order
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Default form</h4>
        <form class="forms-sample" action="{{route('order.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Customer Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputUsername1" placeholder="Customer Name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Customer Phone</label>
                      <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="exampleInputEmail1" placeholder="Customer Phone" name="phone">
                  </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Customer Alternative Phone</label>
                      <input type="tel" class="form-control @error('alt_phone') is-invalid @enderror" id="exampleInputEmail1" placeholder="Customer Alternative Phone" name="alt_phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <textarea type="text" class="form-control @error('address') is-invalid @enderror" style="height: 50px;" placeholder="Address" name="address"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Division</label>
                      <select class="form-select" aria-label="Default select example" name="division">
                        <option selected>Select Division</option>
                        <option value="1">One</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">District</label>
                      <select class="form-select" aria-label="Default select example" name="district">
                        <option selected>Select District</option>
                        <option value="1">One</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Thana</label>
                      <select class="form-select" aria-label="Default select example" name="thana">
                        <option selected>Select Thana</option>
                        <option value="1">One</option>
                      </select>
                    </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Actual Amount</label>
                    <input type="number" class="form-control @error('actual_amount') is-invalid @enderror" id="exampleInputPassword1" placeholder="COD Amount" name="actual_amount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Cash on Delivery Amount</label>
                    <input type="number" class="form-control @error('amount') is-invalid @enderror" id="exampleInputPassword1" placeholder="COD Amount" name="amount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Invoice</label>
                    <input type="text" class="form-control @error('invoice') is-invalid @enderror" id="exampleInputPassword1" placeholder="Invoice (if any)" name="invoice">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Note</label>
                    <input type="text" class="form-control @error('note') is-invalid @enderror" id="exampleInputPassword1" placeholder="Note" name="note">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Weight</label>
                        <select class="form-control form-control-sm" data-select2-id="1" tabindex="-1" aria-hidden="true" name="weight">
                            <option value="500g" data-select2-id="3"><=500 gram</option>
                            <option value="1kg">Weight: 500 - 1 Kg</option>
                            <option value="2kg">Weight: 1-2 kg</option>
                            <option value="3kg">Weight: 2-3 kg</option>
                            <option value="3kg">Weight: 3-4 kg</option>
                            <option value="5kg">Weight: 4-5 kg</option>
                            <option value="6kg">Weight: 5-6 kg</option>
                            <option value="7kg">Weight: 6-7 kg</option>
                            <option value="8kg">Weight: 7-8 kg</option>
                            <option value="9kg">Weight: 8-9 kg</option>
                            <option value="10kg">Weight: 9-10 kg</option>
                            <option value="15kg">Weight: 10-15 kg</option>
                            <option value="20kg">Weight: 15-20 kg</option>
                            <option value="30kg">Weight: 20-30 kg</option>

                        </select>
                    </div>
                </div>
            </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <a href="{{route('order.index')}}" class="btn btn-light">Cancel</a>
        </form>
      </div>
</div>
@endsection
