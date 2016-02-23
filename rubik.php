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
    <link rel="stylesheet" href="../workspace/rubik/style.css">
</head>
<body>
<?php include("include/before_body.html"); ?>


<div id="faceo" class="divface decal"></div>

<div class="divface">
    <div id="faceg"></div>

    <div id="facew"></div>

    <div id="faceb"></div>
</div>

<div id="facer" class="divface decal"></div>

<div id="facey" class="divface decal"></div>



<?php include("include/after_body.html"); ?>

<script src="../workspace/rubik/js/rubik.js"></script>
<script src="../workspace/rubik/js/scripts.js"></script>
</body>
</html>
