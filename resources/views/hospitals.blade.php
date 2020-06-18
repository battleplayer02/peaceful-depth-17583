<?php
$data = array(
    "1"=>1,
    "2"=>2
);

?>
@extends("layout")
@section("title")
    <title>List Of Hospitals</title>
@endsection
@section('content')
    <h1 style="text-align: center">List Of Hospitals</h1>
    <!-- Team Member Section Start here -->
    <div class="team-section bg-team padding-tb">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                <h2>Meet Our Best Hospitals</h2>
                <p> Dynamically formulate fully tested catalysts for change via focused methods of empowerment
                    Assertively extend alternative synergy and extensive web services.</p>
            </div>
            <div class="team-area">
                <div class="row justify-content-center align-items-center">
                    @foreach($data as $key => $value)
                        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-item-inner">
                                    <div class="team-thumb">
                                        <img src="images/team/01.jpg" alt="team-membar">
                                    </div>
                                    <div class="team-content">
                                        <h5 class="member-name">Dorothy M. Nickell</h5>
                                        <span class="member-dagi">Throat Specialist</span>
                                        <p class="member-details"></p>
                                        <ul class="icon-style-list lab-ul">
                                            <li><i class="icofont-phone"></i><span>+880 1234 567 890</span></li>
                                            <li><i class="icofont-envelope"></i><span>d.m.nickell@gmail.com</span></li>
                                            <li><i class="icofont-envelope align-content-center"></i>
                                                <button class="btn btn-info">Book Appointment</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Team Member Section Ending here -->

@stop
