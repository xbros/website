<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simon music</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <?php include("include/in_header.html"); ?>
    <link rel="stylesheet" href="simon.css">
    <link rel="stylesheet" href="audio-player.css">


</head>
<body>
<?php include("include/before_body.html"); ?>

<div class="container">
    <h1>Simon music</h1>

    <a class="btn btn-default quatre" href="https://soundcloud.com/simon-todeschini" onclick="writeActionBdd('link', 'soundcloud', '')" target="_blank"><i class="fa fa-soundcloud quatre"></i> SoundCloud</a>
    <a class="btn btn-default quatre" href="https://www.paypal.me/SimonTodeschini/" onclick="writeActionBdd('link', 'paypal', '')" target="_blank"><i class="fa fa-paypal quatre"></i> SoundCloud</a>

    <h2>LE POULET</h2>
    <div class="player" name="le-poulet" path="2016-02-16_le-poulet"></div>

    <h2>BAD PHILOSOPHY LEAD</h2>
    <div class="player" name="bad-philosophy-lead" path="2016-02-04_bad-philosophy-lead"></div>

    <h2>REST ON THE CLIFF</h2>
    <div class="player" name="rest-on-the-cliff" path="2016-01-23_rest-on-the-cliff"></div>


    <h2>ACOUSTIC CHILLNESS</h2>
    <div class="player" name="acoustic-chillness" path="2016-01-07_acoustic-chillness"></div>


    <h2>FALLING LEAVES</h2>
    <div class="player" name="falling-leaves" path="2016-01-04_falling-leaves"></div>


    <h2>SPARKLES</h2>
    <div class="player" name="sparkles" path="2015-12-27_sparkles"></div>


    <h2>THE INTERROGATION</h2>
    <div class="player" name="the-interrogation" path="2015-12-14_the-interrogation"></div>


    <h2>TEMPLE'S DEMON</h2>
    <div class="player" name="temple-s-demon" path="2015-12-09_temple-s-demon"></div>


    <h2>STARE</h2>
    <div class="player" name="stare" path="2015-12-07_stare"></div>


    <h2>SWEEPS</h2>
    <div class="player" name="sweeps" path="2015-12-02_sweeps"></div>


    <h2>DEEP SHIT !</h2>
    <div class="player" name="deep-shit" path="2015-11-30_deep-shit"></div>


    <h2>1st_track</h2>
    <div class="player" name="st_track" path="2015-10-30_1st-track"></div>

    <script src="javascripts/audio-player.js" rel="script"></script>
    <script src="javascripts/write-action-bdd.js" rel="script"></script>

</div>

<div id="errors"></div>

<?php include("include/after_body.html"); ?>

</body>
</html>
