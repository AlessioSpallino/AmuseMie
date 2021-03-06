<!DOCTYPE html>
<html>

@include('layout.head')
	 
    <body>
		<div class="container raleway" style="text-align:center">
		<form action="{{ route('signup') }}" method="POST">
			{{ csrf_field() }}
			<h1 style="padding-bottom:20px">SIGN UP TO</h1>
			<h2 style="padding-bottom:20px">{{ $event->title }}</h2>
			
			<div class="textSignUp">Name:</div>
			<div>
				<input name="val1" class="form-control mr-sm-2 signUpInput" type="text" placeholder="Pretext" value="{{ Auth::user()->name }}" aria-label="Pretext">
			</div>
			<div class="textSignUp">Email:</div>
			<div>
				<input name="val2" class="form-control mr-sm-2 signUpInput" type="text" placeholder="Pretext" value="{{ Auth::user()->email }}" aria-label="Pretext">
			</div>
			
			<div class="textSignUp">Allergies:</div>
			<div>
				<input name="val3" class="form-control mr-sm-2 signUpInput" type="text"  value="{{ Auth::user()->allergies }}" aria-label="Pretext">
			</div>
			<div>
				<input name="val4" class="form-control mr-sm-2 signUpInput" type="hidden" placeholder="Pretext" value="{{ $event->id }}" aria-label="Pretext">
			</div>

			<!--<div class="textSignUp">Additional information you think we need to know:</div> 

			</br>



				<textarea class="form-control" id="addinfo"></textarea>

			</div> -->



			<div class="col-md-offset-5 col-md-2">
				<input class="btn btn-outline-success raleway button btnClickable" style="margin-top:20px" type="submit" value="SIGN UP">
			</div>

		</div>
		</form>


	<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'addinfo' );
    </script>

	</body>

</html>

