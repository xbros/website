<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rubik's Cube</title>
    <script src="lib/jquery-1.11.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="lib/bootstrap-3.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="lib/bootstrap-3.3.1/js/bootstrap.min.js"></script>


    <?php include("include/in_header.html"); ?>
    <link rel="stylesheet" href="simon.css">

    <style>
        <?php include("../rubik/style.css") ?>
    </style>
</head>

<body>
<?php include("include/before_body.html"); ?>


    <h1>Rubik's cube</h1>
    <div id='cube' class="rb-cube"></div>
    <div id='controls' class="rb-controls"></div>
    <div class="rb-moves">
        <button onclick="document.getElementById('moves').classList.toggle('hide')">Moves</button>
        <p id='moves'></p>
    </div>

<?php include("include/after_body.html"); ?>

<script>
    <?php include("../rubik/js/rubik.js"); ?>
</script>

<script>
    <?php include("../rubik/js/script.js"); ?>
</script>
</body>
</html>
