<html>
    <head>
        <meta name="csrf-param" content="authenticity_token" />
        <meta name="csrf-token" content="eJp8A5GIe8tMrhLZzOKZtiXnN4CTRg9Ahmq07pucB8lHXQphVycCBctGUW33oh4rk4sXr/uLSBC2QnI9Tr2FCg==" />
        <link rel="stylesheet" media="all" href="http://floating-earth-19478.herokuapp.com/assets/application-a4b917e3c310a38959ed9494d53faf9df577d0f5d79b9b2ab9c4cb9dbc42abd8.css" data-turbolinks-track="reload" />
        <script src="http://floating-earth-19478.herokuapp.com/assets/application-2533c5099d25f4b1fef8883f00a85ff34d801828383870645cb2e1e88fb66731.js" data-turbolinks-track="reload"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="{{ URL::asset('css/useruploadimage.css') }}" rel="stylesheet" type="text/css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
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
            </style>
    </head>

    <body>
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
                          <button type="submit"  class="waves-effect waves-light btn">Submit</a>
                    </div>

                </form>
            <script>
                var loadfile= function(event)
                {
                    var output=document.getElementById("output");
                    output.src= URL.createObjectURL(event.target.files[0]);
                };

            </script>
    </body>
</html>
