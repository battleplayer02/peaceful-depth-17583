<?php
$i = 0;
?>
@extends("layout")

@section('title')
@endsection

@section('content')
    <div style="background: #00000000">
        <div class="wow text-center pt-3 fadeInUp" data-wow-delay="0.3s">
            <h2>My Appointment</h2>
        </div>
        <section class="blog-section padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        @foreach($data as $value)
                            <?php
                            $i++;
                            ?>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="post-item">
                                    <div class="post-item-inner">
                                        <div class="post-thumb">
                                            <a href="#"><img src="/images/blog/0{{$i%9}}.jpg" alt="lab-blog"></a>
                                        </div>
                                        <div class="post-content">
                                            <h5><a href="#">
                                                    Doctor Name:{{$value->doc_details[0]->name}}
                                                </a></h5>
                                            <div class="author-date">
                                                <a href="#" class="date"><i
                                                        class="icofont-calendar"></i>{{$value->apt_date}}</a>
                                                <a href="#" class="admin"><i
                                                        class="icofont-ui-user"></i>{{$value->timing}}
                                                </a>
                                            </div>
                                            <p>Symptoms: {{$value->symptoms}}</p>
                                            <div class="post-footer">
                                                <a href="#" class="text-btn">Mob
                                                    No. {{$value->doc_details[0]->mobile_no}}<i
                                                        class="icofont-double-right"></i></a>
                                                <a href="#" class="comments"><b class="card-title text-btn">Chat</b> <i
                                                        class="icofont-comment"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop
