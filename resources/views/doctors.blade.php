@extends("layout")

@section('content')
@for($i=0;$i<10;$i++)
    {{$i+1}}<br>
@endfor
@stop
