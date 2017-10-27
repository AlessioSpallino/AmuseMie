<!DOCTYPE html>
<html lang="en">
@include('layout.head');
<body>
<div class="container raleway" style="text-align:center">
    <h1 style="padding-bottom:20px"> UPDATE ASSOCIATION</h1>

    <div class="textSignUp">Association name:</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput" type="text" placeholder="Name of your association" aria-label="Name of your association">
    </div>
    <div class="textSignUp">Adress:</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput" type="text" placeholder="Post adress for your association" aria-label="Post adress for your association">
    </div>
    <div class="textSignUp">Email:</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput" type="text" placeholder="Your associations email adress" aria-label="Your associations email adress">
    </div>
    <div class="textSignUp">Admins:</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput" type="text" placeholder="Search for an admin by their names" aria-label="Search for an admin by their names">
    </div>
    <div class="textSignUp">Website:</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput" type="text" placeholder="https://" aria-label="https://">
    </div>
    <div class="textSignUp">Facebook:</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput" type="text" placeholder="Pretext" aria-label="Pretext">
    </div>
    <div class="textSignUp">Instagram:</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput" type="text" placeholder="Pretext" aria-label="Pretext">
    </div>

    <div class="textSignUp">Description</div>
    <div>
        <input class="form-control mr-sm-2 signUpInput signUpInputAdditional" type="text" placeholder="Describe your association here" aria-label="Describe your association here">
    </div>
    <div>
        <input class="mr-sm-2 signUpInput" style="height:180px" type="image" src="Picture/camara.png">
    </div>
    <div class="col-md-offset-5 col-md-2">
        <button class="btn btn-outline-success raleway button btnClickable" style="margin-top:20px;margin-bottom: 20px" type="submit">UPDATE</button>
    </div>
</div>

</body>
