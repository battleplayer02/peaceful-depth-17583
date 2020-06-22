@extends("layout")

@section('title')  
<link rel="shortcut icon" type="image/x-icon" href="images/x-icon/01.png">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <title>Profile</title>
@endsection

@section('content')

<div class="container">
    <br/><br/>
    <div class="service-wrap">
        <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
            <h2>Profile</h2>
        </div>
        <div class="section-wrapper">
                <form action="/action_page.php">
                    <img src=""  alt="ProfileImage" width="" height="200">
                    <div class="form-group">
                    <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                    </div>
                    <div class="form-group">
                    <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" placeholder="Email:" name="email">
                    </div>
                    <div class="form-group">
                    <label for="temperature">Blood Group:</label>
                        <input type="text" class="form-control" id="bloodgroup" placeholder="Blood Group" name="blood group">
                    </div>
                    <div class="form-group">
                    <label for="medicine">Gender:</label>
                        <input type="text" class="form-control" id="gender" placeholder="Gender" name="gender">
                    </div>
                    <div class="form-group">
                    <label for="previous">Contact Number:</label>
                        <input type="text" class="form-control" id="contactnumber" placeholder="Contact number" name="contactnumber">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <br/><br/>
        </div>
    </div>                
</div>
<script type="text/javascript" src="js/book.js">
            
</script>
@stop
    
