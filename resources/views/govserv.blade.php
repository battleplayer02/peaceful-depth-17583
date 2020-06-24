@extends("layout")

@section('title')
    <link rel="shortcut icon" type="image/x-icon" href="images/x-icon/01.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>GoverMent Services</title>
@endsection

@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header">
        <div class="container">
            <div class="page-title">
                <h2>Goverment Services</h2>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    </br>
    </br>
    <div class="container">
        <div class="row">
            <div class="card col-lg-4 col-md-6 col-sm-12  ">
                    <div class="card-body">
                    <img src="{{"images/card1.PNG"}}" alt="Image">
                    </div>
            </div>
            <div class="card col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card-body">
                    <img src="{{"images/card2.PNG"}}" alt="Image">
                    </div>
            </div>
            <div class="card col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card-body">
                    <img src="{{"images/card3.png"}}" alt="Image">
                    </div>
            </div>
            <div class="card col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card-body">
                    <img src="{{"images/card4.png"}}" alt="Image">
                    </div>
            </div>
            <div class="card col-lg-4 col-md-6 col-sm-12">
                    <div class="card-body">
                    <img src="{{"images/card5.png"}}" alt="Image">
                    </div>
            </div>
            <div class="card col-lg-4 col-md-6 col-sm-12">
                    <div class="card-body">
                    <img src="{{"images/card6.png"}}" alt="Image">
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="bg-warning card col-lg-2 col-md-5 col-sm-12 m-4" style="height: 150px;" >
                    <p class="m-auto">Apply For movement pass</p>
                    <button class="btn btn-warning" style="width:100%"><a href="">Click for Details</a></button>

            </div>
            <div class="bg-danger card col-lg-2 col-md-5 col-sm-12 m-4" style="height: 150px;">
                    <p class="m-auto">
                        State/UTs Helpline No.
                    </p>
                    <button class="btn btn-danger" style="width:100%"><a href="">Click for Details</a></button>
            </div>
            <div class="bg-info card col-lg-2 col-md-5 col-sm-12 m-4" style="height: 150px;">
                    <p class="m-auto">
                        Live Helpdesk
                    </p>
                    <button class="btn btn-info" style="width:100%"><a href="">Click for Details</a></button>
            </div>
            <div class="bg-primary card col-lg-2 col-md-5 col-sm-12 m-4" style="height: 150px;">
                    <p class="m-auto">
                        State/District wise details
                    </p>
                    <button class="btn btn-primary" style="width:100%"><a href="/outbreak">Click for Details</a></button>
            </div>
        </div>
        <div class="row">
            <br/><br/>
            <button type="button" onclick="myFunction('Demo1')" class="btn btn-primary" data-toggle="collapse" data-target="#demo" style="width:100%;">Helpline Numbers</button>
            <div id="demo" class="collapse">
            <ol>
                <li>Andaman and Nicobar : 03192-232102, 03192-234287</li>
                <li>Andhra Pradesh : 0866-2410978</li>
                <li>Arunachal Pradesh : 104</li>
                <li>Assam : 104</li>
                <li>Bihar : 0612-2217681, 0612-2233806, 104</li>
                <li>Chandigarh : 0172-2752038, 0172-2752031, 0172-2704048</li>
                <li>Chhattisgarh : 0771-282113, 0771-2446607, 0771-2440608</li>
                <li>Dadra and Nagar Haveli : 104, 1077, 0260-2642106, 0260-2630304</li>
                <li>Daman and Diu : 104, 1077, 0260-2642106, 0260-2630304</li>
                <li>Delhi : 011-22307145</li>
                <li>Goa : 104</li>
                <li>Gujarat : 079-23251900, 079-23251908, 104</li>
                <li>Haryana : 0172-2545938</li>
                <li>Himachal Pradesh : 077-2628940, 077-2629439, 104</li>
                <li>Jammu and Kashmir : 0191-2549676, 0191-2520982, 0194-2440283, 0194-2452052, 0194-2457313</li>
                <li>Jharkhand : 0651-2282201, 0651-2284185, 0651-223488, 181, 104</li>
                <li>Karnataka : 080-46848600, 1075, 104</li>
                <li>Kerala : 0471-2552056, 0471-25521056</li>
                <li>Ladakh : 01982-256462, 01982-257416, 01982-258960</li>
                <li>Lakshadweep : 104/ 04896-263742</li>
                <li>Maharashtra : 022-22024535</li>
                <li>Manipur : 1800-345-3818</li>
                <li>Meghalaya : 108, 0364-2224100, 0364-2590623</li>
                <li>Mizoram : 102</li>
                <li>Madhya Pradesh : 104, 1075, 181,0755-2411180,0755-2704201, 0729-22344</li>
                <li>Nagaland : 0370-2291122, 0370-2270338</li>
                <li>Odisha : 104, 0674-2534177</li>
                <li>Puducherry : 104, 1070, 1077, 0413-2253407</li>
                <li>Punjab : 104</li>
                <li>Rajasthan : 0141-2225000, 0141-2225624</li>
                <li>Sikkim : 104, 03592-284444</li>
                <li>Tamil Nadu : 0471-2552056, 0471-25521056</li>
                <li>Telengana : 104, 040-23286100</li>
                <li>Tripura : 0381-2315879, 0381-2412424, 0381-2413434</li>
                <li>Uttar Pradesh : 0522-2237515</li>
                <li>Uttarakhand : 104</li>
                <li>West Bengal : 1800-313-444222, 033-23412600</li>
            </ol>
            </div>
        </div>
        <br/><br/>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h2 class="justify-content-center">Steps Taken By Goverment</h2>
                <div class="section-wrapper">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="service-item text-center">
                                        <div class="service-inner">
                                            <div class="service-thumb">
                                                <img src={{"images/modiji.jpg"}} alt="service">
                                            </div>
                                            <div class="service-content">
                                                <h4>MSME PRODUCTS</h4>
                                                <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="service-item text-center">
                                        <div class="service-inner">
                                            <div class="service-thumb">
                                                <img src={{"images/modiji.jpg"}} alt="service">
                                            </div>
                                            <div class="service-content">
                                                <h4>Step of Lockdown</h4>
                                                <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="service-item text-center">
                                        <div class="service-inner">
                                            <div class="service-thumb">
                                                <img src="images/modiji.jpg" alt="service">
                                            </div>
                                            <div class="service-content">
                                                <h4>PM Mann Ki Baat</h4>
                                                <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="service-item text-center">
                                        <div class="service-inner">
                                            <div class="service-thumb">
                                                <img src="images/modiji.jpg" alt="service">
                                            </div>
                                            <div class="service-content">
                                                <h4>Funds By Goverment</h4>
                                                <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
        </div>
        <div class="row">
        <div class="card bg-success col-lg-2 col-md-6 col-sm-12 m-4" style="width:400px">
                <div class="card-body">
                    <h4 class="card-title">Whatsapp</h4>
                    <p class="card-text">Contact for any details</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
        </div>
        <div class="card bg-danger col-lg-2 col-md-6 col-sm-12 m-4" style="width:400px">
                <div class="card-body">
                    <h4 class="card-title">Youtube</h4>
                    <p class="card-text">Contact for any details</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
        </div>
        <div class="card bg-info col-lg-2 col-md-6 col-sm-12 m-4" style="width:400px">
                <div class="card-body">
                    <h4 class="card-title">Messenger</h4>
                    <p class="card-text">Contact for any details</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
        </div>
        <div class="card bg-primary col-lg-2 col-md-6 col-sm-12 m-4" style="width:400px">
                <div class="card-body">
                    <h4 class="card-title">Facebook</h4>
                    <p class="card-text">Contact for any details</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
        </div>
        </div>
    </div>


@stop
