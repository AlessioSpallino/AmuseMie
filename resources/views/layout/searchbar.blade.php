<div class="row col-md-12 align picSearchDiv">	
			<img class="col-md-12 align picSearch" src="{{ asset('img/cropedSoccer.png') }}">
			@if (@isset($type) && $type=='event')
				<span class="overPic"> EVENTS </span>
			@endif
			@if (@isset($type) && $type=='association')
				<span class="overPic"> ASSOCIATIONS </span>
			@endif
			<!-- add event or association name in the same way -->

</div>
<div class="row col-md-12 align" style="padding-bottom:50px">	
			<div class="dropdown col-md-3 align">

				<button class="btn btn-secondary dropdown-toggle col-md-12 raleway searchElement" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >
				LOCATION
				<span class="caret"></span>
			  </button>


			  <ul class="dropdown-menu col-md-12" aria-labelledby="dropdownMenu1">
				<li><a id="helsinki" href="#" onclick="changeLocation('Helsinki')">Helsinki</a></li>
				<li class="divider"></li> 
				<li><a id="otaniemi" href="#" onclick="changeLocation('Otaniemi')">Otaniemi</a></li>
				<li class="divider"></li> 
				<li><a id="espoo" href="#" onclick="changeLocation('Espoo')">Espoo</a></li>
			  </ul>
			</div>
			<div class="dropdown col-md-3 align sideBorder" >

				<button class="btn btn-secondary dropdown-toggle col-md-12 raleway searchElement" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				EVENT TYPE
				<span class="caret"></span>
			  </button>

			  <ul class="dropdown-menu col-md-12" aria-labelledby="dropdownMenu2">
				<li><a id="sport" href="#" onclick="changeType('Sport')" >Sport</a></li>
				<li class="divider"></li> 
				<li><a id="musique" href="#" onclick="changeType('Musique')">Musique</a></li>
				<li class="divider"></li> 
				<li><a id="outdoor" href="#" onclick="changeType('Outdoor')">Outdoor</a></li>
				<li class="divider"></li> 
				<li><a id="cultural" href="#" onclick="changeType('Cultural')">Cultural</a></li>
				<li class="divider"></li> 
				<li><a id="other" href="#" onclick="changeType('Other')">Other</a></li>
			  </ul>
			</div>
			<form class="form-inline col-md-6 align" >

				<!-- Write here in order to search something -->
				<img class="col-md-1 searchPic searchElement" src="{{ asset('img/magGlass.png') }}">
				{!! Form::open(['method'=>'GET','url'=>'/','role'=>'search']) !!}
				<input id="search" name ="search" class="form-control mr-sm-2 col-md-5 input raleway searchElement"  style="width:70%; border-radius:0; height:34px; border:none" type="text" placeholder="Search for events" aria-label="Search for events">

				<button class="btn btn-outline-success my-2 my-sm-0 raleway searchElement" style="width:20%; border-radius:0; height:34px; background-color:#ff9931;" type="submit">SEARCH</button>
				{!! Form::close() !!}

			</form>
</div>

<script>function changeLocation(loc){
        document.getElementById("dropdownMenu1").innerHTML= loc;
    }

</script>
<script>function changeType(typee){
        document.getElementById("dropdownMenu2").innerHTML=typee;
    }

</script>