<!DOCTYPE html>
<html>

@include('layout.head')
@include('logged.layout.headerL')
    <body>
	<div class="container col-md-offset-1 col-md-10">
		
		@include('layout.searchbar');
		<div class="container col-md-12 raleway succes" style="display:none">
			<span class="textCentered"> SUCCESSFUL! </span>
		</div>
		<div class="container col-md-8 raleway">
			<h1 class="title"> 
				{{$event->title}}
			</h1> <br>
			<div style="text-align: justify;">
				<p>
					{!! html_entity_decode($event->description) !!}
				</p>
				
			</div>
			<br>
			<br>
			<div style="text-align: justify;" class="title">
				 <h1>ATTENDING </h1>
			</div>
			 <table class="row col-md-offset-0 col-md-12" style="border-collapse: collapse;">
			  <tr>
				<th class="col-md-3 align" >Name</th>
				<th class="col-md-6 align">Email</th>
				<th class="col-md-6 align">Allergies and additional information</th>
			  </tr>
			  
			  <tr>
				 <td colspan="3"><hr/></td> <!-- that is for the line -->
				</tr>

				@foreach($participants as $p)

				  <tr>
					<td class="col-md-3 align" >{{ $p->name }}</td>
					<td class="col-md-3 align" >{{ $p->email }}</td>
					<td class="col-md-3 align" >{{ $p->allergies }}</td>
				  </tr>
				   
					<tr>
					 <td colspan="3"><hr/></td>
					</tr>

				@endforeach
			  
			</table>
			
		</div>
		<div class="container col-md-4">
			<div class="row col-md-offset-2 col-md-8">
					<a href="/eventpagel/signup/{{ $event->id }}"><button class="btn btn-outline-success raleway button btnClickable" style="margin-top:45px" type="submit">SIGN UP</button></a>

			</div>
			
			<div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
					<img src="{{ asset('img/ByIcon.png') }}" style="width:10%">
					<span class="orangeText raleway" style="padding-left:15px"> ASSOCIATION </span>
			</div>
			<div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
					<img src="{{ asset('img/clockIcon.png') }}" style="width:10%">
					<span class="raleway" style="padding-left:15px"> {{$event->eventdate}} </span>
			</div>
	
			<div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
					<img src="{{ asset('img/locationIcon.png') }}" style="width:10%">
					<span class="orangeText raleway" style="padding-left:15px"> {{$event->address}} </span>
			</div>
			<div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
					<img src="{{ asset('img/ticketIcon.png') }}" style="width:10%">
					<span class="raleway" style="padding-left:15px"> {{$event->price}} </span>
					
			</div>
			<!-- <div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
					<img src="{{ asset('img/registeredUser.png') }}" style="width:10%">
					<span class=" raleway" style="padding-left:15px"> 3/15 </span>
			</div> -->
			<div class="row col-md-offset-3 col-md-9" style="margin-top:30px">
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
