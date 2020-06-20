@extends("layout")

@section('title')
    <link rel="shortcut icon" type="image/x-icon" href="images/x-icon/01.png">
    <title>Product</title>
@endsection

@section('content')

    <!-- Shop Page Section start here -->
    <section class="shop-page padding-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12 sticky-widget">

                    <div class="shop-product-wrap grid row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/01.jpg"}} alt="shop">
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
                                    <h6>$200</h6>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/01.jpg"}} alt="shop">
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
                                        <img src={{"images/shop/02.jpg"}} alt="shop">
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
                                    <h6>$200</h6>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/02.jpg"}} alt="shop">
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
                                        <img src={{"images/shop/03.jpg"}} alt="shop">
                                    </div>
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a href="#"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">Product Title Here</a></h5>
                                    <p>
                                        <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                    </p>
                                    <h6>$200</h6>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/03.jpg"}} alt="shop">
                                    </div>
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a href="#"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">Product Title Here</a></h5>
                                    <p>
                                        <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                    </p>
                                    <h6>
                                        $200
                                    </h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/04.jpg"}} alt="shop">
                                    </div>
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a href="#"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">Product Title Here</a></h5>
                                    <p>
                                        <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                    </p>
                                    <h6>$200</h6>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/04.jpg"}} alt="shop">
                                    </div>
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a href="#"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">Product Title Here</a></h5>
                                    <p>
                                        <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                    </p>
                                    <h6>
                                        $200
                                    </h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/05.jpg"}} alt="shop">
                                    </div>
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a href="#"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">Product Title Here</a></h5>
                                    <p>
                                        <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                    </p>
                                    <h6>$200</h6>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/05.jpg"}} alt="shop">
                                    </div>
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a href="#"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">Product Title Here</a></h5>
                                    <p>
                                        <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                    </p>
                                    <h6>
                                        $200
                                    </h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/06.jpg"}} alt="shop">
                                    </div>
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a href="#"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">Product Title Here</a></h5>
                                    <p>
                                        <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                    </p>
                                    <h6>$200</h6>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/06.jpg"}} alt="shop">
                                    </div>
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a href="#"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">Product Title Here</a></h5>
                                    <p>
                                        <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                    </p>
                                    <h6>
                                        $200
                                    </h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal" id="quick_view">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal"><i class="icofont-close"></i></button>
                            <div class="modal-body">
                                <div class="product-details-inner">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5 col-12">
                                            <div class="thumb text-center">
                                                <div class="pro-thumb">
                                                    <img src={{"images/shop/09.jpg"}} alt="shop">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="product-content">
                                                <h5><a href="#">Product Title Here</a></h5>
                                                <p>
                                                    <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                                </p>
                                                <h6>$200</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                            <div class="cart-button">
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton">-</div>
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                                <a href="#" class="lab-btn"><span>Add to Cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Shop Page Section ending here -->



    <section class="service-section pt-0 home-2 padding-tb" style=" background: #f9fcff;">
        <div class="service-shape">
            <div class="shape shape-1">
                <img src={{"images/service/shape/01.png"}} alt="service-shape">
            </div>
            <div class="shape shape-2">
                <img src={{"images/service/shape/01.png"}} alt="service-shape">
            </div>
        </div>
        <div class="container">
            <div class="service-wrap">
                <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                    <h2>MSME PRODUCTS</h2>
                    <p>Help India by buying MSME Products ,it will help us increase our economy and also will lead to banishment of foreign produts.</p>
                </div>
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
                                        <h4>MSME Products</h4>
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
                                        <h4>MSME Products</h4>
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
                                        <h4>MSME PRODUCTS</h4>
                                        <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section Ending Here -->





    <!-- Shop Page Section start here -->
    <section class="shop-page padding-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12 sticky-widget">
                    <h2 align="center"><u>MSME PRODUCTS</u></h2>
                    <div class="shop-product-wrap grid row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/01.jpg"}} alt="shop">
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/01.jpg"}} alt="shop">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/02.jpg"}} alt="shop">
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/02.jpg"}} alt="shop">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/03.jpg"}} alt="shop">
                                    </div>
                                </div>

                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/03.jpg"}} alt="shop">
                                    </div>
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a href="#"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">Product Title Here</a></h5>
                                    <p>
                                        <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                    </p>
                                    <h6>
                                        $200
                                    </h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src={{"images/shop/04.jpg"}} alt="shop">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src={{"images/shop/05.jpg"}} alt="shop">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src={{"images/shop/05.jpg"}} alt="shop">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src={{"images/shop/05.jpg"}} alt="shop">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src={{"images/shop/05.jpg"}} alt="shop">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
    </section>
    <!-- Shop Page Section ending here -->

@stop
