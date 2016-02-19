<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simon music</title>
    <script src="lib/jquery-1.11.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="lib/bootstrap-3.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="lib/bootstrap-3.3.1/js/bootstrap.min.js"></script>
    <script src="lib/bootstrap-3.3.1/shim/html5shiv.min.js"></script>
    <script src="lib/bootstrap-3.3.1/shim/respond.min.js"></script>


    <?php include("include/in_header.html"); ?>
    <link rel="stylesheet" href="simon.css">
    <link rel="stylesheet" href="audio-player.css">


</head>
<body>
<?php include("include/before_body.html"); ?>

<div class="container">
    <h1>Simon music</h1>

    <a class="btn btn-default quatre" href="https://soundcloud.com/simon-todeschini" onclick="writeActionBdd('link', 'soundcloud', '')" target="_blank"><i class="fa fa-soundcloud quatre"></i> SoundCloud</a>
    <a class="btn btn-default quatre" href="https://www.paypal.me/SimonTodeschini/" onclick="writeActionBdd('link', 'paypal', '')" target="_blank"><i class="fa fa-cc-paypal quatre"></i> Donation - PayPal</a>

    <h2>LE POULET</h2>
    <div class="player" name="le-poulet" path="2016-02-16_le-poulet" son="LE POULET"></div>
    <div class="multiple-buttons" id="buttons-le-poulet" soundcloud="https://soundcloud.com/simon-todeschini/le-poulet"></div>

    <h2>BAD PHILOSOPHY LEAD</h2>
    <div class="player" name="bad-philosophy-lead" path="2016-02-04_bad-philosophy-lead" son="BAD PHILOSOPHY LEAD"></div>
    <div class="multiple-buttons" id="buttons-bad-philosophy-lead" soundcloud="https://soundcloud.com/simon-todeschini/bad-philosophy-lead"></div>

    <h2>REST ON THE CLIFF</h2>
    <div class="player" name="rest-on-the-cliff" path="2016-01-23_rest-on-the-cliff" son="REST ON THE CLIFF"></div>
    <div class="multiple-buttons" id="buttons-rest-on-the-cliff" soundcloud="https://soundcloud.com/simon-todeschini/rest-on-the-cliff"></div>

    <h2>ACOUSTIC CHILLNESS</h2>
    <div class="player" name="acoustic-chillness" path="2016-01-07_acoustic-chillness" son="ACOUSTIC CHILLNESS"></div>
    <div class="multiple-buttons" id="buttons-acoustic-chillness" soundcloud="https://soundcloud.com/simon-todeschini/acoustic-chillness"></div>

    <h2>FALLING LEAVES</h2>
    <div class="player" name="falling-leaves" path="2016-01-04_falling-leaves" son="FALLING LEAVES"></div>
    <div class="multiple-buttons" id="buttons-falling-leaves" soundcloud="https://soundcloud.com/simon-todeschini/falling-leaves"></div>

    <h2>SPARKLES</h2>
    <div class="player" name="sparkles" path="2015-12-27_sparkles" son="SPARKLES"></div>
    <div class="multiple-buttons" id="buttons-sparkles" soundcloud="https://soundcloud.com/simon-todeschini/sparkles"></div>

    <h2>THE INTERROGATION</h2>
    <div class="player" name="the-interrogation" path="2015-12-14_the-interrogation" son="THE INTERROGATION"></div>
    <div class="multiple-buttons" id="buttons-the-interrogation" soundcloud="https://soundcloud.com/simon-todeschini/the-interrogation"></div>

    <h2>TEMPLE'S DEMON</h2>
    <div class="player" name="temple-s-demon" path="2015-12-09_temple-s-demon" son="TEMPLE S DEMON"></div>
    <div class="multiple-buttons" id="buttons-temple-s-demon" soundcloud="https://soundcloud.com/simon-todeschini/temples-demon"></div>

    <h2>STARE</h2>
    <div class="player" name="stare" path="2015-12-07_stare" son="STARE"></div>
    <div class="multiple-buttons" id="buttons-stare" soundcloud="https://soundcloud.com/simon-todeschini/stare"></div>

    <h2>SWEEPS</h2>
    <div class="player" name="sweeps" path="2015-12-02_sweeps" son="SWEEPS"></div>
    <div class="multiple-buttons" id="buttons-sweeps" soundcloud="https://soundcloud.com/simon-todeschini/sweeps"></div>

    <h2>DEEP SHIT !</h2>
    <div class="player" name="deep-shit" path="2015-11-30_deep-shit" son="DEEP SHIT"></div>
    <div class="multiple-buttons" id="buttons-deep-shit" soundcloud="https://soundcloud.com/simon-todeschini/deep-shit"></div>

    <h2>1st_track</h2>
    <div class="player" name="st_track" path="2015-10-30_1st-track" son="1st_track"></div>
    <div class="multiple-buttons" id="buttons-st_track" soundcloud="https://soundcloud.com/simon-todeschini/1st_track"></div>


    <script src="javascripts/audio-player.js" rel="script"></script>
    <script src="javascripts/write-action-bdd.js" rel="script"></script>

</div>

<div id="errors"></div>

<?php include("include/after_body.html"); ?>

</body>
</html>
