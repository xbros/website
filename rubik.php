<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rubik's cube</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="lib/bootstrap-3.3.1/css/bootstrap.min.css" rel="stylesheet" />

    <?php include("include/in_header.html"); ?>
    <link rel="stylesheet" href="simon.css">
    <link rel="stylesheet" href="rubik/rubik.css">
</head>


<body>

    <div class="container-fluid main-container">
        <?php include("include/before_body.html"); ?>

        <h1>Rubik's cube</h1>
        <p>
            Use the buttons below or the keyboard to move the cube.
            Clockwise 90°: [F]ront, [B]ack, [L]eft, [R]ight, [U]p, [D]own.
            Anti-clockwise 90°: Shift-[key].
            180°: Shift-Ctrl-[key].
        </p>
        <div id='my-cube' class="rb-cube" style="text-align:center;"></div>
        <div id='my-ctrl' class="rb-ctrl" style="text-align:center;"></div>
        <div class="rb-moves">
            <button onclick="document.getElementById('my-moves').classList.toggle('hide')">Moves</button>
            <p id='my-moves'></p>
        </div>

        <?php include("include/after_body.html"); ?>
    </div>

    <script src="rubik/rubik.js"></script>
    <script src="rubik/script.js"></script>
    <script src="lib/jquery-1.11.0/jquery.min.js"></script>
    <script src="lib/bootstrap-3.3.1/js/bootstrap.min.js"></script>
</body>

</html>
