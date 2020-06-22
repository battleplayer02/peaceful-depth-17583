@extends("layout")

@section('title')  
<link rel="shortcut icon" type="image/x-icon" href="images/x-icon/01.png">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <title>My Work</title>
@endsection

@section('content')

<div class="container">
    <br/><br/>
    <section class="shop-page padding-tb">
            <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                <h2>My Work</h2>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12 sticky-widget">
                        <div class="shop-product-wrap grid row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="{{"images/shop/01.jpg"}}" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Event Name</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>Place</h6>
                                        <a href="#" class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/01.jpg" alt="shop">
                                        </div>
                                        <div class="product-action-link">
                                            <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                            <a href="#"><i class="icofont-heart"></i></a>
                                            <a href="#"><i class="icofont-cart-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>
                                            $200
                                        </h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="{{"images/shop/01.jpg"}}" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Event Name</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>Place</h6>
                                        <a href="#" class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/01.jpg" alt="shop">
                                        </div>
                                        <div class="product-action-link">
                                            <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                            <a href="#"><i class="icofont-heart"></i></a>
                                            <a href="#"><i class="icofont-cart-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>
                                            $200
                                        </h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="{{"images/shop/01.jpg"}}" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Event Name</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>Place</h6>
                                        <a href="#" class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/01.jpg" alt="shop">
                                        </div>
                                        <div class="product-action-link">
                                            <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                            <a href="#"><i class="icofont-heart"></i></a>
                                            <a href="#"><i class="icofont-cart-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>
                                            $200
                                        </h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="{{"images/shop/01.jpg"}}" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Event Name</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>Place</h6>
                                        <a href="#" class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/01.jpg" alt="shop">
                                        </div>
                                        <div class="product-action-link">
                                            <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                            <a href="#"><i class="icofont-heart"></i></a>
                                            <a href="#"><i class="icofont-cart-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>
                                            $200
                                        </h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="{{"images/shop/01.jpg"}}" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Event Name</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>Place</h6>
                                        <a href="#" class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/01.jpg" alt="shop">
                                        </div>
                                        <div class="product-action-link">
                                            <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                            <a href="#"><i class="icofont-heart"></i></a>
                                            <a href="#"><i class="icofont-cart-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>
                                            $200
                                        </h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="{{"images/shop/01.jpg"}}" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Event Name</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>Place</h6>
                                        <a href="#" class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/01.jpg" alt="shop">
                                        </div>
                                        <div class="product-action-link">
                                            <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                            <a href="#"><i class="icofont-heart"></i></a>
                                            <a href="#"><i class="icofont-cart-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        <h6>
                                            $200
                                        </h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="paginations">
                            <ul class="d-flex flex-wrap lab-ul justify-content-center">
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a href="#">2</a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a href="#" class="active">3</a>
                                </li>
                                <li>
                                    <a class="dot">...</a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a href="#">9</a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a href="#">10</a>
                                </li>
                                <li>
                                    <a href="#">11</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-7 col-12">
                        <aside>
                            <div class="widget shop-widget">
                                <div class="widget-header">
                                    <h5>All Categories</h5>
                                </div>
                                <div class="widget-wrapper">
                                    <ul class="shop-menu lab-ul">
                                        <li>
                                            <a href="#">Participants</a>
                                            <ul class="shop-submenu lab-ul">
                                                <li><a href="#">Event One</a>
                                                    <ul class="shop-submenu lab-ul">
                                                        <li><a href="#">Participant 1</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 2</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 3</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 4</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 5</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Event Two</a>
                                                    <ul class="shop-submenu lab-ul">
                                                    <li><a href="#">Participant 1</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 2</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 3</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 4</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 5</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Event Three</a>
                                                    <ul class="shop-submenu lab-ul">
                                                    <li><a href="#">Participant 1</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 2</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 3</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 4</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 5</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Event Four</a>
                                                    <ul class="shop-submenu lab-ul">
                                                    <li><a href="#">Participant 1</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 2</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 3</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 4</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 5</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Event Five</a>
                                                    <ul class="shop-submenu lab-ul">
                                                    <li><a href="#">Participant 1</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 2</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 3</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 4</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                        <li><a href="#">Participant 5</a>
                                                        <a href="#" class="btn btn-primary">Show Work</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    <br/><br/>               
</div>
<script type="text/javascript" src="js/book.js">
            
</script>
@stop
    
