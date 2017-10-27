<!DOCTYPE html>
<html>

@include('layout.head')
@include('layout.header')
    <body>
	<div class="container col-md-offset-1 col-md-10">
		

		@include('layout.searchbar');
		
		
		<div class="row col-md-12 align">

			@foreach($events as $event)

			<a href="/eventpage/{{ $event->id }}">
				<div class="col-md-3 align boxLink">
					<img class="col-md-12"  style="padding:0px" src="{{ asset('img/EventDefault.png') }}">
					<div style="padding-left:6%;">
						<p class="text raleway"> time </p>
						<p class="text raleway"> <b> {{ $event->body }} </b></p>
						<p class="text raleway"> Location </p>
					</div>
				</div>
			</a>

			@endforeach
			
		</div>	
	</div>
	
	<script>
$( ".boxLink" ).hover(
  function() {
    $( this ).children("img").toggleClass("boxLinkImage");
  }, function() {
    $( this ).children("img").toggleClass("boxLinkImage");
  }
);
 
</script>
	
	
	
	</body>

</html>
