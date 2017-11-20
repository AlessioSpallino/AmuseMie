<!DOCTYPE html>
<html>
@include('layout.head')
@include('logged.layout.headerL')

<body>
<div class="container col-md-offset-1 col-md-10">
    @include('layout.searchbar')
    <div class="row col-md-12 align">

        @foreach($associations as $association)

        <a href="/asspagel/{{ $association->id }}">
            <div class="col-md-3 align boxLink">
                <img class="col-md-12"  style="padding:0px" src="{{ asset('img/imgass.png') }}">
                <div style="padding-left:6%;">
                    <p class="text raleway"> <b> {{$association->name }} </b></p>
                    <p class="text raleway"> {{$association->address }}</p>
                    <p class="text raleway"> {{$association->email }} </p>
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

    $(function(){
        $("#header").load("header.html");
        $("#filterBar").load("filterBar.html");
    });

</script>



</body>

</html>
</html>