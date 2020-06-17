<html>
<head>
    <title>Doctor Registeration</title>
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="eJp8A5GIe8tMrhLZzOKZtiXnN4CTRg9Ahmq07pucB8lHXQphVycCBctGUW33oh4rk4sXr/uLSBC2QnI9Tr2FCg==" />
    <link rel="stylesheet" media="all" href="http://floating-earth-19478.herokuapp.com/assets/application-a4b917e3c310a38959ed9494d53faf9df577d0f5d79b9b2ab9c4cb9dbc42abd8.css" data-turbolinks-track="reload" />
    <script src="http://floating-earth-19478.herokuapp.com/assets/application-2533c5099d25f4b1fef8883f00a85ff34d801828383870645cb2e1e88fb66731.js" data-turbolinks-track="reload"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
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
</head>

<body>
<h1 style="text-align: center">Doctor Registration</h1>
<main>
    <div class="row">
        <form action="regdoctor" method="post" >
            {{ @csrf_field() }}
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
            <div class="input-field col s12 l6">
                <input type="text" name="department"><br>
                @error('department')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Department</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" name="experience"><br>
                @error('experience')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Experience</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" name="specialization" ><br>
                @error('specialization')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Specialization</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" name="hosp_id"><br>
                @error('hosp_id')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Hospital ID</label>
            </div>
            <div class="input-field col s12 ">
                <input type="text" name="qualification"><br>
                @error('qualification')
                <span style="color: red">{{ $message}}</span>
                @enderror
                <label for="last_name">Qualification</label>
            </div>
            <button type="submit"  class="waves-effect waves-light btn">Submit</a>
        </form>
    </div>
</main>

</body>
</html>
