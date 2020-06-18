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
                    <form class="contact-form" action=""
                          method="POST">
                        <!-- Text input-->
                        <label class="control-label" for="fullname">Full Name</label>
                        <input id="fullname" name="fullname" type="text" placeholder="Full Name" class="form-control" required="">
                        <label class="control-label" for="email">Email Id</label>
                        <input id="email" name="email" type="text" placeholder="Enter your Email Id" class="form-control" required="">
                        <label class="control-label" for="contact_number">Contact Number</label>
                        <input id="contact_number" name="contact_number" class="form-control" placeholder="Contact Number" type="text" required="">
                        <p class="help-block">+91 xxxxx xxxxx</p>
                        <input type="submit" name="submit" value="Register" class="lab-btn">
                </form>
            </div>
    </div>
    </section>
    </div>
    <!-- Contact Section Ending Here -->


@endsection
