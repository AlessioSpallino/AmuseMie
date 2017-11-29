<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
<div class="container raleway" style="text-align:center">
	<form action="{{ route('newevent') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
		<h1 style="padding-bottom:20px"> CREATE EVENT</h1>

		<div class="textSignUp">Event name:</div>
		<div>
			<input name="title" class="form-control mr-sm-2 signUpInput" type="text" placeholder="Write your events name here" aria-label="Write your events name here">
		</div>
		<div class="textSignUp">Date:</div>
		<div>
			<input name="date" class="form-control mr-sm-2 signUpInput" type="text" placeholder="1.1.2018" aria-label="1.1.2018">
		</div>
		<div class="textSignUp">Time:</div>
		<div>
			<input name="time" class="form-control mr-sm-2 signUpInput" type="text" placeholder="00:00" aria-label="00:00">
		</div>
		<div class="textSignUp">Address:</div>
		<div>
			<input name="address" class="form-control mr-sm-2 signUpInput" type="text" placeholder="address" aria-label="Address">
		</div>
		<div class="textSignUp">Price:</div>
		<div>
			<input name="price" class="form-control mr-sm-2 signUpInput" type="text" placeholder="euro" aria-label="euro">
		</div>
		<div class="textSignUp">Description</div>
    	<div>
        	<textarea name="description" class="form-control" id="addinfo"></textarea>
    	</div>
		<div class="textSignUp">Add association picture:</div>
    		<div align="center" style="margin: 0 auto">
        		<input name="photo" class="form-control mr-sm-2 signUpInput" type="file" style="height:100%">

    	</div> 
		
		<div class="col-md-offset-5 col-md-2">
			<input class="btn btn-outline-success raleway button btnClickable" style="margin-top:20px;margin-bottom: 20px" type="submit" value="CREATE">
		</div>
		</form>
</div>


<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'addinfo' );
    </script>
</body>

</html>
