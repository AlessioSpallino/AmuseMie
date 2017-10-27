<!DOCTYPE html>
<html lang="en">
@include('layout.head');
@include('layout.header');

<body>
<div class="container col-md-offset-1 col-md-10">
    @include('layout.searchbar');
    <div class="row col-md-12 align">
        <a href="">
            <div class="col-md-3 align boxLink">
                <img class="col-md-12"  style="padding:0px" src="Picture/EventDefault.png">
                <div style="padding-left:6%;">
                    <p class="text raleway"> time </p>
                    <p class="text raleway"> <b> TITLE</b></p>
                    <p class="text raleway"> Location </p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="col-md-3 align boxLink">
                <img class="col-md-12"  style="padding:0px" src="Picture/EventDefault.png">
                <div style="padding-left:6%;">
                    <p class="text raleway"> time </p>
                    <p class="text raleway"> <b> TITLE </b></p>
                    <p class="text raleway"> Location </p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="col-md-3 align boxLink">
                <img class="col-md-12"  style="padding:0px" src="Picture/EventDefault.png">
                <div style="padding-left:6%;">
                    <p class="text raleway"> time </p>
                    <p class="text raleway"> <b> TITLE </b></p>
                    <p class="text raleway"> Location </p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="col-md-3 align boxLink">
                <img class="col-md-12"  style="padding:0px" src="Picture/EventDefault.png">
                <div style="padding-left:6%;">
                    <p class="text raleway"> time </p>
                    <p class="text raleway"> <b> TITLE </b></p>
                    <p class="text raleway"> Location </p>
                </div>
            </div>
        </a>
    </div>
    <div class="row col-md-12 align">
        <a href="">
            <div class="col-md-3 align boxLink">
                <img class="col-md-12"  style="padding:0px" src="Picture/EventDefault.png">
                <div style="padding-left:6%;">
                    <p class="text raleway"> time </p>
                    <p class="text raleway"> <b>TITLE </b></p>
                    <p class="text raleway"> Location </p>
                </div>
            </div>
        </a>
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