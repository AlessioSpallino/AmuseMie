<!DOCTYPE html>
<html>

@include('layout.head')
@include('layout.header')
    <body>
	<div class="container col-md-offset-1 col-md-10">
		

		@include('layout.searchbar')
		
		
		<div class="row col-md-12 align">

			@foreach($events as $event) 

			<a href="/eventpage/{{ $event->id }}">
				<div class="col-md-3 align boxLink">
                <img class="col-md-12" width="100" height="250" style="padding:0px" src="{{asset('evePicture/'.$event->logo)}}">
					<div style="padding-left:6%;">
						<h4 class="text raleway"> <b> {{ $event->title }} </b></h4>
						<p class="text raleway"> {{ $event->eventdate }} </p>
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
