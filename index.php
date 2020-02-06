<?php
session_start();
include("database.php");
include("film.php");




?>
<!-- Home -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">



    <title>Vote films</title>
</head>
<body>

    <?php


    //Traitement du formulaire
    if (isset($_POST['formconnecxion']) ) 
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




            if (isset($_SESSION['id_user']) && $_SESSION['id_user'] != 0) {
            } else {

                $erreur = "Tous les champs doivent étre completés";
            }
        }
    } 
    
    
    if(isset( $_SESSION['id_user'])){

        $DonneeFilm = $db->query("SELECT * FROM film");
        $TabinFilm = 0;
        while ($tab = $DonneeFilm->fetch()) {
            $TabFilm[$TabinFilm++] = new Film($tab["id_film"], $tab["titre"], $tab["image"]);
        }
        $Rfilm = $db->query("SELECT * FROM `film` WHERE `category` = 'Films_populaires'");
        $R2film = $db->query("SELECT * FROM `film` WHERE `category` = 'Action'");
        $R3film = $db->query("SELECT * FROM `film` WHERE `category` = 'Animation'");

        $DonneeBruteFilm =  $db->query("SELECT * FROM `film` ");
        ?>



        <h1 class="text-logo"><span class="glyphicon glyphicon-film"></span>Welcome <?php echo $userinfo['pseudo']; ?><span class="glyphicon glyphicon-film"></span></h1>


        <nav>
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="#1" data-toggle="tab">Films poulaires</a></li>
                <li role="presentation"><a href="#2" data-toggle="tab">Action</a></li>
                <li role="presentation"><a href="#3" data-toggle="tab">Animation</a></li>
                <li role="presentation"><a href="#4" data-toggle="tab">Ajouter/Supprimer</a></li>

                <li role="presentation"><a href="deco.php">Déconnexion</a></li>




            </ul>
        </nav>



        <div class="tab-content">


            <div class="tab-pane active" id="1">


                <div class="row">

                    <?php
                    while ($film = $Rfilm->fetch()) {

                        $imagefilm = $film['image'] ;
                        $titrefilm = $film['titre'] ;
                        $idfilm = $film['id_film'];
                        include("AffichaFilm.php");
                    }
                    ?>

                </div>
            </div>







            <div class="tab-pane" id="2">


                <div class="row">

                    <?php
                    while ($film = $R2film->fetch()) {
                        $imagefilm = $film['image'] ;
                        $titrefilm = $film['titre'] ;
                        $idfilm = $film['id_film'];
                        include("AffichaFilm.php");
                    }
                    ?>

                </div>
            </div>



            <div class="tab-pane" id="3">


                <div class="row">

                    <?php
                    while ($film = $Rfilm->fetch()) {
                        $imagefilm = $film['image'] ;
                        $titrefilm = $film['titre'] ;
                        $idfilm = $film['id_film'] ;
                        include("AffichaFilm.php");
                    }
                    ?>

                </div>
            </div>

         


                <div class="tab-pane" id="4">


                    <div class="row">

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <FORM action="" method="POST">
                                        <?php
                                        foreach ($TabFilm as $objetFilm) {
                                            echo '<p><input type="checkbox" value="' . $objetFilm->getId() . '" name="Film[]" />';
                                            echo '<label for="coding">  ' .  $objetFilm->getTitre() . ' </label></p>';
                                        }
                                        ?>
                                        <input type="submit" value="Supprimer"></input>
                                    </FORM>

                                    <?php
                                    if (isset($_POST["Film"])) {
                                        foreach ($_POST['Film'] as $idfilm) {

                                            $j = 0;
                                            foreach ($TabFilm as $objetFilm) {
                                                if ($objetFilm->getId() == $idfilm) {
                                                    $objetFilm->deleteFilm();
                                                    //j'en profite pour le retirer de mon tableau. car il sera supprimé à l'affichage
                                                    unset($TabFilm[$j]);
                                                }
                                                $j++;
                                            }
                                        }
                                    }


                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>






                </div>
        <?php 
    }else{
?>
        <div id="co">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="style.css">

            <div class="container">
                <div class="row centered-form">
                    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Connexion </h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST" action="#traitementCo">
                                    <input type="email" name="mailconnect" placeholder="Mail" />
                                    <input type="password" name="mdpconnect" placeholder="Password" />
                                    <input type="submit" class="btn btn-info btn-block" name="formconnecxion" value="Se connecter" />
                                    <a href="inscription.php">Pas encore inscrits ?</a>
                                </form>
                                <?php
                                if (isset($erreur)) {
                                    echo '<font color="red">' . $erreur . "</font>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } ?>
      
</body>
</html>