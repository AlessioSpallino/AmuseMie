<header>
	<div class="container col-md-offset-1 col-md-10 header">
		<div class="row col-md-12 align" >	
			<a style="color: #000;" href="/"><div class="col-md-2 logo">
				 AmuseMie 
			</div></a>
			<div class="col-md-1 menu">
			 @if (@isset($type) && $type=='event')
				 <a href="/" class="text"><b> EVENTS </b> </a>
			 @else
				 <a href="/" class="text"> EVENTS  </a>
			 @endif				 
			</div>
			<div class="col-md-1 menu">

			 @if (@isset($type) && $type=='association')
				<a href="/associations/" class="text"> <b>ASSOCIATIONS</b> </a>
			 @else
				 <a href="/associations/" class="text"> ASSOCIATIONS </a>
			 @endif
			 
			</div>
			<div class="col-md-offset-7  col-md-1 headerLink align menu">
				 <a href="/login/" class="text">LOG IN</a>
			</div>
			<!-- <div class="col-md-1 headerLink align menu">
				 <a href="#" class="text">SIGN IN</a> 
			</div> -->
		</div>
	</div>
</header>

            
