<?php
require_once('lib/checkSession.php');
?>


<form action="index.php?controller=forum&function=creerArticle" method="post">

    <div>
        <label for="titre">Titre:</label>
        <input type="text" id="titre" name="titre" required>
    </div>
    <div>
        <label for="article">Article:</label>
        <input type="text" id="article" name="article" maxlength="1000" minlength="20" required> 
    </div>
    <div>
        <label for="date">Date:</label>
        <input type="date" id="date" name="dateArticle" required>
    </div>
    <div>
        <input type="hidden" name="author" value="<?= $_SESSION['nom']; ?>">
        <input type="hidden" name="utilisateur_id" value="<?= $_SESSION['id']; ?>">
    </div>
    <input type="submit" value="Créer">
</form>