<!DOCTYPE html>
<html lang="en">
@include('layout.head')
@include('logged.layout.headerL')
<body>
<div class="container col-md-offset-1 col-md-10">
    @include('layout.searchbar');

    <div class="container col-md-8 raleway">
        <h1>{{$association->name}}</h1> <br>
        <div style="text-align: justify;">
            <p>
                {{$association->description}}
            </p>
        </div>
    </div>
    <div class="container col-md-4">
        <div class="row col-md-offset-2 col-md-8">
            <button class="btn btn-outline-success raleway button btnClickable" style="margin-top:45px" type="submit">CREATE NEW EVENT</button>
        </div>

        <div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
            <span class="raleway"> Association name </span>
        </div>
        <div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
            <span class="orangeText raleway"> {{$association->email}} </span>
        </div>

        <div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
            <a href="{{ $association->link_two }}"><img src="{{ asset('img/facebookIcon.png') }}" style="width:15%"></a>
            <!--<a><img src="{{ asset('img/instagramIcon.png') }}" style="width:15%; margin-left: 15px"></a>-->
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