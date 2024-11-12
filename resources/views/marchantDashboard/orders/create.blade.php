@extends('layouts.marchantDashLays')
@section('title')
    Create Order
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Default form</h4>
        <form class="forms-sample">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Customer Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Customer Name" name="name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Customer Alternative Phone</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Customer Alternative Phone" name="alt-phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Division</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Division" name="division">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Thana</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Thana" name="thana">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Area</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Area" name="area">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <textarea type="text" class="form-control" style="height: 50px;" placeholder="Address" name="address"></textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Customer Phone</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Customer Phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Weight</label>
                        <select class="form-control form-control-sm" data-select2-id="1" tabindex="-1" aria-hidden="true" name="weight">
                            <option value="0.5kg" data-select2-id="3"><=500 gram</option>
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
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
</div>
@endsection
