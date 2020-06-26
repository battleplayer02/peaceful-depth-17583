@extends("layout")

@section('title')
    <link rel="shortcut icon" type="image/x-icon" href="images/x-icon/01.png">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css"/>

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <title>Travel Pass</title>
@endsection

@section('content')

    <div class="container">
        <br/><br/>
        <div class="service-wrap">
            <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                <h2>Request For Travel Pass</h2>
            </div>
            <div class="section-wrapper">
                <form class="form-wrap" action="requestcont" method="post">
                    <input type="text" class="form-control" id="vehicle_no" name="vehicle_no"
                           placeholder="Vehicle Number " onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Vehicle Number '">
                    <select name="vehicle_type" id="vehicle_type" class="form-control">
                        <option value="">--Choose Vehicle type--</option>
                        <option value="bike">Bike/Scooty</option>
                        <option value="car">Car</option>
                        <option value="bus">Bus</option>
                        <option value="truck">Truck</option>
                    </select>
                    <br>
                    <input type="date" class="form-control" id="ticket_valid" name="ticket_valid"
                           placeholder="Valid Till" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Valid Till '">
                    <input type="text" class="form-control" id="reason" name="reason" placeholder="Reason "
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'reason '">
                    <button id="a" class="btn btn-primary text-uppercase">Submit</button>
                </form>
                <br/><br/>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/book.js">

    </script>
@stop

