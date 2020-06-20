@extends("layout")
@section("title")
    <title>List Of Doctors</title>
@endsection
@section('content')
    <!-- Team Member Section Start here -->
    <div class="team-section bg-team padding-tb">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                <h2>Meet Our Best Doctors</h2>
                <p> Dynamically formulate fully tested catalysts for change via focused methods of empowerment
                    Assertively extend alternative synergy and extensive web services.</p>
            </div>
            <div class="team-area">
                <div class="row justify-content-center align-items-center">
                    @foreach($data as $value)
                        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-item-inner">
                                    <div class="team-thumb">
                                        <img src="images/team/01.jpg" alt="team-membar">
                                    </div>
                                    <div class="team-content">
                                        <h5 class="member-name">{{$data['name']}}</h5>
                                        <span class="member-dagi">{{$data["specialization"]}}</span>
                                        <p class="member-details"></p>
                                        <ul class="icon-style-list lab-ul">
                                            <li><i class="icofont-phone"></i><span>{{$data['mobile_no']}}</span></li>
                                            <li><i class="icofont-envelope"></i><span>{{$data["email"]}}</span></li>
                                            <li><i class="icofont-envelope"></i>
                                                <form action="bookappointment" method="post">
                                                    <button class="btn btn-info">Book Appointment</button>
                                                    @csrf
                                                    <input type="hidden" value="{{}}">
                                                </form>
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
