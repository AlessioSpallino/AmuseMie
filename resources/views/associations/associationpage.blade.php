<!DOCTYPE html>
<html lang="en">
@include('layout.head')
@include('layout.header')
<body>
<div class="container col-md-offset-1 col-md-10">
    @include('layout.searchbar');

    <div class="container col-md-8 raleway">
        <h1>{{$association->name}}</h1> <br>
        <div style="text-align: justify;">
            <p>
                {!! html_entity_decode($association->description) !!}
            </p>
        </div>
    </div>
    <div class="container col-md-4">


        <div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
            <span class="raleway"> {{$association->address}} </span>
        </div>
        <div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
            <span class="orangeText raleway"> {{$association->email}} </span>
        </div>

        <div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
            <a href="{{ $association->link_two }}"><img src="{{ asset('img/facebookIcon.png') }}" style="width:15%"></a>
            <a href="{{ $association->link_three }}"><img src="{{ asset('img/instagramIcon.png') }}" style="width:15%; margin-left: 15px"></a>
            <a href="{{ $association->link_one }}"><img src="{{ asset('img/webIcon.png') }}" style="width:15%; margin-left: 15px"></a>

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