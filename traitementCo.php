<?php
session_start();


if (isset($_POST['formconnecxion'])) //formulaire remplie
{
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if (!empty($mailconnect) and !empty($mdpconnect)) {
        $requser = $db->prepare("SELECT * FROM user WHERE mail = ? AND password= ?"); //Vérifie si les données inscrit sont cohérente entre celle de la bdd
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount(); //Permet de vérifier si le pseudo existe en comptant avec rowCount()
        $userinfo = $requser->fetch(); //fetch() pour recevoir les informations
        $_SESSION['id_user'] = $userinfo['id_user']; //On met les informations dans des variables de session 
        $_SESSION['pseudo'] = $userinfo['pseudo'];
        $_SESSION['mail'] = $userinfo['mail'];
    } else {

        $erreur = "Tous les champs doivent étre completés";
    }
}
?>