@extends('layout')
@section('title')
    <title>Contact Us</title>
@endsection
@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header">
        <div class="container">
            <div class="page-title">
                <h2>Contact info</h2>
                <ul class="breadcrumb lab-ul">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Contact Section Start Here -->
    <section class="contact-us padding-tb pb-0">
        <div class="container">
            <div class="contact-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-title">
                            <h5>Contact Informations</h5>
                        </div>
                        <ul class="contact-area lab-ul">
                            <li class="contact-item">
                                <div class="contact-icon">
                                    <img src="images/contact/icon/01.png" alt="contact">
                                </div>
                                <div class="content">
                                    <h6>Our Location</h6>
                                    <p>G. H. Raisoni College Of Engineering Nagpur, Maharashtra <br>Pin:440019</p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <div class="contact-icon">
                                    <img src="images/contact/icon/02.png" alt="contact">
                                </div>
                                <div class="content">
                                    <h6>Phone Number</h6>
                                    <p>01923-970212, 01776-502993 <br> +2154897369</p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <div class="contact-icon">
                                    <img src="images/contact/icon/03.png" alt="contact">
                                </div>
                                <div class="content">
                                    <h6>Email Address</h6>
                                    <p>suport@admincovid.com</p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <div class="contact-icon">
                                    <img src="images/contact/icon/04.png" alt="contact">
                                </div>
                                <div class="content">
                                    <h6>Website Address:</h6>
                                    <p>http://admincovid.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <div class="contact-title">
                            <h5>Send us a Massage</h5>
                        </div>
                        <form class="contact-form" action="http://demos.codexcoder.com/labartisan/html/covid-19/contact.php" method="POST">
                            <input type="text" name="name" placeholder="Your Name" class="contact-input">
                            <input type="email" name="email" placeholder="Your Email" class="contact-input">
                            <input type="text" name="text" placeholder="Your Address" class="contact-input">
                            <input type="text" name="text" placeholder="Your Company" class="contact-input">
                            <textarea rows="5" class="contact-input" placeholder="Your Messages"></textarea>
                            <input type="submit" name="submit" value="Send Message" class="lab-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section Ending Here -->


    <!-- G-Map Section Start Here -->
    <div class="gmaps-section">
        <div class="map-area">
            <iframe class="maps" src="https://coronavirus.app/map?embed=true" allow="accelerometer;" allowfullscreen style="border:0"></iframe>
        </div>
    </div>
    <!-- G-Map Section Ending Here -->

@endsection
