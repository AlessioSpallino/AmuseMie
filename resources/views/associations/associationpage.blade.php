<!DOCTYPE html>
<html lang="en">
@include('layout.head')
@include('layout.header')
<body>
<div class="container col-md-offset-1 col-md-10">
    @include('layout.searchbar');

    <div class="container col-md-8 raleway">
        <h1>Association name </h1> <br>
        <div style="text-align: justify;">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non tempus justo. Phasellus semper maximus urna, non scelerisque libero sodales et. Phasellus semper maximus gravida. Curabitur sagittis, augue sit amet feugiat vulputate, diam erat convallis tortor, vitae dignissim purus est eget risus. Etiam faucibus orci non purus dictum, nec tristique sapien tincidunt. Curabitur aliquam eu neque eu ornare. Morbi iaculis erat ac posuere mattis. Pellentesque mollis condimentum dui, vitae porttitor ligula tincidunt non.
            </p>
            <p>
                Pellentesque ut condimentum nulla, quis dapibus tellus. Suspendisse interdum, ante quis ultrices tincidunt, magna mauris efficitur quam, at suscipit dolor dui non risus. Quisque tincidunt turpis nec interdum tempus. Proin nunc sem, dapibus et dapibus eu, ornare id ipsum. Vestibulum posuere nisi a vulputate finibus. Nunc eget tortor nisi. Pellentesque vel tincidunt orci. Aliquam erat volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec feugiat tellus tellus, in lobortis lorem pharetra eget. Sed rhoncus lobortis velit. Etiam accumsan velit velit, at consectetur urna blandit eu. Nulla sed iaculis ipsum. Vivamus commodo sem a arcu dapibus mattis.
            </p>
        </div>
    </div>
    <div class="container col-md-4">
        <div class="row col-md-offset-2 col-md-8">
            <button class="btn btn-outline-success raleway button btnClickable" style="margin-top:45px" type="submit">CREATE NEW EVENT</button>
        </div>
        <div class="row col-md-offset-2 col-md-8">
            <button class="btn btn-outline-success raleway button btnClickable" style="margin-top:20px" type="submit">UPDATE INFO</button>
        </div>

        <div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
            <span class="raleway"> Association name </span>
        </div>
        <div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
            <span class="orangeText raleway"> association-email@aalto.fi </span>
        </div>

        <div class="row col-md-offset-3 col-md-8" style="margin-top:30px">
            <img src="Picture/facebookIcon.png" style="width:15%">
            <img src="Picture/instagramIcon.png" style="width:15%; margin-left: 15px">
            <img src="Picture/webIcon.png" style="width:15%; margin-left: 15px">

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