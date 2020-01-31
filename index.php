<?php
session_start();
//Class Film

class Film
{
        private $_id;
        private $_titre;
        private $_image;

        public function __construct($id,$titre,$image){
        $this->_id = $id;
        $this->_titre = $titre;
        $this->_image = $image;
        }

        public function getId(){
        return $this->_id;
        }

        public function getTitre(){
        return $this->_titre;
        }

        public function getImage(){
            return $this->_image;
            }

        public function AfficheFilm(){
            echo 'Titre ='.$this->_titre.' id ='.$this->_id.$this->_image;
        }
 }



require('database.php');
$db = Database::connect(); //Appelle de la fonction connect() de la classe Database -> $db 

if (isset($_POST['formconnecxion'])) //formulaire remplie
{
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if (!empty($mailconnect) and !empty($mdpconnect)) {
        $requser = $db->prepare("SELECT * FROM user WHERE mail = ? AND password= ?"); //Vérifie si les données inscrit sont cohérente entre celle de la bdd
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount(); //Permet de vérifier si le pseudo existe en comptant avec rowCount()
        if ($userexist == 1) // 1 = utilisateur existe
        {
            $Rfilm = $db->query("SELECT * FROM `film` WHERE `category` = 'Films_populaires'");
            $R2film = $db->query("SELECT * FROM `film` WHERE `category` = 'Action'");
            $R3film = $db->query("SELECT * FROM `film` WHERE `category` = 'Animation'");

            $DonneeBruteFilm =  $db->query("SELECT * FROM `film` ");
           
           
            $userinfo = $requser->fetch(); //fetch() pour recevoir les informations
            $_SESSION['id_user'] = $userinfo['id_user']; //On met les informations dans des variables de session 
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
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
                                
                                echo ' <div class="col-sm-6 col-md-4">  <div class="thumbnail">
                                
                                    
                                    <img src=' . $film['image'] . ' alt="...">
                                      
                                    <div class="caption">
                                        <h4>' . $film['titre'] . '</h4>
                                        <FORM action="" méthode="POST">

                                        <FORM action="" méthode="POST">
                                                <select name="Notes films" id="Notes films-select">
                                                    <option value="1" selected>5 étoiles</option>
                                                    <option value="2" selected>4 étoiles</option>
                                                    <option value="3" selected>3 étoiles</option>
                                                    <option value="4" selected>2 étoiles</option>
                                                    <option value="5" selected>1 étoile</option>
                                                    </select> 
                                                </FORM>
            
                                    </div>
                                </div>
                                </div>
                                ';
                            }
                            ?>

                        </div>
                    </div>
               






                <div class="tab-pane" id="2">


                    <div class="row">

                        <?php
                        while ($film = $R2film->fetch()) {
                            echo ' <div class="col-sm-6 col-md-4">  <div class="thumbnail">
           
                   
                <img src=' . $film['image'] . ' alt="...">
            
                <div class="caption">
                    <h4>' . $film['titre'] . '</h4>
                    <FORM action="" méthode="POST">

                    <FORM action="" méthode="POST">
                            <select name="Notes films" id="Notes films-select">
                                <option value="1" selected>5 étoiles</option>
                                <option value="2" selected>4 étoiles</option>
                                <option value="3" selected>3 étoiles</option>
                                <option value="4" selected>2 étoiles</option>
                                <option value="5" selected>1 étoile</option>
                                </select> 
                            </FORM>

                </div>
            </div>
            </div>
            ';
                        }
                        ?>

                    </div>
                </div>



                <div class="tab-pane" id="3">


<div class="row">

    <?php
    while ($film = $Rfilm->fetch()) {
        echo ' <div class="col-sm-6 col-md-4">  <div class="thumbnail">


<img src=' . $film['image'] . ' alt="...">

<div class="caption">
<h4>' . $film['titre'] . '</h4>
<FORM action="" méthode="POST">

<FORM action="" méthode="POST">
        <select name="Notes films" id="Notes films-select">
            <option value="1" selected>5 étoiles</option>
            <option value="2" selected>4 étoiles</option>
            <option value="3" selected>3 étoiles</option>
            <option value="4" selected>2 étoiles</option>
            <option value="5" selected>1 étoile</option>
            </select> 
        </FORM>

</div>
</div>
</div>
';
    }
    ?>

</div>
</div>


<div class="tab-pane" id="4">


<div class="row">

    <?php
    while ($film = $Rfilm->fetch()) {
        echo ' <div class="col-sm-6 col-md-4">  <div class="thumbnail">


<img src=' . $film['image'] . ' alt="...">

<div class="caption">
<h4>' . $film['titre'] . '</h4>
<FORM action="" méthode="POST">

<FORM action="" méthode="POST">
        <select name="Notes films" id="Notes films-select">
            <option value="1" selected>5 étoiles</option>
            <option value="2" selected>4 étoiles</option>
            <option value="3" selected>3 étoiles</option>
            <option value="4" selected>2 étoiles</option>
            <option value="5" selected>1 étoile</option>
            </select> 
        </FORM>

</div>
</div>
</div>
';
    }
    ?>

</div>
</div>


         </div>  
         
         


        <?php




        } else {

            $erreur = "Mauvais mail ou mot de passe";
        }
    } else {

        $erreur = "Tous les champs doivent étre completés";
    }
}
if ($userexist == 0) // 0 = utilisateur existe pas
{
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <title>Connexion</title>
        </head>

        <body>
            <div class="container">
                <div class="row centered-form">
                    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Connexion </h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST" action="">
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
        </body>

        </html>
    <?php
}
    ?>