<form action="./belep_ellenor.php" method="POST">
    <?php
    session_start();
    if (isset($_SESSION["behiba"])) {
        if (count($_SESSION["behiba"]) > 0) {
            echo "<div class ='hiba'>" . implode($_SESSION["behiba"]) . "</div>";
        }
    }
    ?>
    <input type="text" name="nev" placeholder="Írd be a felhasználó neved...">
    <br>
    <input type="password" name="jelszo" placeholder="Írd be a jelszód...">
    <br>
    <input type="submit" id="button" value="Megerősítés">
</form>
<div class=regisztracio>
    <a href="../index.php">Regisztráció</a>
</div>