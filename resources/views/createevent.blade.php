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
    <title>Reg User</title>
@endsection
@section('content')
    <pre>
        {{$data}}
    </pre>
    <!-- Page Header Section Start Here -->
    <section class="page-header">
        <div class="container">
            <div class="page-title">
                <ul class="breadcrumb lab-ul">
                    <li><a href="index.html">Home</a></li>
                    <li>Create Events</li>
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
                        <h5>Create Events</h5>
                    </div>
                    <form class="contact-form" action="eventcontroller" method="post" enctype="multipart/form-data"
                          onsubmit="uploadpic()">
                        <!-- Text input-->
                        {{ csrf_field() }}


                        <label class="control-label" for="eventname">Event Name</label>
                        <input id="eventname" name="eventname" type="text" placeholder="Event Name"
                               value="{{old('eventname')}}"
                               class="form-control"
                               required="">
                        @error('eventname')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror

                        <label class="control-label" for="organizer">Organizer</label>
                        <input id="organizer" name="organizer" type="text" placeholder="organizer"
                               value="{{old('organizer')}}"
                               class="form-control"
                               required="">
                        @error('organizer')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror

                        <label class="control-label" for="organizercontact">Contact Number</label>
                        <input id="organizercontact" name="organizercontact" type="text" placeholder="Contact"
                               value="{{old('organizercontact')}}"
                               class="form-control"
                               required="">
                        @error('organizercontact')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror

                        <label class="control-label" for="eventdate">Event Date</label>
                        <input id="eventdate" name="eventdate" type="date" placeholder="Event Date"
                               value="{{old('eventdate')}}"
                               class="form-control"
                               required="">
                        @error('eventdate')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror


                        <label class="control-label" for="eventdescription">Event Description</label>
                        <input id="eventdescription" name="eventdescription" type="text" placeholder="Event Description"
                               value="{{old('eventdescription')}}"
                               class="form-control"
                               required="">
                        @error('eventdescription')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror

                        <label class="control-label" for="eventaddress">Event Address</label>
                        <input id="eventaddress" name="eventaddress" type="text" placeholder="Event Address"
                               value="{{old('eventaddress')}}"
                               class="form-control"
                               required="">
                        @error('eventaddress')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror

                        <input type="submit" name="submit" value="Register" class="lab-btn">
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- Contact Section Ending Here -->
@endsection
