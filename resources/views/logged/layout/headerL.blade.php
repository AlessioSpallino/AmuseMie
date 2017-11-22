<header>
	<div class="container col-md-offset-1 col-md-10 header">
		<div class="row col-md-12 align" >	
			<a style="color: #000;" href="/l"><div class="col-md-2 logo">
				 AmuseMie 
			</div></a>
			<div class="col-md-1 eventMenu menu">
			 @if (@isset($type) && $type=='event')
				 <a href="/l/" class="text"><b> EVENTS </b> </a>
			 @else
				 <a href="/l/" class="text"> EVENTS  </a>
			 @endif
			</div>
			<div class="col-md-2 menu">
			 @if (@isset($type) && $type=='association')
				<a href="/associationsl/" class="text"> <b>ASSOCIATIONS</b> </a>
			 @else
				 <a href="/associationsl/" class="text"> ASSOCIATIONS </a>
			 @endif
			</div>
			<div class="col-md-2 menu">
				 <a href="#" class="text"> MY DASHBOARD</a>
			</div>
			
			<div class="dropdown col-md-offset-2  col-md-3 menu">
				<button class="dropdown-toggle col-md-12 raleway hiddenDropDown hiddenButton" type="button" id="dropdownMenuLogIn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				<span id="name">Molly</span>  
				<img class="logPic" src="">	
				<img style="width:20px" src="{{ asset('img/dot.png') }}">
			  </button>
			  <ul class="dropdown-menu col-md-12" aria-labelledby="dropdownMenu1">
				<li><a href="#">PROFILE</a></li>
				 <li class="divider"></li> 
				<li><a href="#">LOG OUT</a></li>
				 <li class="divider"></li> 
				<li><a href="#">ASSOCIATION 1</a></li>
				<li class="divider"></li> 
				<li><a href="#">ASSOCIATION 2</a></li>
				<li class="divider"></li> 
				<li><a href="#">CREATE NEW ASSOCIATION</a></li>
			  </ul>
			</div>
		</div>
	</div>
</header>
