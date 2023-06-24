<?php
if ($_GET["regisztralva"] == "igaz") {
    header("Location:./moduls/fo_oldal.php");
} elseif ($_GET["regisztralva"] == "hamis") {
    header("Location:./index.php");
}
