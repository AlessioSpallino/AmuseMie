	<!DOCTYPE html>
<html>

@include('layout.head')
	 
    <body>
		<div class="container raleway" style="text-align:center">
		<form action="XXX.php">
			<h1 style="padding-bottom:20px"> SIGN UP TO EVENT X</h1>
			
			<div class="textSignUp">Name:</div>
			<div>
				<input class="form-control mr-sm-2 signUpInput" type="text" placeholder="Pretext" aria-label="Pretext">
			</div>
			<div class="textSignUp">Email:</div>
			<div>
				<input class="form-control mr-sm-2 signUpInput" type="text" placeholder="Pretext" aria-label="Pretext">
			</div>
			<div class="textSignUp">Allergies and additional information</div>
			<div>
				<input class="form-control mr-sm-2 signUpInput signUpInputAdditional" type="text" placeholder="Write your description here" aria-label="Write your description here">
			</div>
			<div class="col-md-offset-5 col-md-2">
				<input class="btn btn-outline-success raleway button btnClickable" style="margin-top:20px" type="submit" value="SIGN UP">
			</div>

		</div>
		</form>
	</body>

</html>
