<?php
    require_once('classes/Database.class.php');
    use Database;
    $pdo=Database::getInstance();
    $bdd = $pdo->getPdo();
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <title>Connexion - Protechlocker</title>
</head>
<body>
    <?php include('include/navbar.inc.php'); ?>
  
    <div class="container_connexion">
    	<h1>Connexion</h1>
    	<form class="form_connexion" method="POST">
    		<label>Adresse email</label></br>
    		<input type="text" name="email" class="input_connexion"></br>

    		<label>Mot de passe</label></br>
    		<input type="password" name="pass" class="input_connexion"></br>
    		<input type="submit" name="connexion" value="Connexion" class="btn_connexion"></br>
            <p>Vous n'avez pas encore de compte ? <a href="inscription.php">Inscrivez-vous.</a> </p>
    	</form>
        <?php
        // Traitement du formulaire de connexion
        if(isset($_POST['connexion'])){
            $email = htmlentities($_POST['email']) ;
            $pass = htmlentities($_POST['pass']);

            $req_verif = $bdd->prepare("SELECT * FROM user WHERE mail =:mail ");
            $req_verif->execute(array('mail' => $email));
            
            $verif = $req_verif->fetch();
            $isPasswordCorrect = password_verify($pass, $verif['passwd']);
            echo "<script>console.log('Ok : " . $verif['name'] . "')</script>";
            if ($isPasswordCorrect) {
                echo "<script>console.log('Verif pass OK')</script>";
                $_SESSION['id'] = $verif['id'];
                $_SESSION['name'] = $verif['name'];
                echo "<meta HTTP-EQUIV='Refresh' content='0;URL=index.php'/>";
            } else {
                echo "Email ou mot de passe incorrect";
            }
            
        }
   


        ?>
    </div>

    <?php include('include/footer.inc.php'); ?>
</body>
</html>