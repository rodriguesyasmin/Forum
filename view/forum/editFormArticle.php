<h1>Créer article:</h1>
<form action="index.php?controller=forum&function=editer" method="post">

    <div>
        <label for="titre">Titre:
            <input type="text" id="titre" name="titre" value="<?= $data['titre']; ?>"></label>
    </div>
    <div>
        <label for="article">Article:
            <textarea id="article" name="article" maxlength="1000" minlength="20" required><?= $data['article']; ?></textarea>
        </label>
    </div>
    <div>
        <label for="date">Date:
            <input type="date" id="date" name="dateArticle" disabled value="<?= $data['dateArticle']; ?>"></label>
    </div>
    <div>
        <input type="hidden" name="author" value="<?= $_SESSION['nom']; ?>">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
    </div>
    <input type="submit" value="Créer">
</form>