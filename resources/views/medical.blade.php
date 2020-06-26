@extends("layout")

@section('title')
    <link rel="shortcut icon" type="image/x-icon" href="images/x-icon/01.png">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <title>Medical Stores</title>
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
                                <h4>Medical Stores</h4>
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search through cities.." title="Type in a name">
                                <table class="table table-striped" id="mtable">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Number</th>
                                        <th>Address</th>
                                        <th>City</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mdata as $value)
                                    <tr>
                                        <td>{{$value->store_name}}</td>
                                        <td>{{$value->number}}</td>
                                        <td>{{$value->address}}</td>
                                        <td>{{$value->city}}</td>
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
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("mtable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@stop

