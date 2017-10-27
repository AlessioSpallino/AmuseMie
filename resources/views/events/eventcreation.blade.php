<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
<div class="container raleway" style="text-align:center">
    <h1 style="padding-bottom:20px"> CREATE EVENT</h1>

    <div class="textSignUp">Event name:</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput" type="text" placeholder="Write your events name here" aria-label="Write your events name here">
    </div>
    <div class="textSignUp">Date:</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput" type="text" placeholder="1.1.2018" aria-label="1.1.2018">
    </div>
    <div class="textSignUp">Time:</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput" type="text" placeholder="00:00-00:00" aria-label="00:00-00:00">
    </div>
    <div class="textSignUp">Description</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput signUpInputAdditional" type="text" placeholder="Write your description here" aria-label="Write your description here">
    </div>
    <div>
        <input class="form-control mr-sm-2 signUpInput" type="image" src="Picture/camara.png">
    </div>
    <div class="col-md-offset-5 col-md-2">
        <button class="btn btn-outline-success raleway button btnClickable" style="margin-top:20px;margin-bottom: 20px" type="submit">CREATE</button>
    </div>
</div>

</body>

</html>
