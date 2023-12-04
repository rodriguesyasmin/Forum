<?php
require_once('lib/checkSession.php');
?>

<h1>Modifier article:</h1>
<form action="index.php?controller=forum&function=creerArticle" method="post">

    <div>
        <label for="titre">Titre:
            <input type="text" id="titre" name="titre" required></label>
    </div>
    <div>
        <label for="article">Article:
            <textarea id="article" name="article" maxlength="1000" minlength="20" required></textarea>
        </label>
    </div>

    <div>
        <label for="date">Date:
            <input type="date" id="date" name="dateArticle" required></label>
    </div>
    <div>
        <input type="hidden" name="author" value="<?= $_SESSION['nom']; ?>">
        <input type="hidden" name="utilisateur_id" value="<?= $_SESSION['id']; ?>">
    </div>
    <input type="submit" value="Créer">
</form>