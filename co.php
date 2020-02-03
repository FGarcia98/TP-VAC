
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
                                <form role="form" method="POST" action="index.php">
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
