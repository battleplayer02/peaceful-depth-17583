<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Pass</title>
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/stylepass.css">

</head>
<body>


<div class="ticket">
    <div class="holes-top"></div>
    <div class="title">
        <p class="movie-title">This Is A Verified Travelling Pass</p>
        <p class="cinema">Name : {{session('logininfo')[0]->name}}</p>
    </div>
    <div class="poster" style="background: url('/images/qr.png'); background-size: 100%">
    </div>
    <div class="info">
    </div>
    <div class="holes-lower"></div>
    <div class="serial">
        <h3>Data</h3>
    </div>
</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="js/scriptpass.js"></script>

</body>
</html>
