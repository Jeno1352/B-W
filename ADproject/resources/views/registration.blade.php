<!DOCTYPE html>
<html lang="en">

<head>

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}} ">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style1.css')}}">

    <title>Registration</title>
</head>

<body>
    <div class="registration">
        <form>
            <div class="form-group">
                <label class="form-label" for="Name"> </label>
                Name<input class="form-control" type="Name" placeholder="Name" id="Name">
            </div>
            <div class="form-group">
                <label class="form-label" for="Age"> </label>
                Date of Birth<input class="form-control" type="date" placeholder="Date of Birth" id="Age">
            </div>
            <div class="form-group">
                <label class="form-label" for="Weight"> </label>
                Weight<input class="form-control" type="number" placeholder="Weight" id="Weight">
            </div>
            <div class="form-group">
                <label class="form-label" for="height"> </label>
                Height<input class="form-control" type="number" placeholder="Height" id="height">
            </div>
            <div class="form-group">
                <label class="form-label" for="phone"> </label>
                Phone Number<input class="form-control" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Phone Number"
                    id="tel">
            </div>
            <div class="form-group">
                <label class="form-label" for="email"> </label>
                Email<input class="form-control" type="email" placeholder="Email" id="email">
            </div>
            <div><a class="btn btn-success w-100 mt-1" href="{{url('registration 2')}}" type="submit">Next</a></div>
    </div>

    </form>

</body>

</html>
