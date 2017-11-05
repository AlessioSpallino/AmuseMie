<!DOCTYPE html>
<html>

@include('layout.head')
@include('layout.header')
    <body>
	<div class="container col-md-offset-1 col-md-10">
		
		@include('layout.searchbar');
		
		<div class="container col-md-8 raleway">
			<h1> 
				{{$event->title}}
			</h1> <br>
			<div style="text-align: justify;">
				<p>
					{{$event->description}}
				</p>
				
			</div>
		</div>
		<div class="container col-md-4">
			<div class="row col-md-offset-2 col-md-8">
					<button class="btn btn-outline-success raleway button btnUnclickable" style="margin-top:45px" type="submit">SIGNED UP</button>
			</div>
			<div class="row col-md-offset-2 col-md-8">
					<button class="btn btn-outline-success raleway button btnClickable" style="margin-top:20px" type="submit">UPDATE INFO</button>
			</div>
			
			<div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
					<img src="{{ asset('img/byIcon.png') }}" style="width:10%">
					<span class="orangeText raleway" style="padding-left:15px"> ASSOCIATION </span>
			</div>
			<div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
					<img src="{{ asset('img/clockIcon.png') }}" style="width:10%">
					<span class="raleway" style="padding-left:15px"> 00:00 00.00.0000 </span>
			</div>
	
			<div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
					<img src="{{ asset('img/locationIcon.png') }}" style="width:10%">
					<span class="orangeText raleway" style="padding-left:15px"> {{$event->address}} </span>
			</div>
			<div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
					<img src="{{ asset('img/ticketIcon.png') }}" style="width:10%">
					<span class="raleway" style="padding-left:15px"> {{$event->price}} </span>
					<span class="raleway" style="padding-left:15px"> euro </span>
			</div>
			<div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
					<img src="{{ asset('img/calendarIcon.png') }}" style="width:10%">
					<span class="orangeText raleway" style="padding-left:15px"> ADD TO YOUR CALENDAR </span>
			</div>
			
		</div>
		
	</div>
	
	<script>
$(function(){
  $("#header").load("header.html"); 
  $("#filterBar").load("filterBar.html");
});
 
</script>
	
	
	
	</body>

</html>
