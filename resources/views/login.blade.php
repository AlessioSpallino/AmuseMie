<!DOCTYPE html>
<html lang="en">
@include('layout.head');
<body>
<div class="container raleway" style="text-align:center">
    <h1 style="padding-bottom:20px">LOGIN WITH</h1>


    <div class="row">
        <ul class="social-btns center-block">
            <li><a><button class="btn btn-facebook"><i class="fa fa-facebook pull-left" aria-hidden="true"></i>Sign in with Facebook</button></a></li>
            
            <li><a href="{{ url('login/google') }}"><button class="btn btn-google"><i class="fa fa-google-plus pull-left" aria-hidden="true"></i>Sign in with Google</button></a></li>
            
            <li><button class="btn btn-aalto"><i class="fa fa-pinterest-p pull-left" aria-hidden="true"></i>Sign in with Aalto</button></li>
        </ul>
    </div>


    <!--
    <div>
        <button class="button-facebook"><img class="pequeña" src="{{ asset('img/facebook-logo-blanco.png') }}" style="width: 10%">  Login with Facebook</button>
    </div>
    <div style="margin-top: 16px">
        <button href="{{ url('login/google') }}" class="button-google"><img class="pequeña" src="{{ asset('img/google-plus.png') }}" style="width: 10%">  Login with Google</button>
    </div>
    <div style="margin-top: 16px">
        <button class="button-aalto"><img class="pequeña" src="{{ asset('img/Aalto-logo.png') }}" style="width: 17%">  Login with Aalto</button>
    </div>-->

</div>

</body>

</html>
