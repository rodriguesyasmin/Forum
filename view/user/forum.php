<?php
require_once('lib/connex.php');
$sql = "SELECT * FROM forum limit 5";
$result = mysqli_query($connex, $sql);

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


    <?php
    foreach ($result as $row) {

    ?>

        <div>
            <div><?= $row['titre']; ?></div>
            <div><?= $row['article']; ?></div>
            <div><?= $row['dateArticle']; ?></div>
            <div><?= $row['author']; ?></div>
            <div class="invisible"><?= $row['utilisateur_id']; ?></div>

        </div>
    <?php
    }
    ?>