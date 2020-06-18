@extends('layout')
@section('title')
    <style>
        .centerImage
        {
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
        nav .nav-wrapper {
            padding-left: 10px;
        }

        .container {
            margin: 0px;
            border: 1px solid #B22222;
            max-width: 100%;
            width: 100%;
        }

        @media only screen and (min-width: 601px) {
            .container {
                width: 100%;
                margin: 0px;
                padding: 0px;
            }
        }

        @media only screen and (min-width: 993px) {
            .container {
                width: 100%;
                margin: 0px;
            }
        }


        @media only screen and (max-width: 992px) {
            .input-field .prefix ~ input {
                margin: 0px;

                width: calc(100% - 3rem);
            }
        }

        @media only screen and (max-width: 600px) {
            .input-field .prefix ~ input {
                width: 80%;
            }
        }


        h1 {
            display: block;
            font-size: 4em;
            font-weight: bold;
        }

        .row {
            padding-left: 50px;
            padding-right: 50px;
        }


        .btn {
            background-color: #2196f3;
        &:hover {
            background-color: #64b5f6;
        }

        }

        .reset {

        .row {
            padding-left: 11px;
            padding-right: 11px;
        }

        }

        .dropdown-content li:hover, .dropdown-content li.active, .dropdown-content li.selected {
            background-color: #eee;
        }

        .dropdown-content li.active.selected {
            background-color: #e1e1e1;
        }

        .dropdown-content li.divider {
            min-height: 0;
            height: 1px;
        }

        .dropdown-content li > a, .dropdown-content li > span {
            font-size: 26px;
            color: black;
            display: block;
            line-height: 22px;
            padding: 14px 16px;
        }
    </style>
    <title>Reg User</title>
@endsection
@section('content')
    <h1 style="text-align: center">User Registration</h1>
    <!-- Upload  -->

    <form action="reguser" method="post" enctype="multipart/form-data" >
        {{ @csrf_field() }}
        <div id="over" style="width:100%; height:100%">
            <img class="img-responsive img-rounded centerImage" width="150" height="150" name="output" id="output">
        </div>

        <label class="waves-effect waves-light btn centerImage" >
            Upload Photo
            <input type="file" name="user_profile" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" onchange="loadfile(event)">
        </label><br>
        @error('user_profile')
        <span style="color: red;"> {{ $message}}</span>
        @enderror
        <div class="row">
            <div class="input-field col s12  l6">
                <input type="text" name="fullname"><br>
                @error('fullname')
                <span style="color: red"> {{ $message}}</span>
                @enderror
                <label for="first_name">Full Name</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" name="email"><br>
                @error('email')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Email ID</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" name="blood_group"><br>
                @error('blood_group')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Blood Group</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" name="contact_number"><br>
                @error('contact_number')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Contact Number</label>
            </div>
            <div class="input-field col s12 ">
                <input type="text" name="gender"><br>
                @error('gender')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Gender</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="password" name="password" ><br>
                @error('password')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Password</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="password" name="confirm_password"><br>
                @error('confirm_password')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Confirm Password</label>
            </div>
            <button type="submit"  class="waves-effect waves-light btn">Submit</button>
        </div>

    </form>
    <script>
        var loadfile= function(event)
        {
            var output=document.getElementById("output");
            output.src= URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection
