<?php
require_once "nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
</head>
<div class="header-div">
    <img alt="header" class="img-fluid w-100 header-img" src="img/header6.jpg">
</div>

<div class="contact_form fluid">
    <div class="wrapper contact_form_inner">
        <h2>Vul uw gegevens in.</h2>
        <form action="" method="post">
                <div class="form-group">
                    <label>naam</label>
                    <input type="text" name="naam" id="naam" class="form-control">
    </div>
            <div class="form-group">
                <label>achternaam</label>
                <input type="text" name="achternaam" id="achternaam" class="form-control">
            </div>
            <div class="form-group">
                <label>Emailadres</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label>adres</label>
                <input type="text" name="adres" id="adres" class="form-control">
            </div>
            <div class="form-group">
                <label>postcode</label>
                <input type="text" name="postcode" id="postcode" class="form-control">
            </div>
            <div class="form-group">
                <label>Bericht</label>
                <input type="text" name="bericht" id="bericht" class="form-control">
            </div>
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Verzenden">
        </div>
</div>


<?php
require_once "footer.php";
?>
