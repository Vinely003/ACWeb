<form action="./moduls/reg_ment.php" method="POST">
    <?php
    session_start();
    if (isset($_SESSION["reghiba"])) {
        if (count($_SESSION["reghiba"]) > 0) {
            echo "<div class ='hiba'>" . implode($_SESSION["reghiba"]) . "</div>";
        }
    }
    ?>
    <input type="text" name="nev" placeholder="Írj egy felhasználó nevet...">
    <br>
    <input type="password" name="jelszo" placeholder="Írj egy jelszót...">
    <br>
    <input type="submit" id="button" value="Megerősítés">
</form>
<div class=belepes>
    <a href="./moduls/be.php">Bejelentkezés</a>
</div>