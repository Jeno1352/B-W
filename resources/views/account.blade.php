@extends('layouts.acc')

@section('title')
Account Management
@endsection


@section('cont')
<body>

<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
        <h3 class="mb-4">Account Settings</h3>
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" value="First Name">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" value="Last Name">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" value="dummy@demo.com">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label>Phone number</label>
                    <input type="text" class="form-control" value="012 34567890">
                </div>
            </div>
            <div>
                <button class="btn btn-primary">Update</button>
                <button class="btn btn-light">Cancel</button>
            </div>
        </div>
    </div>
</div>
</body>

@endsection
