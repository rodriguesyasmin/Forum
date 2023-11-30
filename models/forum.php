<?php
function ajouterArticle()
{
    require('lib/connex.php');

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
        error_log('key : ' . $key . ' Value : ' . $value);
    }

    $sql = "INSERT INTO forum (titre, article, dateArticle, author,utilisateur_id) VALUES ('$titre', '$article', '$dateArticle', '$author', '$utilisateur_id')";

    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
        // render('/base/welcome.php');
    } else {
        return "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}

function deleter($request)
{
    require_once("lib/connex.php");

    $id = mysqli_real_escape_string($connex, $request['id']);

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }


    $sql = "DELETE FROM forum WHERE id = '$id' ";


    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}
