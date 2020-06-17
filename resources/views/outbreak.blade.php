@extends('layout')
@section('title')
    <title>Outbreak</title>
@endsection

@section('content')

    <!-- Page Header Section Start Here -->
    <section class="page-header">
        <div class="container">
            <div class="page-title">
                <h2>Mapping the Coronavirus Outbreak</h2>
                <ul class="breadcrumb lab-ul">
                    <li><a href="index.html">Home</a></li>
                    <li>Coronavirus Outbreak</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->


    <!-- corona count section start here -->
    <section class="corona-count-section pt-0 padding-tb">
        <div class="container">
            <div class="corona-wrap">
                <div class="corona-count-top">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-3 col-md-6 col-12">
                            <h5>Total Corona Statistics :</h5>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="corona-item">
                                <div class="corona-inner">
                                    <div class="corona-thumb">
                                        <img src="images/corona/01.png" alt="corona">
                                    </div>
                                    <div class="corona-content">
                                        <h3 class="count-number">262774</h3>
                                        <p>Active Cases</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="corona-item">
                                <div class="corona-inner">
                                    <div class="corona-thumb">
                                        <img src="images/corona/02.png" alt="corona">
                                    </div>
                                    <div class="corona-content">
                                        <h3 class="count-number">125050</h3>
                                        <p>Recovered Cases</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="corona-item">
                                <div class="corona-inner">
                                    <div class="corona-thumb">
                                        <img src="images/corona/03.png" alt="corona">
                                    </div>
                                    <div class="corona-content">
                                        <h3 class="count-number">16558</h3>
                                        <p>Deaths</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="corona-count-bottom">
                    <div class="gmaps">
                        <img src="images/map.png" alt="map">
                    </div>
                </div>

                <div class="countcorona">
                    <div class="countcorona-area">
                        <table id="example" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Date,Time</th>
                                <th>State</th>
                                <th>Confirmed</th>
                                <th>Active</th>
                                <th>Recovered</th>
                                <th>Death</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $data = file_get_contents('https://api.covid19india.org/data.json');
                            $coranalive = json_decode($data, true);

                            $statescount = count($coranalive['statewise']);

                            $i = 1;
                            while ($i < $statescount) {
                                echo "<tr>";
                                echo "<th>".$coranalive['statewise'][$i]['lastupdatedtime']."</th>";
                                echo "<th>".$coranalive['statewise'][$i]['state']."</th>";
                                echo "<th>".$coranalive['statewise'][$i]['confirmed']."</th>";
                                echo "<th>".$coranalive['statewise'][$i]['active']."</th>";
                                echo "<th>".$coranalive['statewise'][$i]['recovered']."</th>";
                                echo "<th>".$coranalive['statewise'][$i]['deaths']."</th>";
                                echo "</tr>";
                                $i++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- corona count section ending here -->
@stop
