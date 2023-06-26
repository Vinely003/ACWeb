<?php
session_start();
$_SESSION["behiba"] = array();

$myfile = fopen("regisztraciomentes.txt", "r");
$olvas = fread($myfile, filesize("regisztraciomentes.txt"));
fclose($myfile);
$split1 = explode("(**)", $olvas);

foreach ($split1 as $i) {
    $split2 = explode(";", $i);
    if (count($split2) >= 2) {
        $nev = trim($split2[0]);
        $jelszo = trim($split2[1]);
        if ($nev == $_POST["nev"] && $jelszo == $_POST["jelszo"]) {
            header("Location:./be.php?regisztralt=igaz");
        } else {
            $_SESSION["behiba"][] = "Nem megfelelő Név vagy Jelszó";
            header("Location:./be.php?regisztralt=hamis");
        }
    }
}
