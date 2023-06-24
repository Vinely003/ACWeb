<!DOCTYPE html>
<html class="fooldal-bg" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imgs/ac_icon.png">
    <link rel="stylesheet" href="../style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Assassin's Creed</title>
</head>

<body>

</body>
<div class="felhasznalo">
    <?php
    session_start();
    echo "Név: " . $_SESSION["users"];
    ?>
    <br>
    <a href="../index.php">Kijelentkezés</a>
</div>
<div class="menu">

</div>
<div class="leiras">

</div>

</html>