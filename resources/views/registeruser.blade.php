@extends('layout')
@section('title')
    <style>
    </style>
    <title>Reg User</title>
@endsection
@section('content')
    <h3 style="text-align: center">User Registration</h3>
    <!-- Upload  -->

    <form action="reguser" method="post" enctype="multipart/form-data">
        @csrf
        <div style="width:100%; height:100%">
            <img width="150" height="150" name="output" id="output">
        </div>

        <label class="">
            Upload Photo
            <input type="file" name="user_profile" value="Upload Photo" onchange="loadfile(event)">
        </label><br>
        @error('user_profile')
        <span style="color: red;"> {{ $message}}</span>
        @enderror
        <div class="row">
            <div class="">
                <input type="text" name="fullname"><br>
                @error('fullname')
                <span style="color: red"> {{ $message}}</span>
                @enderror
                <label for="first_name">Full Name</label>
            </div>
            <div class="">
                <input type="text" name="email"><br>
                @error('email')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Email ID</label>
            </div>
            <div class="">
                <input type="text" name="blood_group"><br>
                @error('blood_group')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Blood Group</label>
            </div>
            <div class="">
                <input type="text" name="contact_number"><br>
                @error('contact_number')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Contact Number</label>
            </div>
            <div class="">
                <input type="text" name="gender"><br>
                @error('gender')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Gender</label>
            </div>
            <div class="">
                <input type="password" name="password"><br>
                @error('password')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Password</label>
            </div>
            <div class="">
                <input type="password" name="confirm_password"><br>
                @error('confirm_password')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Confirm Password</label>
            </div>
            <button type="submit" class="">Submit</button>
        </div>

    </form>
    <script>
        var loadfile = function (event) {
            var output = document.getElementById("output");
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection
