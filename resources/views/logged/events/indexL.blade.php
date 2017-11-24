<!DOCTYPE html>
<html>

@include('layout.head')
@include('logged.layout.headerL')
    <body>
	<div class="container col-md-offset-1 col-md-10">
		

		@include('layout.searchbar')
		
		
		<div class="row col-md-12 align">

			@foreach($events as $event) 

			<a href="/eventpagel/{{ $event->id }}">
				<div class="col-md-3 align boxLink">
					<img class="col-md-12"  style="padding:0px" src="{{ asset('img/imgeve.png') }}">
					<div style="padding-left:6%;">
						<h4 class="text raleway"> {{ $event->title }} </h4>
						<p class="text raleway"> <b> {{ $event->eventdate }} </b></p>
						<p class="text raleway"> {{ $event->address }} </p>
					</div>
				</div>
			</a>

			@endforeach


		
		</div>

		{!! $events->links() !!}

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
