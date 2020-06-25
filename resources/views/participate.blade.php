<?php
    $i=0;
?>
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
    <pre>
        {{$data}}
    </pre>
    <section class="shop-page padding-tb">
            <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                <h2>Participated Event</h2>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12 sticky-widget">
                        <div class="shop-product-wrap grid row justify-content-center">
                            @foreach($data as $value)
                                <?php
                                 $i++;
                                 ?>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="/images/shop/0{{$i%9}}.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Name</a></h5>
                                        <h6>Place</h6>
                                        <a href="#" class="btn btn-primary">See Assigned Work</a>
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
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>
    <br/><br/>
</div>
@stop

