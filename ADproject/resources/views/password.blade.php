@extends('layouts.acc')

@section('title')
    Account Management
@endsection


@section('cont')
    <body>
    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
        <h3 class="mb-4">Password Settings</h3>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>Old password</label>
                    <input type="password" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>New password</label>
                    <input type="password" class="form-control">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label>Confirm new password</label>
                    <input type="password" class="form-control">
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary">Update</button>
            <button class="btn btn-light">Cancel</button>
        </div>


    </div>

    </body>

@endsection
