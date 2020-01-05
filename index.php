<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=user_film', 'root','' );
if(isset($_GET['id_user']) AND $_GET['id_user'] > 0)
{
    $getid = intval($_GET['id_user']);
    $requser = $bdd->prepare('SELECT * FROM user WHERE id_user= ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();

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



    <title>Vote films</title>
</head>

<body>

    <h1 class="text-logo"><span class="glyphicon glyphicon-film"></span>Welcome  <?php echo $userinfo['pseudo']; ?><span class="glyphicon glyphicon-film"></span></h1>
    

    <nav>
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="#1" data-toggle="tab">Films poulaires</a></li>
            <li role="presentation"><a href="#2" data-toggle="tab">Action</a></li>
            <li role="presentation"><a href="#3" data-toggle="tab">Animation</a></li>
            <li role="presentation"><a href="#4" data-toggle="tab">Aventure</a></li>
            <li role="presentation"><a href="#5" data-toggle="tab">Science-Fiction</a></li>
            <li role="presentation"><a href="#6" data-toggle="tab">Thriller</a></li>
            <li role="presentation"><?php if(isset($_SESSION['id_user']) AND $userinfo['id_user'] == $_SESSION['id_user']){ ?><a href="deco.php" >Déconnexion</a></li> <?php } ?>
                           
                            
                               
        </ul>
    </nav>
    <div class="tab-content">
        <div class="tab-pane active" id="1">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/avengers-endgame.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Avengers Endgame</h4>
                            <p> </p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"> </span>Voter</a>

                        </div>

                    </div>


                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/aquaman.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Aquaman</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/avengers-infinity-war.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Avengers : Infinity War</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/venom.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Vemon</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/spider-man-far-from-home2.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Spider-Man : Far from home</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/deadpool-2.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Deadpool 2</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/john-wick-3.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>John Wick 3</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/le-roi-lion.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Le roi lion </h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/captain-marvel.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Captain Marvel </h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="tab-pane" id="2">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Arambo-last-blood.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Rambo: last blood</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"> </span>Voter</a>

                        </div>

                    </div>


                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Arampage-hors-de-controle.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Rampage hors de controle</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Ashazam.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Shazam</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Awonder-woman.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Wonder woman</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Ale-bout-du-monde.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Le bout du monde</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Aoverdrive.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Overdrive</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Athe-28-heroes.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>The 28 Heroes</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Amatrix-reloaded.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Matrix Reloaded</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Apoint-blank.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Point Blank</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="3">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Dabominable.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Abominable</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"> </span>Voter</a>

                        </div>

                    </div>


                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Dcars-3.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Cars 3</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Ddragon-ball-super-broly.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Dragon Ball Super : Broly</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Ddragons-3-le-monde-cache.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Dragons 3: Le monde caché</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Dle-pole-express.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Le Pôle Express</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Dles-noces-funebres.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Les noces funèbres</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Dmon-voisin-totoro.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Mon voisin Totoro</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Dthe-death-and-return-of-superman.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>The Death and Return of Supermand</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Dtoy-story-4.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Toy Story 4</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="4">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/6300.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>300</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"> </span>Voter</a>

                        </div>

                    </div>


                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/6ready-player-one.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Ready Player One</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/6burn-your-maps.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Burn your maps</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/6the-aeronauts.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>The Aeronauts</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/6togo.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Togo</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/6fast-furious-hobbs-shaw.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Fast & Furious : Hobbs & Shaw</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/6sonic-le-film.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Sonic</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/6le-geant-de-fer.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Le Géant de fer</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/6le-cinquieme-element.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Le Cinquième Élément</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane" id="5">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/-ad-astra.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Ad Astra</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"> </span>Voter</a>

                        </div>

                    </div>


                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/-men-in-black-international.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Men in Black : International</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/-watchmen-les-gardiens.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Watchmen : Les gardiens</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/-brightburn-l-enfant-du-mal.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Brightburn - L'enfant du mal</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/-extinction.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Extinction</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/-godless.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Godless</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/-hotel-artemis.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Hotel Artemis</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/-le-labyrinthe-le-remede-mortel.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Le Labyrinthe: Le Remède mortel</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/-in-the-shadow-of-the-moon.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>In the Shadow of the Moon</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="6">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/77annabelle-la-maison-du-mal.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Annabelle : La maison du Mal</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"> </span>Voter</a>

                        </div>

                    </div>


                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/77cold-skin.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Crawl</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/77killerman.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Killerman</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/77trois-jours-et-une-vie.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Trois jours et une vie</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/77parasite.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Parasite</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/77mine.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Mine</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/77joker.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Joker</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/77blair-witch.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Blair Witch</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/77haunt.jpg" alt="...">
                        <div>8;99 $</div>
                        <div class="caption">
                            <h4>Haunt</h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"> <span class="glyphicon glyphicon-heart-empty"></span>Voter</a>

                        </div>
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