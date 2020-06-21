<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link
        href="../../../../fonts.googleapis.com/css8a16.css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/x-icon/01.png">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icofont.min.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
    @yield('title')
</head>
<body>


{{--mobole-menu--}}
<div class="mobile-menu">
    <nav class="mobile-header">
        <div class="header-logo">
            <a href="home"><img src={{"images/logo/04.png"}} alt="logo"></a>
        </div>
        <div class="header-bar">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <nav class="mobile-menu">
        <div class="mobile-menu-area">
            <div class="mobile-menu-area-inner">
                <ul class="lab-ul">
                    <li class="active"><a href="home">Home</a></li>
                    <li><a href="">Treatment</a>
                        <ul class="lab-ul">
                            <li><a href="">Doctors</a></li>
                            <li><a href="">Hospitals</a></li>
                        </ul>
                    </li>
                    <li><a href="">Services</a>
                        <ul class="lab-ul">
                            <li><a href="">Volunteers</a>
                                <ul class="lab-ul">
                                    <li><a href="">My Work</a></li>
                                    <li><a href="">Events Created</a></li>
                                </ul>
                            </li>
                            <li><a href="">Training</a></li>
                            <li><a href="govser">Goverment Services</a></li>
                        </ul>
                    </li>
                    <li><a href="">Corona</a>
                        <ul class="lab-ul">
                            <li><a href="service">Prevention</a></li>
                            <li><a href="outbreak">Outbreak</a></li>
                        </ul>
                    </li>
                    <li><a href="contactus">Contact Us</a></li>
                    @if(session('logininfo'))
                        <li><a href="">{{session('logininfo')[0]->name}}</a>
                            <ul class="lab-ul"><li><a href="profile">Profile</a></li></ul>
                            <ul class="lab-ul"><li><a href="logout">Logout</a></li></ul>
                        </li>
                    @else
                        <li><a href="">Sign In/ Sign Up</a>
                            <ul class="lab-ul">
                                <li><a>User</a>
                                    <ul class="lab-ul">
                                        <li><a href="login">Sign In</a></li>
                                        <li><a href="registeruser">Sign Up</a></li>
                                    </ul>
                                </li>
                                <li><a>Doctor</a>
                                    <ul class="lab-ul">
                                        <li><a href="login">Sign In</a></li>
                                        <li><a href="registerdoctor">Sign Up</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</div>
{{--mobile-menu-end--}}

{{--header--}}
<header class="header-section home-7">
    <div class="header-area">
        <div class="container">
            <div class="primary-menu">
                <div class="logo">
                    <a href="index.html"><img src={{"images/logo/01.png"}} alt="logo"></a>
                </div>
                <div class="main-area">
                    <div class="main-menu">
                        <ul class="lab-ul">
                            <li class="active"><a href="home">Home</a></li>
                            <li><a href="">Treatment</a>
                                <ul class="lab-ul">
                                    <li><a href="doctors">Doctors</a></li>
                                    <li><a href="hospitals">Hospitals</a></li>
                                </ul>
                            </li>
                            <li><a href="">Services</a>
                                <ul class="lab-ul">
                                    <li><a href="">Volunteers</a>
                                        <ul class="lab-ul">
                                            <li><a href="">My Work</a></li>
                                            <li><a href="">Events Created</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Training</a></li>
                                    <li><a href="govser">Goverment Services</a></li>
                                </ul>
                            </li>
                            <li><a href="">Corona</a>
                                <ul class="lab-ul">
                                    <li><a href="service">Prevention</a></li>
                                    <li><a href="outbreak">Outbreak</a></li>
                                </ul>
                            </li>
                            <li><a href="contactus">Contact Us</a></li>
                            @if(session('logininfo'))
                                <li><a href="">{{session('logininfo')[0]->name}}</a>
                                    <ul class="lab-ul"><li><a href="profile">Profile</a></li></ul>
                                    <ul class="lab-ul"><li><a href="logout">Logout</a></li></ul>
                                </li>
                            @else
                                <li><a href="">Sign In/ Sign Up</a>
                                    <ul class="lab-ul">
                                        <li><a>User</a>
                                            <ul class="lab-ul">
                                                <li><a href="login">Sign In</a></li>
                                                <li><a href="registeruser">Sign Up</a></li>
                                            </ul>
                                        </li>
                                        <li><a>Doctor</a>
                                            <ul class="lab-ul">
                                                <li><a href="login">Sign In</a></li>
                                                <li><a href="registerdoctor">Sign Up</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="header-btn">
                        <a href="#" class="lab-btn"><span>Donate<i class="icofont-heart"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{--header-end--}}





@yield('content')



{{--footer-start--}}
<footer style="background-image: url({{'css/bg-image/bg-5.jpg'}});">
    <div class="footer-top padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item first-set">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>About Covid-19</h6>
                                </div>
                                <div class="content">
                                    <p>We believe in Simple Creative and Flexible Design Standards.</p>
                                    <h6>Headquarters:</h6>
                                    <p>795 Folsom Ave, Suite 600 San Francisco, CA 94107</p>
                                    <ul class="lab-ul">
                                        <li>
                                            <p><span>Phone:</span>(91) 8547 632521</p>
                                        </li>
                                        <li>
                                            <p><span>Email:</span><a href="#">info@covid-19.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>Navigate</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#"><i class="icofont-caret-right"></i>Advertisers</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Developers</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Resources</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Company</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Connect</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>Social Contact</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#"><i class="icofont-facebook"></i>Facebook</a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i>Twitter</a></li>
                                        <li><a href="#"><i class="icofont-instagram"></i>Instagram</a></li>
                                        <li><a href="#"><i class="icofont-youtube"></i>YouTube</a></li>
                                        <li><a href="#"><i class="icofont-xing"></i>Xing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>Privacy And Tos</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#"><i class="icofont-caret-right"></i>Advertiser Agreement</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Acceptable Use Policy</a>
                                        </li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Privacy Policy</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Technology Privacy</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Developer Agreement</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom" style="border-color: #ffffff40">
        <div class="container">
            <div class="section-wrapper" align="center">
                <span style="color: white"> Chikitsa &copy Made By Himanshu Vaishnavi and Gaurav</span>
            </div>
        </div>
    </div>
</footer>

<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span
        class="pluse_2"></span></a>
<!-- scrollToTop ending here -->


<script src="js/jquery.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lightcase.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/functions.js"></script>

{{--footer-end--}}
</body>
</html>
