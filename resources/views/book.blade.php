{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">--}}
@extends("layout")
@section("title")
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@stop
@section("content")
    <div class="card col-lg-8 m-5">
        <h5 class="card-header">
            Book Appointment
        </h5>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="text1" class="col-2 col-form-label">Text Field</label>
                    <div class="col-10">
                        <input id="text1" name="text1" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text" class="col-2 col-form-label">Text Field</label>
                    <div class="col-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input id="text" name="text" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text2" class="col-2 col-form-label">Text Field</label>
                    <div class="col-10">
                        <input id="text2" name="text2" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-2 col-10">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
