<?php
function AfficherForum()
{
    render('/user/forum.php');
}
function afficherFormArticle()
{

    error_log('chega atè aqui');
    render('/forum/formArticle.php');
}

function creerArticle()
{
    error_log('chegou no controller' . $_POST);
    require_once('models/forum.php');
    ajouterArticle();
    render('/user/forum.php');
}
