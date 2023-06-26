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
    <a href="./be.php">Kijelentkezés</a>
</div>
<div class="menu">
    <a href="./fo_oldal.php?jatek=AC">Assassin's Creed</a>
    <a href="./fo_oldal.php?jatek=AC2">Assassin's Creed II</a>
    <a href="./fo_oldal.php?jatek=ACBH">Assassin's Creed Brotherhood</a>
    <a href="./fo_oldal.php?jatek=ACR">Assassin's Creed Revelation</a>
    <a href="./fo_oldal.php?jatek=AC3">Assassin's Creed III</a>
    <a href="./fo_oldal.php?jatek=ACBF">Assassin's Creed Black Flag</a>
    <a href="./fo_oldal.php?jatek=ACR">Assassin's Creed Rouge</a>
    <a href="./fo_oldal.php?jatek=ACU">Assassin's Creed Unity</a>
    <a href="./fo_oldal.php?jatek=ACS">Assassin's Creed Syndicate</a>
    <a href="./fo_oldal.php?jatek=ACO">Assassin's Creed Origins</a>
    <a href="./fo_oldal.php?jatek=ACOY">Assassin's Creed Odyssey</a>
    <a href="./fo_oldal.php?jatek=ACV">Assassin's Creed Valhalla</a>
    <a href="./fo_oldal.php?jatek=ACM">Assassin's Creed Mirage</a>
</div>
<div class="leiras">
    <?php
    include("./oldal_valt.php")
    ?>
</div>

</html>