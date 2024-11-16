@extends('layouts.marchantDashLays')
@section('title')
    Profile
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="col-4">

                    </div>
                    <div class="col-4">
                        <img style="height: 300px" class="rounded-circle shadow-4-strong" alt="avatar2" src="{{asset('marchantDash/images/profile')}}/{{Auth::user()->image}}" />
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

