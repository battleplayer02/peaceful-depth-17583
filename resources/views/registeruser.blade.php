@extends('layout')
@section('title')
    <style>
    </style>
    <title>Reg User</title>
@endsection
@section('content')

    <!-- Contact Section Start Here -->
    <section class="contact-us padding-tb pb-0">
        <div class="container">
            <div class="contact-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-title">
                            <h5>Register User</h5>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <div class="contact-title">
                            <h5>New User Registration</h5>
                        </div>
                        <form class="contact-form" action="http://demos.codexcoder.com/labartisan/html/covid-19/contact.php" method="POST">
                            <input type="text" name="name" placeholder="Your Name" class="contact-input">
                            <input type="email" name="email" placeholder="Your Email" class="contact-input">
                            <input type="text" name="text" placeholder="Your Address" class="contact-input">
                            <input type="text" name="text" placeholder="Your Company" class="contact-input">
                            <textarea rows="5" class="contact-input" placeholder="Your Messages"></textarea>
                            <input type="submit" name="submit" value="Register" class="lab-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section Ending Here -->


@endsection
