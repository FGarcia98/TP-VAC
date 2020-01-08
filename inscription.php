<?php
require ('database.php');
$db = Database::connect();

if(isset($_POST['Register']))
{
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$mail = htmlspecialchars($_POST['mail']);
	$password = sha1($_POST['password']);
	$confpassword = sha1($_POST['confpassword']);
	if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['confpassword']))
	{
		

		$pseudolength = strlen($pseudo);
		if($pseudolength <= 255)
		{ 
			if(filter_var($mail, FILTER_VALIDATE_EMAIL))
			{
					$reqpseudo = $db->prepare("SELECT * FROM user WHERE pseudo = ?");
					$reqpseudo->execute(array($pseudo));
					$pseudoexist =$reqpseudo->rowCount();
					if($pseudoexist == 0)
					{

							$reqmail = $db->prepare("SELECT * FROM user WHERE mail = ?");
							$reqmail->execute(array($mail));
							$mailexist =$reqmail->rowCount();
							if($mailexist == 0)
							{
								if($password == $confpassword)
								{
									$NewUser = $db->prepare("INSERT INTO user(pseudo, mail, password) VALUES(?,?,?)");
									$NewUser->execute(array($pseudo, $mail, $password));
									$_SESSION['comptecree'] = "Votre compte a bien été crée";
									header('Location: connexion.php ');

								}
								else
								{
							
									$erreur = "Vos mots de passe ne correspondent pas !";
								}
					
							
							}
							else
							{
								$erreur = "Adresse mail déja utiliser";
							}
					}
				
					else
					{
						$erreur = "Pseudo déja utilier";
					}	
			}	
			else
			{
				$erreur = "Votre addresse mail n'est pas valide";
			}
		}
		else
		{
			$erreur = "Votre pseudo ne doit pas dépasser 255 caractères";
		}

	}
	else{
		$erreur = "tous les champs ne sont pas remplie!";
	}
}
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
    <title>Inscription</title>
</head>

<body>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Veuillez vous inscrire: </h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="POST" action="">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                            <input type="text" name="pseudo" id="pseudo" class="form-control input-sm" placeholder="Pseudo" value="<?php if(isset($pseudo)) { echo $pseudo;} ?>" >
                            
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
                                <input type="email" name="mail" id="r_mail" class="form-control input-sm" placeholder="Email" value="<?php if(isset($mail)) { echo $mail;} ?>"  required>
                                
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password"  required>
                                        
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="confpassword" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" name="Register" class="btn btn-info btn-block">
							<a href="connexion.php" >Déjà inscrit ? connexion</a>
			    		
						</form>
						<?php
						if(isset($erreur))
						{
							echo '<font color="red">'.$erreur."</font>";
						}
						?>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
</body>
</html>