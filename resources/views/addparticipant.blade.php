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

    <!-- Page Header Section Start Here -->
    <section class="page-header">
        <div class="container">
            <div class="page-title">
                <ul class="breadcrumb lab-ul">
                    <li><a href="index.html">Home</a></li>
                    <li>Add Participant</li>
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
                    <form class="contact-form" action="addpp" method="post" enctype="multipart/form-data"
                          onsubmit="uploadpic()">
                        <!-- Text input-->
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$eid}}" name="eid">

                        <label class="control-label" for="participantname">Participant Name</label>
                        <input id="participantname" name="participantname" type="text" placeholder="Participant Name"
                               value="{{old('participantname')}}"
                               class="form-control"
                               required="">
                        @error('participantname')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror

                        <label class="control-label" for="participantcontact">Contact Number</label>
                        <input id="participantcontact" name="participantcontact" type="text" placeholder="Contact"
                               value="{{old('participantcontact')}}"
                               class="form-control"
                               required="">
                        @error('participantcontact')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror

                        <label class="control-label" for="assignedwork">Assigned Work</label>
                        <input id="assignedwork" name="assignedwork" type="text" placeholder="Assigned Work"
                               value="{{old('assignedwork')}}"
                               class="form-control"
                               required="">
                        @error('assignedwork')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror

                        <label class="control-label" for="participantaddress">Event Address</label>
                        <input id="participantaddress" name="participantaddress" type="text" placeholder="Event Address"
                               value="{{old('participantaddress')}}"
                               class="form-control"
                               required="">
                        @error('participantaddress')
                        <br><span class="form-control" style="color: red">{{ $message}}<br></span>
                        @enderror

                        <input type="submit" name="submit" value="Add" class="lab-btn">
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- Contact Section Ending Here -->
@endsection
