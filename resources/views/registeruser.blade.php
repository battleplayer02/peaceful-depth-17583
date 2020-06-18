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
                <form class="contact-form" action="http://demos.codexcoder.com/labartisan/html/covid-19/contact.php"
                      method="POST">
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="fullname">Full Name</label>
                        <div>
                            <input id="fullname" name="fullname" type="text" placeholder="Full Name" class="form-control input-md" required="">
                        </div>
                    </div>
                    <input type="text" name="name" placeholder="Your Name" class="form-control">
                    <input type="text" name="name" placeholder="Your Name" class="form-control">
                    <input type="text" name="name" placeholder="Your Name" class="form-control">
                    <input type="text" name="name" placeholder="Your Name" class="form-control">
                    <input type="text" name="name" placeholder="Your Name" class="form-control">
                    <input type="text" name="name" placeholder="Your Name" class="form-control">
                    <input type="submit" name="submit" value="Register" class="lab-btn">
                </form>
            </div>
        </div>
    </section>
    </div>
    <!-- Contact Section Ending Here -->


@endsection
