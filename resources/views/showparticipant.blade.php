@extends("layout")

@section('title')
    <link rel="shortcut icon" type="image/x-icon" href="images/x-icon/01.png">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <title>Your Labs</title>
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
                                <h4>Your Report</h4>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Issued By</th>
                                        <th>Report</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Labs Lord</td>
                                        <td><button type="submit" class="btn btn-primary">Download</button></td>
                                    </tr>
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

