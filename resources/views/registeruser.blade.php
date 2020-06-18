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
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="contact-title">
                            <h5>New User Registration</h5>
                        </div>
                        <form class="contact-form" action="http://demos.codexcoder.com/labartisan/html/covid-19/contact.php" method="POST">
                            <input type="text" name="name" placeholder="Your Name" class="contact-input">
                            <input type="text" name="name" placeholder="Your Name" class="contact-input">
                            <input type="text" name="name" placeholder="Your Name" class="contact-input">
                            <input type="text" name="name" placeholder="Your Name" class="contact-input">
                            <input type="text" name="name" placeholder="Your Name" class="contact-input">
                            <input type="text" name="name" placeholder="Your Name" class="contact-input">

                            <input type="submit" name="submit" value="Register" class="lab-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section Ending Here -->


@endsection
