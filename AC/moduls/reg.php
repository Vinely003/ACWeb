<form action="./moduls/reg_ment.php" method="POST">
    <?php
    session_start();
    if (count($_SESSION["reghiba"]) > 0) {
        echo "<div class ='hiba'>" . implode($_SESSION["hiba"]) . "</div>";
    }
    ?>
    <input type="text" name="nev" placeholder="Írj egy felhasználó nevet...">
    <br>
    <input type="password" name="jelszo" placeholder="Írj egy jelszót...">
    <br>
    <input type="submit" id="button" value="Megerősítés">
</form>

<a href="./moduls/be.php">Beljelentkezés</a>