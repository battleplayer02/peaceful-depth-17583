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
                    <li>Register New User</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->



    <!-- Contact Section Start Here -->
    <div align="center">
        <section class="contact-us padding-tb pb-0 align-content-center">
            <div class="container align-content-center">
                <div class="contact-wrap col-lg-6 col-sm-4" align="center">
                    <div class="contact-title">
                        <h5>New User Registration</h5>
                    </div>
                    <form class="contact-form" action="reguser" method="post" enctype="multipart/form-data" onsubmit="uploadpic()">
                        <!-- Text input-->
                        {{ csrf_field() }}
                        <div id="over" style="width:100%; height:100%">
                            <img class="img-responsive img-rounded centerImage" width="150" height="150" name="output"
                                 id="output">
                        </div>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" value="upload" id="fileButton"
                                   name="user_profile" required="" onchange="loadfile(event)">
                            <label class="custom-file-label" for="customFile">Upload Profile Photo</label>
                            <progress value="0" max="100" id="uploader">0%</progress>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="fullname">Full Name</label>
                            <input id="fullname" name="fullname" type="text" placeholder="Full Name"
                                   value="{{old('fullname')}}"
                                   class="form-control"
                                   required="">
                            @error('fullname')
                            <span style="color: red">{{ $message}}<br></span>
                            @enderror
                        </div>
                        <label class="control-label" for="email">Email Id</label>
                        <input id="email" name="email" type="text" placeholder="Enter your Email Id"
                               class="form-control" required="" value="{{old('email')}}">
                        @error('email')
                        <span style="color: red">{{ $message}}<br></span>
                        @enderror
                        <label class="control-label" for="contact_number">Contact Number</label>
                        <input id="contact_number" name="contact_number" class="form-control"
                               placeholder="Contact Number" type="text" value="{{old("contact_number")}}" required="">
                        @error('contact_number')
                        <span style="color: red">{{ $message}}<br></span>
                        @enderror
                        <label class="control-label" for="contact_number">Gender:</label>
                        <select name="gender" id="" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female"
                                    @if(old('gender'))
                                    selected
                                @endif

                            >Female
                            </option>
                        </select>
                        <br>
                        <label class="control-label" for="blood_group">Blood Group</label>
                        <input id="blood_group" name="blood_group" type="text" placeholder="Enter your Blood Group"
                               class="form-control" value="{{old('blood_group')}}" required="">
                        @error('blood_group')
                        <span style="color: red">{{ $message}}<br></span>
                        @enderror

                        <label class="control-label" for="fullname">Password</label>
                        <input id="password" name="password" type="password" placeholder="Password"
                               class="form-control"
                               required="">
                        @error('password')
                        <span style="color: red">{{ $message}}<br></span>
                        @enderror

                        <label class="control-label" for="Password">Confirm Password</label>
                        <input id="confirm_password" name="confirm_password" type="password"
                               placeholder="Re-type Password"
                               class="form-control"
                               required="">
                        @error('confirm_password')
                        <span style="color: red">{{ $message}}<br></span>
                        @enderror
                        <input type="submit" name="submit" value="Register" class="lab-btn">
                    </form>
                </div>
            </div>


            <script src="https://www.gstatic.com/firebasejs/7.15.1/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.15.1/firebase-database.js"></script>

            <!-- TODO: Add SDKs for Firebase products that you want to use
             https://firebase.google.com/docs/web/setup#available-libraries -->
            <script src="https://www.gstatic.com/firebasejs/7.15.1/firebase-analytics.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.15.3/firebase-firestore.js"></script>
            <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

            <script>
                var flag;
                // Your web app's Firebase configuration
                var firebaseConfig = {
                    apiKey: "AIzaSyA-_2TbEuJ8YSJYY8NE6ecSaofP2N3HiMc",
                    authDomain: "messaging-c93b9.firebaseapp.com",
                    databaseURL: "https://messaging-c93b9.firebaseio.com",
                    projectId: "messaging-c93b9",
                    storageBucket: "messaging-c93b9.appspot.com",
                    messagingSenderId: "206037349865",
                    appId: "1:206037349865:web:d8a70455403d1624eec778",
                    measurementId: "G-77PW5FL81L"
                };
                // Initialize Firebase
                firebase.initializeApp(firebaseConfig);
                // firebase.analytics();

                var uploader = document.getElementById("uploader");
                var fileButton = document.getElementById("fileButton");

                var flag1;

                //listen for file selection
                function uploadpic() {
                    flag1 = false;
                    var storageRef = firebase.storage().ref();
                    var file = flag;
                    var uploadTask = storageRef.child('docimages/' + document.getElementById('contact_number').value + '.jpg').put(file);
                    //upload file
                    var task = storageRef.put(file);
                    task.on('state_changed', function (snapshot) {
                        // Observe state change events such as progress, pause, and resume
                        // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
                        var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                        console.log('Upload is ' + progress + '% done');
                        switch (snapshot.state) {
                            case firebase.storage.TaskState.PAUSED: // or 'paused'
                                console.log('Upload is paused');
                                break;
                            case firebase.storage.TaskState.RUNNING: // or 'running'
                                console.log('Upload is running');
                                break;
                        }
                    }, function (error) {
                        // Handle unsuccessful uploads
                    }, function () {
                        // Handle successful uploads on complete
                        // For instance, get the download URL: https://firebasestorage.googleapis.com/...
                        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
                            console.log('File available at', downloadURL);
                            flag1 = true;
                            alert(downloadURL);
                        });
                    });
                    return flag1;
                }

                var loadfile = function (event) {
                    var output = document.getElementById("output");
                    flag = event.target.files[0];
                    output.src = URL.createObjectURL(event.target.files[0]);
                };


            </script>
        </section>
    </div>
    <!-- Contact Section Ending Here -->
@endsection
