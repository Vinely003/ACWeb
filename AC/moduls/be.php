<form action="./belep_ellenor.php" method="POST">
    <?php
    // session_start();
    // if (count($_SESSION["behiba"]) > 0) {
    //     echo "<div class ='hiba'>" . implode($_SESSION["hiba"]) . "</div>";
    // }
    ?>
    <input type="text" name="nev" placeholder="Írd be a felhasználó neved...">
    <br>
    <input type="password" name="jelszo" placeholder="Írd be a jelszód...">
    <br>
    <input type="submit" id="button" value="Megerősítés">
</form>