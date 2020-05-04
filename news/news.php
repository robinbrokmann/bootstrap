<?php
require_once "nav.php";
require "functions.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Nieuws</title>

    </head>
    <div class="header-div">
        <img alt="header" class="img-fluid w-100 header-img" src="../img/header7.jpg">

    </div>
    <div class="nieuws-nav container-fluid w-100 row">
        <a class="nav-link text-reset" href="news.php">Overzicht</a>
        <a class="nav-link text-reset" href="news.php?categorie=muziek">Muziek <span
                    class="badge badge-secondary">3</span></a>
        <a class="nav-link text-reset" href="news.php?categorie=tour">Tour en Shows <span class="badge badge-secondary">3</span></a>
        <a class="nav-link text-reset" href="news.php?categorie=anders">Anders <span
                    class="badge badge-secondary">3</span></a>
    </div>
<?php


if (empty($_GET)) {
    getMuziekContent();
    getTourContent();
    getAndersContent();
} else {
    if (isset($_GET['categorie'])) {
        switch ($_GET['categorie']) {
            case "muziek":
                getMuziekContent();
                break;
            case "tour":
                getTourContent();
                break;

            case "anders":
                getAndersContent();
                break;
        }
    } else {
        switch ($_GET['bericht']) {
            case 1;
                getContent1();
                break;

            case 2;
                getContent2();
                break;

            case 3;
                getContent3();
                break;

            case 4;
                getContent4();
                break;

            case 5;
                getContent5();
                break;

            case 6;
                getContent6();
                break;

            case 7;
                getContent7();
                break;
            case 8;
                getContent8();
                break;
            case 9;
                getContent9();
                break;
        }
    }
}

require_once "footer.php";
?>