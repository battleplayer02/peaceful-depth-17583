<?php
    $i=0;
?>
@extends("layout")

@section('title')
    <link rel="shortcut icon" type="image/x-icon" href="images/x-icon/01.png">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css"/>

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <title>My Work</title>
@endsection

@section('content')


    <div class="container">
        <br/><br/>

        <section class="shop-page padding-tb">
            <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                <div class="widget shop-widget">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col">
                                <h2>Events Created</h2>
                            </div>
                            <div class="col justify-content-end">
                                <a href="createevent"><img src={{"images/plus.png"}} alt="create"
                                                           style="height: 30px; width: 40px;" class="ml-3"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @foreach($data as $value)
                    <?php
                        $i++;
                    ?>
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-12 sticky-widget">
                            <div class="shop-product-wrap grid row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <div class="pro-thumb">
                                                <img src="/images/shop/0{{$i%9}}.jpg" alt="shop">
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5><a href="#">{{$value->ename}}</a></h5>
                                            <h6>Place:{{$value->eaddress}}</h6>
                                            <form action="geteid">
                                                <input type="hidden" value="{{$value->eid}}" name="eid">
                                                <button class="btn btn-primary">Show Participant</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <div class="pro-thumb">
                                                <img src="assets/images/shop/01.jpg" alt="shop">
                                            </div>
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
                    </div>
                @endforeach
            </div>
        </section>
        <br/><br/>
    </div>
    <script type="text/javascript" src="js/book.js">

    </script>
@stop

