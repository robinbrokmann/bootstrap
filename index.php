<?php
require_once "nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>

<div class="header-div">
    <img alt="header" class="img-fluid w-100 header-img" src="img/header.jpg">
</div>

<div class="container-fluid text1  w-100">
    <div class="row">
        <div class="col-sm-12 ">
            <br>
            <h2> Welkom </h2>
            <br>
            <p>Sabaton is een Zweedse Powermetal band met teksten over historische gebeurtenissen<br>
                De Band is begonnen in 1999 in hun thuisstad Falun.<br>
                inmiddels is de band een van de grootste Powermetal bands binnen Europa en heeft zelfs een eigen festival en Cruise.
            </p>
        </div>
    </div>
</div>
<div id="carouselControls" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/impressie1.jpg" class="img-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/impressie2.jpg" class="img-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/impressie3.jpg" class="img-fluid"  alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/impressie4.jpg" class="img-fluid"  alt="...">
        </div>

    </div>
    <div class="buttons">
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <i class="far fa-arrow-alt-circle-left"></i>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <i class="far fa-arrow-alt-circle-right"></i>
        </a>
    </div>
</div>
<?php
require_once "footer.php";
?>
</body>
</html>