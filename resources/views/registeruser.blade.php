@extends('layout')
@section('title')
    <style>
        .centerImage {
            align-self: center;
            margin-bottom: 2%;
            margin-left: 45%;
        }

        #over img {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 1%;
            display: block;
        }
    </style>
    <title>Reg User</title>
@endsection
@section('content')

    <!-- Page Header Section Start Here -->
    <section class="page-header">
        <div class="container">
            <div class="page-title">
                <ul class="breadcrumb lab-ul">
                    <li><a href="index.html">Home</a></li>
                    <li>Register New User</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->



    <!-- Contact Section Start Here -->
    <div align="center">
        <section class="contact-us padding-tb pb-0 align-content-center">
            <div class="container align-content-center">
                <div class="contact-wrap col-lg-6 col-sm-4" align="center">
                    <div class="contact-title">
                        <h5>New User Registration</h5>
                    </div>
                    <form class="contact-form" action="reguser" method="post" enctype="multipart/form-data">
                        <!-- Text input-->
                        {{ csrf_field() }}
                        <div id="over" style="width:100%; height:100%">
                            <img class="img-responsive img-rounded centerImage" width="150" height="150" name="output"
                                 id="output">
                        </div>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="user_profile"
                                   onchange="loadfile(event)" required="">
                            <label class="custom-file-label" for="customFile">Upload Profile Photo</label>
                        </div>
                        <label class="control-label" for="fullname">Full Name</label>
                        @error('fullname')
                        <span style="color: red"> {{ $message}}</span>
                        @enderror
                        <input id="fullname" name="fullname" type="text" placeholder="Full Name" class="form-control" value="{{$_POST['fullname']}}"
                               required="">
                        <label class="control-label" for="email">Email Id</label>
                        <input id="email" name="email" type="text" placeholder="Enter your Email Id"
                               class="form-control" required="">
                        <label class="control-label" for="contact_number">Contact Number</label>
                        <input id="contact_number" name="contact_number" class="form-control"
                               placeholder="Contact Number" type="text" required="">
                        <label class="control-label" for="contact_number">Gender:</label>
                        <select name="gender" id="" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <br>
                        <label class="control-label" for="blood_group">Blood Group</label>
                        <input id="blood_group" name="blood_group" type="text" placeholder="Enter your Blood Group"
                               class="form-control" required="">
                        <label class="control-label" for="fullname">Password</label>
                        <input id="password" name="password" type="password" placeholder="Password" class="form-control"
                               required="">
                        <label class="control-label" for="Password">Confirm Password</label>
                        <input id="confirm_password" name="confirm_password" type="password"
                               placeholder="Re-type Password"
                               class="form-control"
                               required="">
                        <input type="submit" name="submit" value="Register" class="lab-btn">
                    </form>
                </div>
            </div>
            <script>
                var loadfile = function (event) {
                    var output = document.getElementById("output");
                    output.src = URL.createObjectURL(event.target.files[0]);
                };

            </script>
        </section>
    </div>
    <!-- Contact Section Ending Here -->
@endsection
