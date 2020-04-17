<?php
require_once "nav.php";
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
        <a class="nav-link text-reset" href="news.php">Overzicht <span class="badge badge-secondary">3</span</a>
        <a class="nav-link text-reset" href="news.php?categorie=muziek">Muziek <span class="badge badge-secondary">3</span</a>
        <a class="nav-link text-reset" href="news.php?categorie=tour">Tour en Shows <span class="badge badge-secondary">3</span</a>
        <a class="nav-link text-reset" href="news.php?categorie=anders">Anders</a>
    </div>
<div class="container-fluid">

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

        function getMuziekContent(){
        ?>
        <div class='row'>
            <div class='w-100 col-sm-8 categorie'>
                <div class='categorie-banner'>
                    <h2>Muziek</h2>
                <p>3 Berichten</p>
                </div>
                <img class='music-news w-100' src='news-img/1.jpg'>
                <a class='nav-link text-reset' href='news.php?bericht=1'>New cinematic video for Seven Pillars of
                    Wisdom</a>
                <a class='nav-link text-reset' href='news.php?bericht=2'>Sabaton & Apocalyptica release single Angels
                    Calling</a>
                <a class='nav-link text-reset' href='news.php?bericht=3'>“The Great War” released – Listen to the new
                    album now</a>
            </div>
        </div>
    </div>
    <?php }
    function getAndersContent(){
    ?>
        <div class='col-sm-8 categorie'>
            <div class='categorie-banner'>
                <h2>Anders</h2>
            <p>3 Berichten</p>
            </div>
            <img class='w-100 music-news' src='news-img/4-1.jpg'>
            <a class='nav-link text-reset' href='news.php?bericht=4'>Sabaton involved in a car crash</a>
            <a class='nav-link text-reset' href='news.php?bericht=5'>New Sabaton board game: Long Live The King</a>
            <a class='nav-link text-reset' href='news.php?bericht=6'>Sabaton announce new partnership with SABIAN cymbals</a>
        </div>

<?php }
function getTourContent(){
?>
    <div class='col-sm-8 categorie'>
        <div class='categorie-banner'>
            <h2>Tour en Shows</h2>
        <p>3 Berichten</p>
        </div>
        <img class='music-news w-100' src='news-img/7.jpg'>
        <a class='nav-link text-reset' href='news.php?bericht=7'>Introducing: THE GREAT SATURDAY!</a>
        <a class='nav-link text-reset' href='news.php?bericht=8'>Vlog Episode 8 – The Great Tour 2020 – Gothenburg, Stockholm, Oslo</a>
        <a class='nav-link text-reset' href='news.php?bericht=9'>Vlog Episode 7 – The Great Tour 2020 – Hamburg, Copenhagen</a>
    </div>

<?php }
function getContent1(){
?>
    <div class='col-sm-8 categorie'>
        <div class='categorie-banner'>
            <h2>New cinematic video for Seven Pillars of
                Wisdom</h2>
        </div>
        <div class="container-fluid">
        <img class="w-100" src='news-img/1.jpg'>
        </div>
        <h4>We are proud to unleash the new cinematic music video for our song SEVEN PILLARS OF WISDOM, filmed under difficult circumstances in the Sahara desert.</h4>
        <p>You can watch the video below</p>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eaW76aDKObk" ></iframe>
        </div>
        <p>The song deals with the topic of the British archaeologist, diplomat and officer T.E Lawrence and his adventures during the Great War where he convinces local rebels to join him on a sabotage mission against the Ottoman Empire.<br>

            A lot of technical equipment, cars and generators broke down in the heat of the sun, not to mention the treacherous sandstorms that constantly haunted the recordings.<br> On top of that, we were also involved in a serious car accident.<br>

            Despite all the difficulties faced, we were able to produce the video in the way we visualized and can now proudly reveal it.<br>

            Starring in the video as the main character is the Swedish American actor Indy Neidell who is also the host of the Sabaton History Channel.<br>

            The video was directed by the Tunisian filmmaker Mehdi Jouni.</p>

        <div id="carouselControls" class="carousel slide">
            <div class="carouselnews carousel-inner">
                <div class="carousel-item active">
                    <img src="news-img/1-1.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/1-2.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/1-3.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/1-4.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/1-5.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/1-6.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/1-7.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/1-8.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/1-9.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/1-10.jpg" class="img-fluid" alt="...">
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
</div>

<?php } function getContent2(){
    ?>
    <div class='col-sm-8 categorie'>
        <div class='categorie-banner'>
            <h2>Sabaton & Apocalyptica release single Angels Calling</h2>
        </div>
        <div class="container-fluid">
            <img class="w-100" src='news-img/2.jpg'>
        </div>
        <h4>The official video is out now on YouTube!</h4>
        <p>We are proud to present another musical collaboration between Sabaton and the finnish cello rock band Apocalyptica after the success with Fields of Verdun.<br>
 With the ANGELS CALLING single release, we also give our fans a good taste of what to expect on the European tour.<br>

You can watch the video below</p>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JyZ8wKTaHRk" ></iframe>
        </div>
        <p>Anyone who will attend the upcoming concerts will experience a truly unique live show as Sabaton will be reinforced by Apocalyptica on stage for several newly arranged songs, including ANGELS CALLING.<br>

ANGELS CALLING was the first song we wrote on the topic of World War 1 for the ATTERO DOMINATUS album back in 2006, and together with Apocalyptica we have really given the song a new life. <br>
Due to the song’s topic, our recent album, the upcoming tour and a great demand from fans, the song is now back on the setlist for the tour.<br>

The song´s arrangement was made in August, when Apocalyptica visited our hometown Falun to perform at the Sabaton Open Air festival. <br>
It was recorded in Black Lounge studios by Jonas Kjellgren and the Apocalyptica parts were later recorded in Finland.<br>

Richard Erixon, our long time video producer, captured the best moments from the rehearsals in Falun and edited it into a music video for the song.</p>


<?php }
        function getContent3(){
    ?>
    <div class='col-sm-8 categorie'>
        <div class='categorie-banner'>
            <h2>“The Great War” released – Listen to the new album now</h2>
        </div>
        <div class="container-fluid">
            <img class="w-100" src='news-img/3.jpg'>
        </div>
        <h4>NEW ALBUM THE GREAT WAR IS OUT NOW!</h4>
        <p>The long wait is finally over!<br>
Our new album The Great War has just been released to all streaming and digital music platforms and you can listen to it now.<br>
<br>
To celebrate the occasion, we are also releasing a stunning new lyric video for the song ‘82nd All The Way‘.<br>
The lyric video will premiere on YouTube on Saturday 20th July at 20.00 CEST.
<br>
<br>
Pär states: “We felt instantly when we had recorded the album that the song ’82nd All the Way’ was one of the absolutely strongest songs.<br>
 It’s why we selected this song to be representing the album release.<br>
 It’s fun to play, fun to listen to and for sure it will be a part of the setlist for upcoming shows for a very long time.”<br>
<br>
You can now watch the video below</p>

 <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0LS0Z8fgiII" ></iframe>
        </div>



<?php }
               function getContent4(){
    ?>
    <div class='col-sm-8 categorie'>
        <div class='categorie-banner'>
            <h2>Sabaton involved in a car crash</h2>
        </div>
        <div class="container-fluid">
            <img class="w-100" src='news-img/4-1.jpg'>
        </div>
        <p> Two days ago in Tunisia we were involved in a serious traffic incident upon our return from a video shoot in the Sahara desert.<br>

We are all broken, badly beaten, bleeding and stitched up, but happy to be alive and confident that we will be fully recovered over time.<br>

However, after consulting medical expertise and evaluating all our injuries we are sure that we cannot do the scheduled concert in Poland today without risk of consequential injuries.<br>

We will be back with full force in October for the North American tour and will return to Gdansk as soon as possible.<br>

Until then we would like to share a few of our private images from the filming in Sahara and the accident.<br>

Thanks for understanding /The Band.</p>



 <div id="carouselControls" class="carousel slide">
            <div class="carouselnews carousel-inner">
                <div class="carousel-item active">
                    <img src="news-img/4.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/4-2.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/4-3.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/4-4.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/4-5.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/4-6.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/4-7.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/4-8.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/4-9.jpg" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="news-img/4-10.jpg" class="img-fluid" alt="...">
                </div>
            <div class="carousel-item">
                    <img src="news-img/4-11.jpg" class="img-fluid" alt="...">
                </div>
            <div class="carousel-item">
                    <img src="news-img/4-12.jpg" class="img-fluid" alt="...">
                </div>
            <div class="carousel-item">
                    <img src="news-img/4-13.jpg" class="img-fluid" alt="...">
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





<?php }

               function getContent5(){
    ?>
    <div class='col-sm-8 categorie'>
        <div class='categorie-banner'>
            <h2>New Sabaton board game: Long Live The King </h2>
        </div>
        <div class="container-fluid">
            <img class="w-100" src='news-img/5.jpg'>
        </div>
    <h4>GAMERS OF THE WORLD!</h4>
        <p>
Do you like board games? We have just released our own online board game and we want you to give it a try.<br>

Conquer and expand the Swedish Empire, and become a hero.<br>

The best part? It is 100% free!<br>

You play the game by visiting https://game.sabaton.net or by clicking the Play button below.<br>
</p>
<a class="button-play btn" href="https://game.sabaton.net">Play</a>


<?php }

               function getContent6(){
    ?>
    <div class='col-sm-8 categorie'>
        <div class='categorie-banner'>
            <h2>Sabaton announce new partnership with SABIAN cymbals</h2>
        </div>
        <div class="container-fluid">
            <img class="w-100" src='news-img/6.jpg'>
        </div>
          <p>The famous tank drum-riser is finally complete as Sabaton has teamed up with leading cymbal makers SABIAN.<br>
            <br>

The brand is now official partner of Sabaton drummer Hannes Van Dahl, who is excited to be a part of the global “SABIAN family”.<br>

Hannes said: “Many of my favourite drummers and idols, since I was a young boy, play SABIAN cymbals and I’ve always been a fan of how SABIAN cymbals sound and look.<br>
 Just like my band, they take pride in their craft.<br>
              <br>

“I can now feel – but most importantly hear – that what I have in front of me sitting on my drum throne, is complete.<br> It’s such a great feeling.<br>

“I’m very grateful and happy to be part of the SABIAN family and I can’t wait to bring these fantastic cymbals to rehearsals, into the studio and to play them live all over the world so you guys can hear just how amazing they sound!”<br>
<br>
SABIAN, founded in 1981 by cymbal-making legend Robert Zildjian, is an iconic industry brand and offers the biggest range of designs and options to help drummers create their perfect kit, with an emphasis on creating the right sound every time.<br>

While the brand has a presence in 120 countries and exports products around the globe, its HQ is still in the SABIAN family’s original home of New Brunswick, Canada. <br> To learn more, visit the SABIAN website.</p>
<?php }

             function getContent7(){
    ?>
    <div class='col-sm-8 categorie'>
        <div class='categorie-banner'>
            <h2>Introducing: THE GREAT SATURDAY!</h2>
        </div>
        <div class="container-fluid">
            <img class="w-100" src='news-img/7.jpg'>
        </div>
        <p>Starting this week and for the next 6 months, join us on our YouTube channel every Saturday @ 8:00pm CET for a new music video premiere.<br>

We have filmed every song performed during The Great Tour in Europe 2020 from different concerts across all countries.<br>

All the videos were filmed via a unique camera angle from the stage and the audio has been mixed by Jonas Kjellgren who also mixed The Great War.<br>

It’s time to re-live The Great Tour!</p>


<?php }
                 function getContent8(){
    ?>
    <div class='col-sm-8 categorie'>
        <div class='categorie-banner'>
            <h2>Vlog Episode 8 – The Great Tour 2020 – Gothenburg, Stockholm, Oslo</h2>
        </div>
        <div class="container-fluid">
            <img class="w-100" src='news-img/8.jpg'>
        </div>
        <p> In Episode 1 of The Great Tour Vlog, Sabaton visit Zurich, Stuttgart and Munich as part of the European tour.<br>
Watch what happened behind the scenes, including Joakim’s iconic six-pack underwear shot…

Watch the episode below</p>

<div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gnrcHGbzUj4" ></iframe>
        </div>

<?php }
                     function getContent9(){
    ?>
    <div class='col-sm-8 categorie'>
        <div class='categorie-banner'>
            <h2>Vlog Episode 7 – The Great Tour 2020 – Hamburg, Copenhagen</h2>
        </div>
        <div class="container-fluid">
            <img class="w-100" src='news-img/9.jpg'>
        </div>
        <p>In Episode 7 of The Great Tour vlogs Joakim, Par, Hannes, Tommy and Chris all sit down individually and tell us how they started their music journey..<br>
 And this is just a sneak peek of what is coming later.<br>
 Plus, Tommy decided to show us his badminton skills! <br>
 Thank you Hamburg and Copenhagen for the unforgettable shows!

Watch the episode below</p>

<div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pqP3L8WaQ8A" ></iframe>
        </div>

<?php }?>
</div>
<?php
require_once "footer.php";
?>