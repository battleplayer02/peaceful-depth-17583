@extends('layout')
@section('title')
    <title>Doctor Registeration</title
@endsection
@section('content')
    <h2 style="text-align: center">Doctor Registration</h2>
    <div align="center">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form class="pt-4 card col-lg-6 shadow" action="regdoctor" method="post">
            @csrf
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Full Name:</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div>
                        <input id="fullname" name="fullname" placeholder="Full Name" type="text" class="form-control" value="{{old('fullname')}}">
                    </div>
                    @error('fullname')
                    <span style="color: red; text-align: right" >{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Email:</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                        <input id="text1" name="email" value="{{old('email')}}" placeholder="Enter a valid email address." type="text" aria-describedby="text1HelpBlock" class="form-control">
                    </div>
                    <span id="text1HelpBlock" class="form-text text-muted">Your E-mail will be used for login.</span>
                    @error('email')
                    <span style="color: red; text-align: right" >{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="specialization" class="col-4 col-form-label">Specialization:</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-pencil-square"></i>
                            </div>
                        </div>
                        <input id="specialization" name="specialization" placeholder="Specialization" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Gender:</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Male" aria-describedby="genderHelpBlock">
                        <label for="gender_0" class="custom-control-label">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Female" aria-describedby="genderHelpBlock">
                        <label for="gender_1" class="custom-control-label">Female</label>
                    </div>
                    <span id="genderHelpBlock" class="form-text text-muted">Male/Female</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="experience" class="col-4 col-form-label">Experience:</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-area-chart"></i>
                            </div>
                        </div>
                        <input id="experience" value="{{old('experience')}}" name="experience" placeholder="Experience" type="text" class="form-control" aria-describedby="experienceHelpBlock">
                    </div>
                    <span id="experienceHelpBlock" class="form-text text-muted">4 Years</span>
                    @error('experience')
                    <span style="color: red; text-align: right" >{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="department" class="col-4 col-form-label">Department:</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                        <input id="department" value="{{old('department')}}" name="department" placeholder="Department" type="text" class="form-control" aria-describedby="departmentHelpBlock">
                    </div>
                    <span id="departmentHelpBlock" class="form-text text-muted">Neurology</span>
                    @error('department')
                    <span style="color: red; text-align: right" >{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="contact_number" class="col-4 col-form-label">Contact Number:</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-phone-square"></i>
                            </div>
                        </div>
                        <input id="contact_number" value="{{old('contact_number')}}" name="contact_number" placeholder="Enter your contact number" type="text" class="form-control" aria-describedby="contact_numberHelpBlock">
                    </div>
                    <span id="contact_numberHelpBlock" class="form-text text-muted">+91 xxxx xxxx xx</span>
                    @error('contact_number')
                    <span style="color: red; text-align: right" >{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="blood_group" class="col-4 col-form-label">Blood Group:</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-tint"></i>
                            </div>
                        </div>
                        <input id="blood_group" value="{{old('blood_group')}}" name="blood_group" placeholder="Enter your Blood Group" type="text" class="form-control">
                    </div>
                    @error('blood_group')
                    <span style="color: red; text-align: right" >{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="qualification" class="col-4 col-form-label">Qualification:</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                        </div>
                        <input id="qualification" value="{{old('qualification')}}" name="qualification" placeholder="Qualification" type="text" class="form-control" aria-describedby="qualificationHelpBlock">
                    </div>
                    <span id="qualificationHelpBlock" class="form-text text-muted">MBBS</span>
                    @error('qualification')
                    <span style="color: red; text-align: right" >{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="hosp_id" class="col-4 col-form-label">Hospital ID:</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">ID</div>
                        </div>
                        <input id="hosp_id" value="{{old('hosp_id')}}" name="hosp_id" placeholder="Enter Your Hospital ID" type="text" class="form-control" aria-describedby="hosp_idHelpBlock">
                    </div>
                    <span id="hosp_idHelpBlock" class="form-text text-muted">Hospital ID : 123xxx</span>
                    @error('hosp_id')
                    <span style="color: red; text-align: right" >{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-4 col-form-label">Password:</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <input id="password" name="password" placeholder="Password" type="password" class="form-control">
                    </div>
                    @error('password')
                    <span style="color: red; text-align: right" >{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="confirm_password" class="col-4 col-form-label">Confirm Password:</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <input id="confirm_password" value="{{old('confirm_password')}}" name="confirm_password" placeholder="Re-Type Password" type="text" required="required" class="form-control">
                    </div>
                    @error('confirm_password')
                    <span style="color: red; text-align: right" >{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="form-control btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
@endsection
{{--<div class="row">--}}
{{--    <form action="regdoctor" method="post" >--}}
{{--        {{ @csrf_field() }}--}}
{{--        <div class="input-field col s12  l6">--}}
{{--            <input type="text" name="fullname"><br>--}}
{{--            @error('fullname')--}}
{{--            <span style="color: red"> {{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="first_name">Full Name</label>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12 l6">--}}
{{--            <input type="text" name="email"><br>--}}
{{--            @error('email')--}}
{{--            <span style="color: red">{{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="last_name">Email ID</label>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12 l6">--}}
{{--            <input type="text" name="blood_group"><br>--}}
{{--            @error('blood_group')--}}
{{--            <span style="color: red">{{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="last_name">Blood Group</label>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12 l6">--}}
{{--            <input type="text" name="contact_number"><br>--}}
{{--            @error('contact_number')--}}
{{--            <span style="color: red">{{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="last_name">Contact Number</label>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12 ">--}}
{{--            <input type="text" name="gender"><br>--}}
{{--            @error('gender')--}}
{{--            <span style="color: red">{{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="last_name">Gender</label>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12 l6">--}}
{{--            <input type="password" name="password" ><br>--}}
{{--            @error('password')--}}
{{--            <span style="color: red">{{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="last_name">Password</label>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12 l6">--}}
{{--            <input type="password" name="confirm_password"><br>--}}
{{--            @error('confirm_password')--}}
{{--            <span style="color: red">{{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="last_name">Confirm Password</label>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12 l6">--}}
{{--            <input type="text" name="department"><br>--}}
{{--            @error('department')--}}
{{--            <span style="color: red">{{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="last_name">Department</label>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12 l6">--}}
{{--            <input type="text" name="experience"><br>--}}
{{--            @error('experience')--}}
{{--            <span style="color: red">{{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="last_name">Experience</label>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12 l6">--}}
{{--            <input type="text" name="specialization" ><br>--}}
{{--            @error('specialization')--}}
{{--            <span style="color: red">{{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="last_name">Specialization</label>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12 l6">--}}
{{--            <input type="text" name="hosp_id"><br>--}}
{{--            @error('hosp_id')--}}
{{--            <span style="color: red">{{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="last_name">Hospital ID</label>--}}
{{--        </div>--}}
{{--        <div class="input-field col s12 ">--}}
{{--            <input type="text" name="qualification"><br>--}}
{{--            @error('qualification')--}}
{{--            <span style="color: red">{{ $message}}</span>--}}
{{--            @enderror--}}
{{--            <label for="last_name">Qualification</label>--}}
{{--        </div>--}}
{{--        <button type="submit"  class="waves-effect waves-light btn">Submit</a>--}}
{{--    </form>--}}
{{--</div>--}}
