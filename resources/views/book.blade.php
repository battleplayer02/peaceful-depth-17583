@extends("layout")

@section('title')
    <style>
        .center-himanshu {
            margin: auto;
            width: 60%;
            padding: 20px;
        }
    </style>
    <link rel="shortcut icon" type="image/x-icon" href="images/x-icon/01.png">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css"/>

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <title>Book Appointment </title>
@endsection

@section('content')

    <div class="container card shadow pt-3">
        <div class="text-center wow fadeInUp" data-wow-delay="0.3s">
            <h2>Book Appointment</h2>
        </div>
        <div class="center-himanshu card pl-3 pr-3 col-lg-12 col-sm-12">
            {{--            <div class="section-wrapper">--}}
            <form action="bookapp" method="post">
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" id="age" placeholder="Enter age" name="age">
                </div>
                <div class="form-group"> <!-- Date input -->
                    <label class="control-label" for="date">Date</label>
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date"/>
                </div>
                <div class='form-group date' id='datetimepicker3'>
                    <label for="time">Time:</label>
                    <input type='time' class="form-control" placeholder="Time" id="time" name="time">
                    <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                </div>
                <div class="form-group">
                    <label for="symptoms">Symptoms:</label>
                    <textarea rows="8" class="form-control" id="symptoms"
                              name="symptoms">
                    </textarea>
                </div>
                @csrf
                <input type="hidden" value="{{$docid}}" name="docid">
                <div class="form-group">
                    <label for="temperature">Temperature:</label>
                    <input type="text" class="form-control" id="temperature" placeholder="Temperature"
                           name="temperature">
                </div>
                <div class="form-group">
                    <label for="medicine">Medicine:</label>
                    <input type="text" class="form-control" id="medicine" placeholder="Medicine"
                           name="medicine">
                </div>
                <div class="form-group">
                    <label for="previous">Previous Disease:</label>
                    <input type="text" class="form-control" id="previous" placeholder="Previous Disease"
                           name="previous">
                </div>
                <div class="form-group">
                    <label for="chronic">Medicine:</label>
                    <input type="text" class="form-control" id="chronic" placeholder="Chronic Disease"
                           name="chronic">
                </div>
                <button type="submit" class="btn btn-primary form-control">Book</button>
            </form>
            <br/><br/>
        </div>
        {{--        </div>--}}
    </div>
    <script type="text/javascript" src="/js/book.js">

    </script>
@stop
