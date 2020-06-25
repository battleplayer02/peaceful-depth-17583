<?php
$i = 0;
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
                                            <h5><a href="#">Event Name: {{$value->ename}}</a></h5>
                                            <h6>Organizer:{{$value->owner_name}}</h6>
                                            <h6> Contact:{{$value->mobile}}</h6>
                                            <ul class="icon-style-list lab-ul">
                                                <li>Event Date:{{$value->edate}}</li>
                                                @if($value->assigned_work == null)
                                                    <li>Your Work:No Work Assigned</li>
                                                @else
                                                    <li>Your Work:{{$value->assigned_work}}</li>
                                                @endif
                                                @if($value->address == null)
                                                    <li> Work Address:No Work Assigned</li>
                                                @else
                                                    <li>Work Address:{{$value->address}}</li>
                                                @endif
                                            </ul>


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

