<?php
require_once('lib/checkSession.php');
if (!$_SESSION) {
?>
    <h1>Alguma coisa aqui : </h1>
<?php
} else {
?>
    <h1> Oi, <?= $_SESSION['nom']; ?>!
    <?php
}

    ?>


    Aqui vai ser o forum