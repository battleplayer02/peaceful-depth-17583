@extends('layout')
@section('title')
    <title>Hospital Registeration</title>
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="eJp8A5GIe8tMrhLZzOKZtiXnN4CTRg9Ahmq07pucB8lHXQphVycCBctGUW33oh4rk4sXr/uLSBC2QnI9Tr2FCg==" />
    <link rel="stylesheet" media="all" href="http://floating-earth-19478.herokuapp.com/assets/application-a4b917e3c310a38959ed9494d53faf9df577d0f5d79b9b2ab9c4cb9dbc42abd8.css" data-turbolinks-track="reload" />
    <script src="http://floating-earth-19478.herokuapp.com/assets/application-2533c5099d25f4b1fef8883f00a85ff34d801828383870645cb2e1e88fb66731.js" data-turbolinks-track="reload"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        $(document).on('turbolinks:load', function(){
            $(".button-collapse").sideNav();
        });
    </script>

    <style type="text/css">

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
                margin:0px;
                padding:0px;
            } }

        @media only screen and (min-width: 993px) {
            .container {
                width: 100%;    margin:0px;
            } }


        @media only screen and (max-width: 992px) {
            .input-field .prefix ~ input {
                margin:0px;

                width: calc(100% - 3rem); } }
        @media only screen and (max-width: 600px) {
            .input-field .prefix ~ input {
                width: 80%;
            } }


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
            background-color: #eee; }
        .dropdown-content li.active.selected {
            background-color: #e1e1e1; }
        .dropdown-content li.divider {
            min-height: 0;
            height: 1px; }
        .dropdown-content li > a, .dropdown-content li > span {
            font-size: 16px;
            color: black;
            display: block;
            line-height: 22px;
            padding: 14px 16px; }
    </style>
@endsection
@section('content')
<h1 style="text-align: center">Hospital Registration</h1>
<main>
    <div class="row">
        <form action="reghospital" method="post" >
            {{ @csrf_field() }}
            <div class="input-field col s12  l6">
                <input type="text" name="hospname"><br>
                @error('hospname')
                <span style="color: red"> {{ $message}}</span>
                @enderror
                <label for="first_name">Hospital Name</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" name="address"><br>
                @error('address')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Address(Street no,colony)</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" name="city"><br>
                @error('city')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">City</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" name="state"><br>
                @error('state')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">State</label>
            </div>
            <div class="input-field col s12 ">
                <input type="text" name="pincode"><br>
                @error('pincode')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Pincode</label>
            </div>
            <div class="input-field col s12 ">
                <input type="text" name="corona_treatment" ><br>
                @error('corona_treatment')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Corona Treatment(Yes/No)</label>
            </div>
            <br>
            <button type="submit"  class="waves-effect waves-light btn">Submit</a>
        </form>
    </div>
</main>

@endsection
