@extends("layout")

@section('title')
<link rel="shortcut icon" type="image/x-icon" href="images/x-icon/01.png">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <title>Lab Upload</title>
@endsection

@section('content')

<div class="container">
    <br/><br/>
    <div class="service-wrap">
        <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
            <h2>Upload Reports</h2>
        </div>
        <div class="section-wrapper">
                <form action="https://example-app-100.herokuapp.com/file.php" method="post" enctype="multipart/form-data"  >
                    <legend>File Upload</legend>
                    <div class="form-group">
                    <label for="age">Security Key:</label
                        <input type="number" class="form-control" id="seckey" placeholder="Enter Key" name="seckey">
                    </div>
                    <div class="form-group">
                    <label for="id">Id:</label>
                        <input type="text" class="form-control" id="id" placeholder="ID" name="id">
                    </div>
                    <div class="form-group">
                        <label for="testname">Test Name:</label>
                        <input type="text" class="form-control" id="testname" placeholder="Test Name" name="testname">
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="labreport">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
                <br/><br/>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/book.js">

</script>
@stop

