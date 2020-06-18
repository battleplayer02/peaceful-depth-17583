@extends('layout')
@section('title')
    <style>
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
                    <form class="contact-form" action="reguser"
                          method="POST">
                        <!-- Text input-->
                        <label class="control-label" for="fullname">Full Name</label>
                        <input id="fullname" name="fullname" type="text" placeholder="Full Name" class="form-control"
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
        </section>
    </div>
    <!-- Contact Section Ending Here -->


@endsection
