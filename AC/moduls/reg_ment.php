<?php
session_start();

$_SESSION["reghiba"] = array();
$_SESSION["users"];
if (trim($_POST["nev"]) && trim($_POST["jelszo"])) {
    $file = fopen("regisztraciomentes.txt", "a");
    fwrite($file, "(**)" . $_POST["nev"] . ";" . $_POST["jelszo"]);
    fclose($file);
    $_SESSION["users"] = $_POST["nev"];
    header("Location:../index.php?regisztralva=igaz");
} else {
    $_SESSION["reghiba"][] = "Üres mező";
    header("Location:../index.php?regisztralva=hamis");
}
