@extends('layout')
@section('title')
    <style>
    </style>
    <title>Reg User</title>
@endsection
@section('content')
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Register User</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="fullname">Full Name</label>
                <div class="col-md-5">
                    <input id="fullname" name="fullname" type="text" placeholder="Full Name" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Email Id</label>
                <div class="col-md-5">
                    <input id="email" name="email" type="text" placeholder="Enter your Email Id" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Prepended text-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="contact_number">Contact Number</label>
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon">+91</span>
                        <input id="contact_number" name="contact_number" class="form-control" placeholder="Contact Number" type="text" required="">
                    </div>
                    <p class="help-block">+91 xxxxx xxxxx</p>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="blood_group">Blood Group</label>
                <div class="col-md-5">
                    <input id="blood_group" name="blood_group" type="text" placeholder="Blood Group" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="gender">Gender</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="gender-0">
                            <input type="radio" name="gender" id="gender-0" value="Male" checked="checked">
                            Male
                        </label>
                    </div>
                    <div class="radio">
                        <label for="gender-1">
                            <input type="radio" name="gender" id="gender-1" value="Female">
                            Female
                        </label>
                    </div>
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="password">Password</label>
                <div class="col-md-5">
                    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
                    <span class="help-block">Minimum 6 characters</span>
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="confirm_password">Confirm Password</label>
                <div class="col-md-5">
                    <input id="confirm_password" name="confirm_password" type="password" placeholder="Re-Type Your Password " class="form-control input-md" required="">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-4">
                    <button id="" name="" class="btn btn-info">Submit</button>
                </div>
            </div>

        </fieldset>
    </form>



    <script>
        var loadfile = function (event) {
            var output = document.getElementById("output");
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection
