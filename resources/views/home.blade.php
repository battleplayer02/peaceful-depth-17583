@extends("layout")

@section('title')
    <style>
        #coronaTestOnline, #coronaUpdateMap {
            height: 600px;
            width: 100%;
            display: block
        }
    </style>
    <title>Home</title>
@endsection

@section('content')


    <!-- Banner Section start here -->
    <section class="banner-section home-7">
        <div class="banner-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 col-12">
                        <div class="content-part">
                            <div class="banner-content">
                                <h2><span>Raise Your Hand </span></h2>
                                <h2 class="banner-title">COVID19-ncov</h2>
                                <h4>Healthcare Professionals And Researchers</h4>
                                <a href="#" class="lab-btn style-2"><span>donate now <i
                                            class="icofont-heart"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="banner-round">
                            <img src={{"images/banner/home-7/01.png"}} alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section ending here -->
    <div class="corona-wrap">
        <div class="corona-count-top">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-3 col-md-6 col-12">
                    <h5>Total Corona Statistics :</h5>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="corona-item">
                        <div class="corona-inner">
                            <div class="corona-thumb">
                                <img src="images/corona/01.png" alt="corona">
                            </div>
                            <div class="corona-content">
                                <h3 class="count-number">{{end($data)["Confirmed"]}}</h3>
                                <p>Active Cases</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="corona-item">
                        <div class="corona-inner">
                            <div class="corona-thumb">
                                <img src="images/corona/02.png" alt="corona">
                            </div>
                            <div class="corona-content">
                                <h3 class="count-number">{{end($data)["Recovered"]}}</h3>
                                <p>Recovered Cases</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="corona-item">
                        <div class="corona-inner">
                            <div class="corona-thumb">
                                <img src="images/corona/03.png" alt="corona">
                            </div>
                            <div class="corona-content">
                                <h3 class="count-number">{{end($data)["Deaths"]}}</h3>
                                <p>Deaths</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- relife fund section start here -->
    <section class="relife-fund bg-f9">
        <div class="container">
            <div class="relife-wrap">
                <div class="rel-shape shape-1">
                    <img src={{"css/bg-image/shape-images/01.png"}} alt="bg-shape">
                </div>
                <div class="rel-shape shape-2">
                    <img src={{"css/bg-image/shape-images/02.png"}} alt="bg-shape">
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="relife-title wow fadeInUp" data-wow-delay="0.4s">
                            <h4>Corona Virus</h4>
                            <h2>Relief Fund</h2>
                            <p>Completely pursue parallel value with synergistic paradigms. extensible content whereas
                                visionary expertise.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="donate-option wow fadeInUp" data-wow-delay="0.4s">
                            <div class="donate-amount">
                                <span class="pay-price">₹ 10.00</span>
                                <span class="pay-price">₹ 20.00</span>
                                <span class="pay-price">₹ 30.00</span>
                                <span class="pay-price">₹ 50.00</span>
                                <span class="pay-price active">₹100.00</span>
                            </div>
                            <div class="donate-pay">
                                <div class="person-price">
                                    <label for="">₹</label>
                                    <input type="text" placeholder="100.00">
                                </div>
                                <div class="donate-send">
                                    <input type="submit" value="Donate Now" class="lab-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- relife fund section ending here -->


    <!-- Service Section Start Here -->
    <section class="service-section home-4 home-7 bg-f9 padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item text-center">
                            <div class="service-inner">
                                <div class="shape-image">
                                    <img src={{"images/project/shape.png"}} alt="project-shape">
                                </div>
                                <div class="service-thumb">
                                    <img src={{"images/service/home-7/01.jpg"}} alt="service">
                                </div>
                                <div class="service-content">
                                    <h5>Give Donation</h5>
                                    <p>Our comprehensive Online Marketing strategy will boost your website trafic hence
                                        monthly sales.</p>
                                    <a href="#" class="text-btn">donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center">
                            <div class="service-inner">
                                <div class="shape-image">
                                    <img src={{"images/project/shape.png"}} alt="project-shape">
                                </div>
                                <div class="service-thumb">
                                    <img src={{"images/service/home-7/02.jpg"}} alt="service">
                                </div>
                                <div class="service-content">
                                    <h5>Request Travel Pass</h5>
                                    <p>Easily get your travelling pass through our website.</p>
                                    <a href="" class="text-btn">contact now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item text-center">
                            <div class="service-inner">
                                <div class="shape-image">
                                    <img src={{"images/project/shape.png"}} alt="project-shape">
                                </div>
                                <div class="service-thumb">
                                    <img src={{"images/service/home-7/03.jpg"}} alt="service">
                                </div>
                                <div class="service-content">
                                    <h5>Become A Volunteer</h5>
                                    <p>Our comprehensive Online Marketing strategy will boost your website trafic hence
                                        monthly sales.</p>
                                    <a href="#" class="text-btn">apply now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section Ending Here -->

    <!-- corona count section start here -->
    <section class="corona-count-section bg_img home-7 padding-tb"
             style="background-image: url(css/bg-image/bg-5.jpg);">
        <div class="container">
            <div class="corona-count-bottom">
                <div class="row justify-content-center align-items-center flex-row-reverse">
                    <div class="col-lg-6 col-12">
                        <div class="ccb-thumb-content">
                            <div class="ccb-title text-left wow fadeInUp" data-wow-delay="0.2s">
                                <h4><span>FUN FACTS ABOUT</span></h4>
                                <h2>Update About Coronavirus</h2>
                            </div>
                            <ul class="lab-ul">
                                <li class="media mb-2 p-4 bg-white align-items-center wow fadeInUp"
                                    data-wow-delay="0.3s">
                                    <div class="shape-image">
                                        <img src="images/project/shape.png" alt="project-shape">
                                    </div>
                                    <img src="images/corona/01.png" class="mr-3" alt="corona">
                                    <div class="media-body text-left">
                                        <h4><span>there are</span></h4>
                                        <h2 class="mb-0 count-number">{{end($data)["Confirmed"]}}</h2>
                                        <p class="mb-0">Coronavirus Cases in India</p>
                                    </div>
                                </li>
                                <li class="media mb-2 p-4 bg-white align-items-center wow fadeInUp"
                                    data-wow-delay="0.4s">
                                    <div class="shape-image">
                                        <img src="images/project/shape.png" alt="project-shape">
                                    </div>
                                    <img src="images/corona/02.png" class="mr-3" alt="corona">
                                    <div class="media-body text-left">
                                        <h4><span>there are</span></h4>
                                        <h2 class="mb-0 count-number">{{end($data)["Recovered"]}}</h2>
                                        <p class="mb-0">Recovered Cases in India</p>
                                    </div>
                                </li>
                                <li class="media mb-2 p-4 bg-white align-items-center wow fadeInUp"
                                    data-wow-delay="0.5s">
                                    <div class="shape-image">
                                        <img src="images/project/shape.png" alt="project-shape">
                                    </div>
                                    <img src="images/corona/03.png" class="mr-3" alt="corona">
                                    <div class="media-body text-left">
                                        <h4><span>there are</span></h4>
                                        <h2 class="mb-0 count-number">{{end($data)["Deaths"]}}</h2>
                                        <p class="mb-0">Total Deaths in India</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="ccb-content wow fadeInLeft" data-wow-delay="0.4s">
                            <h4><span>WE ARE IN A MISSION</span></h4>
                            <h2>An Outbreak of the 2019 Novel Coronavirus Caused</h2>
                            <p><em><b>Chikitsa COVID-19 Web App and Android Application Developed By Himanshu, Gaurav
                                        and Vaishnavi for NATIONAL BIOINFORMATICS ONLINE HACKATHON FOR FULL
                                        STACKERS.</b></em></p>
                            <p>Coronaviruses are type of virus. There are many different kinds, & some cause disease
                                newly identified type has caused recent outbreak of respiratory ilness now called
                                COVID-19 that started in China.</p>
                            <p>COVID-19 is the disease caused by the new coronavirus that emerged in China in December
                                2019.</p>
                            <p>COVID-19 symptoms include cough fever and shortness breath. COVID-19 can be severe, and
                                some cases have caused death.</p>
                            <p>The new coronavirus can be spread from person to person. It is diagnosed with a
                                laboratory test.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- corona count section ending here -->

    <div align="center">
        <div class="" data-groups="[&quot;World&quot;]">
            <div class="position-relative rounded hover-wrapper">
                <div class='tableauPlaceholder' id='viz1585339255136' style='position: relative'>
                    <noscript><a href='#'><img
                                alt=' '
                                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;T7&#47;T797P95WD&#47;1_rss.png'
                                style='border: none'/></a></noscript>
                    <object class='tableauViz' style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F'/>
                        <param name='embed_code_version' value='3'/>
                        <param name='path' value='shared&#47;T797P95WD'/>
                        <param name='toolbar' value='yes'/>
                        <param name='static_image'
                               value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;T7&#47;T797P95WD&#47;1.png'/>
                        <param name='animate_transition' value='yes'/>
                        <param name='display_static_image' value='yes'/>
                        <param name='display_spinner' value='yes'/>
                        <param name='display_overlay' value='yes'/>
                        <param name='display_count' value='yes'/>
                    </object>
                </div>
                <script
                    type='text/javascript'>                    var divElement = document.getElementById('viz1585339255136');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    if (divElement.offsetWidth > 800) {
                        vizElement.style.width = '100%';
                        vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
                    } else if (divElement.offsetWidth > 500) {
                        vizElement.style.width = '100%';
                        vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
                    } else {
                        vizElement.style.width = '100%';
                        vizElement.style.height = '927px';
                    }
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
            </div>
        </div>
    </div>
    </div>



@stop


{{--AIzaSyApzSN6SD_HFmbK9b7VN3kHbuNz9kjrIj8--}}
