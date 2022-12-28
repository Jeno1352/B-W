<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Settings</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}} ">
</head>
<body>
<div class="container">
    <h1 class="mb-5">Account Settings</h1>


    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="account-tab" data-toggle="pill" href="{{url('account')}}" role="tab"
           aria-controls="account" aria-selected="true">
            <i class="fa fa-home text-center mr-1"></i>
            Account
        </a>

        <a class="nav-link" id="password-tab" data-toggle="pill" href="{{url('password')}}" role="tab"
           aria-controls="password" aria-selected="false">
            <i class="fa fa-key text-center mr-1"></i>
            Password
        </a>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</div>

@yield('cont')
</body>
