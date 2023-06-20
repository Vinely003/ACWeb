<?php
session_start();

$_SESSION["hiba"] = array();

if (trim($_POST["nev"]) && trim($_POST["jelszo"])) {
    $file = fopen("regisztráciomentes.txt", "a");
    fwrite($file, $_POST["nev"] . "," . $_POST["jelszo"] . ";");
    fclose($file);
    echo "<script>window.location.replace(document.referrer);</script>";
} else {
    $_SESSION["hiba"][] = "Üres mező";
    header("Location:../index.php");
}
