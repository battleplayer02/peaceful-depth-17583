@extends('layout')
@section('title')
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href={{"css/style1.css"}}>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
@stop
@section("content")
    <br><br>
    <div align="center">
        <div class="cont">
            <div class="form sign-in">
                <h2>Sign In</h2>
                <form action="LoginSubmit" method="post">
                    @csrf
                    <label>
                        <span>Email Address</span>
                        <input type="email" name="email">
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" name="password">
                    </label>
                    <button class="submit" type="submit">Sign In</button>
                    <p class="forgot-pass">Forgot Password ?</p>
                </form>
            </div>

            <div class="sub-cont">
                <div class="img">
                    <div class="img-text m-up">
                        <h2>New here?</h2>
                        <p>Sign up and discover great amount of new opportunities!</p>
                    </div>
                    <div class="img-text m-in">
                        <h2>One of us?</h2>
                        <p>If you already has an account, just sign in. We've missed you!</p>
                    </div>
                    <div class="img-btn">
                        <span class="m-up">Sign Up</span>
                        <span class="m-in">Sign In</span>
                    </div>
                </div>
                <div class="form sign-up">
                    <div class="container">
                        <div class="row">
                            <div class="card"></div>
                        </div>
                        <div class="row">
                            <div class="card"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src={{"js/script.js"}}></script>
    </div>
    <br><br>
@stop
