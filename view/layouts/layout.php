<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?controller=user&function=login">Login</a></li>
            <li><a href="index.php?controller=user&function=create">Nouvel utilisateur</a></li>
            <li><a href="index.php?controller=forum&function=afficherFormArticle">Créer article</a></li>

        </ul>
    </nav>
    <div class="container">
        <?php echo $content; ?>
    </div>

</body>

</html>