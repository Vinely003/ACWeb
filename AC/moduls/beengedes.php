<?php
if (isset($_GET["regisztralt"])) {
    if ($_GET["regisztralt"] == "igaz") {
        header("Location:./fo_oldal.php");
    } elseif ($_GET["regisztralt"] == "hamis") {
        header("Location:./be.php");
    }
}
