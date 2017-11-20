<!DOCTYPE html>
<html lang="en">
@include('layout.head');
<body>
<div class="container raleway" style="text-align:center">
    <h1 style="padding-bottom:20px">LOGIN WITH</h1>


    <div class="row">
        <ul class="social-btns center-block">
            <li><a href="{{ url('login/facebook') }}"><button class="btn btn-facebook"><i class="fa fa-facebook pull-left" aria-hidden="true"></i>Sign in with Facebook</button></a></li>
            
            <li><a href="{{ url('login/google') }}"><button class="btn btn-google"><i class="fa fa-google-plus pull-left" aria-hidden="true"></i>Sign in with Google</button></a></li>
            
            <li><button class="btn btn-aalto"><i class="fa fa-pinterest-p pull-left" aria-hidden="true"></i>Sign in with Aalto</button></li>
        </ul>
    </div>



</div>

</body>

</html>
