<form action="index.php?controller=forum&function=editer" method="post">

    <div>
        <label for="titre">Titre:</label>
        <input type="text" id="titre" name="titre" value="<?= $data['titre']; ?>">
    </div>
    <div>
        <label for="article">Article:</label>
        <input type="text" id="article" name="article" maxlength="1000" minlength="20" value="<?= $data['article']; ?>">
    </div>
    <div>
        <label for="date">Date:</label>
        <input type="date" id="date" name="dateArticle" disabled value="<?= $data['dateArticle']; ?>">
    </div>
    <div>
        <input type="hidden" name="author" value="<?= $_SESSION['nom']; ?>">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
    </div>
    <input type="submit" value="Créer">
</form>