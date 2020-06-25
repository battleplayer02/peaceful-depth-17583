@extends('layout')
@section('title')
    <style>
        .centerImage {
            align-self: center;
            margin-bottom: 2%;
            margin-left: 45%;
        }

        #over img {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 1%;
            display: block;
        }
    </style>
    <title>Assign Work</title>
@endsection
@section('content')

    <!-- Page Header Section Start Here -->
    <section class="page-header">
        <div class="container">
            <div class="page-title">
                <ul class="breadcrumb lab-ul">
                    <li><a href="index.html">Home</a></li>
                    <li>Assign work</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->



    <!-- Contact Section Start Here -->
    <div align="center">
        <section class="contact-us align-content-center">
            <div class="container align-content-center">
                <div class="contact-wrap col-lg-6 col-sm-4" align="center">
                    <div class="contact-title">
                        <h5>Add Participant</h5>
                    </div>
                    <form class="contact-form" action="addwork" method="post" enctype="multipart/form-data"
                          onsubmit="uploadpic()">
                        <!-- Text input-->
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$pid}}" name="pid">
                        <input type="hidden" value="{{$eid}}" name="eid">

                        <label class="control-label" for="participantwork">Participant Work</label>
                        <input id="participantwork" name="participantwork" type="text" placeholder="Participant Work"
                               value="{{old('participantwork')}}"
                               class="form-control"
                               required="">
                        @error('participantwork')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror

                        <label class="control-label" for="workaddress">Work Address</label>
                        <input id="workaddress" name="workaddress" type="text" placeholder="Work Address"
                               value="{{old('workaddress')}}"
                               class="form-control"
                               required="">
                        @error('workaddress')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror

                        <input type="submit" name="submit" value="Add Work" class="lab-btn">
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- Contact Section Ending Here -->
@endsection
