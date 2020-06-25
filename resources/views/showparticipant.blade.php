<?php
$i = 0;
?>
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
    <title>Your Participants</title>
@endsection

@section('content')
    <div class="container">
        <br/><br/>
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-md-12 col-12 wow fadeInUp">
                    <div class="service-item text-center">
                        <div class="service-inner">
                            <div class="service-content">
                                <h4>Your Event Participants</h4>
                                <table class="table table-striped">
                                    <thead>

                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Participant Name</th>
                                        <th>Participant Contact</th>
                                        <th>Address</th>
                                        <th>Assigned Work</th>
                                        <th>Add Work</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($participants as $value)
                                        <?php
                                        $i++;
                                        ?>

                                        <tr>
                                            <th>{{$i}}</th>
                                            <th>{{$value->pname}}</th>
                                            <th>{{$value->pmobile}}</th>
                                            @if($value->address == null)
                                                <th>
                                                    Work is not alloted
                                                </th>
                                            @else
                                                <th>
                                                    {{$value->address}}
                                                </th>
                                            @endif

                                            @if($value->assigned_work == null)
                                                <th>
                                                    No work Assigned
                                                </th>
                                            @else
                                                <th>
                                                    {{$value->assigned_work}}
                                                </th>
                                            @endif
                                            <th>
                                                <form action="assignwork">
                                                    <input type="hidden" value="{{$value->pid}}" name="pid">
                                                    <input type="hidden" value="{{$value->eid}}" name="eid">
                                                    <button class="btn btn-primary">Edit</button>
                                                </form>
                                            </th>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/book.js">

    </script>
@stop

