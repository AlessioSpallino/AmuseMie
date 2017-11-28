<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
<div class="container raleway" style="text-align:center">
	<form action="{{ route('newassociation') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <h1 style="padding-bottom:20px"> CREATE ASSOCIATION</h1>

    <div class="textSignUp">Association name:</div>
    <div>
        <input name="name" class="form-control mr-sm-2 signUpInput" type="text" placeholder="Name of your association" aria-label="Name of your association">
    </div>
    <div class="textSignUp">Address:</div>
    <div>
        <input name="address" class="form-control mr-sm-2 signUpInput" type="text" placeholder="Post adress for your association" aria-label="Post adress for your association">
    </div>
    <div class="textSignUp">Email:</div>
    <div>
        <input name="email" class="form-control mr-sm-2 signUpInput" type="text" placeholder="Your associations email adress" aria-label="Your associations email adress">
    </div>
    <div class="textSignUp">Website:</div>
    <div>
        <input name="website" class="form-control mr-sm-2 signUpInput" type="text" placeholder="https://" aria-label="https://">
    </div>
    <div class="textSignUp">Facebook:</div>
    <div>
        <input name="facebook" class="form-control mr-sm-2 signUpInput" type="text" placeholder="Pretext" aria-label="Pretext">
    </div>
    <div class="textSignUp">Instagram:</div>
    <div>
        <input name="instagram" class="form-control mr-sm-2 signUpInput" type="text" placeholder="Pretext" aria-label="Pretext">
    </div>

    <div class="textSignUp">Description</div>
    <div>
        <textarea name="description" class="form-control" id="addinfo"></textarea>
    </div>

    <div class="textSignUp">Add association picture:</div>
    <div align="center" style="margin: 0 auto">
        <input name="photo" class="form-control mr-sm-2 signUpInput" type="file" style="height:100%">

        <!--{!! Form::File('photo') !!}-->
        
    </div> 
    <div class="col-md-offset-5 col-md-2">
        <input class="btn btn-outline-success raleway button btnClickable" style="margin-top:40px;margin-bottom: 20px" type="submit" value="CREATE">
    </div>
	</form>
</div>

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'addinfo' );
    </script>
</body>

</html>
