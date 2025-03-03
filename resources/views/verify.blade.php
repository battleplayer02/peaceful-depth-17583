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
                <h2>Verification</h2>
            </div>
            <div class="section-wrapper">

                {{csrf_field()}}

                <form action="getpassdetails">
                    <input type="text" class="form-control" id="id" name="id" placeholder="Your ID "
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your ID'">
                    <button id="search" class="form-control btn btn-primary text-uppercase banner-right">Search</button>
                    <br>
                </form>
                @if(isset($data))
                    <form class="form-wrap" action="verifypass" method="get">
                        @csrf
                        <legend>Verify Pass</legend>
                        <fieldset>
                            <input type="hidden" value="{{$data->pass_id}}" name="passid">
                            <input type="date" class="form-control" id="ticket_valid" name="ticket_valid"
                                   value="{{$data->valid_till}}"
                                   placeholder="Valid Till" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Valid Till '">
                            <input type="text" class="form-control" id="reason" name="reason" placeholder="Reason "
                                   readonly
                                   value="{{$data->reason}}"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'reason '">
                            <input type="text" class="form-control" id="vehicle_no" name="vehicle_no" readonly
                                   value="{{$data->vehicle_number}}"
                                   placeholder="Vehicle Number " onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Vehicle Number'">
                            <input type="text" class="form-control" id="vehicle_type" name="vehicle_type" readonly
                                   value="{{$data->vehicle_type}}"
                                   placeholder="Vehicle Type " onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Vehicle Type'">
                            <select class="form-control" name="verified">
                                <option value="">--Verification Status--</option>
                                <option value="Verified">Verified</option>
                                <option value="Not Verified">Not Verified</option>
                            </select><br>
                            <input type="text" class="form-control" id="issuedby" name="issuedby"
                                   placeholder="Issued By(Authority Name)" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Issued By(Authority Name) '">
                            <button id="submit" class="form-control btn btn-primary text-uppercase">Submit</button>
                        </fieldset>
                    </form>
                @endif
                <br/><br/>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/book.js">

    </script>
@stop

