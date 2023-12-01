<?php

function clientInsert()
{
    require_once(CONNEX_DIR);
    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
        error_log('key : ' . $key . 'value : ' . $value);
    }
    $salt = "tp2";
    $saltmotDePasse = $motDePasse . $salt;
    $hashMotDePasse =  password_hash($saltmotDePasse, PASSWORD_BCRYPT, ['cost' => 10]);
    $sql = "INSERT INTO utilisateur (nom, nomUtilisitaseurEmail, motDePasse, dateNaissance) VALUES ('$nom', '$nomUtilisitaseurEmail', '$hashMotDePasse', '$dateNaissance')";
    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}

function auth()
{
    session_start();
    require('lib/connex.php');
    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "SELECT * FROM utilisateur WHERE nomUtilisitaseurEmail = '$nomUtilisitaseurEmail'";
    $result = mysqli_query($connex, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        echo "achou";
        $info_user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $info_user['motDePasse'];
        $salt = "tp2";
        $saltMotdepasse = $motDePasse . $salt;
        $authenticated = password_verify($saltMotdepasse, $info_user['motDePasse']);

        if ($authenticated) {

            session_regenerate_id();
            $_SESSION['id'] = $info_user['id'];
            $_SESSION['nom'] = $info_user['nom'];
            $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);

            header('location:index.php?controller=forum&function=AfficherForum');
        } else {
            header("location:index.php?controller=user&function=loginError");
        }
    } else {
        header("location:index.php?controller=user&function=loginError");
    }
}
