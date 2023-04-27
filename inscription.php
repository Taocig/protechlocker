<?php require_once('classes/Inscription.class.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <title>Inscription - Protechlocker</title>
</head>

<body>
    <?php include('include/navbar.inc.php'); ?>

    <div class="container_connexion">
        <h1>Inscription</h1>

        <form class="form_connexion" method="POST">
            <label>Nom</label></br>
            <input type="text" name="nom" class="input_connexion"></br>

            <label>Prénom</label></br>
            <input type="text" name="prenom" class="input_connexion"></br>

            <label>Adresse email</label></br>
            <input type="text" name="email" class="input_connexion"></br>

            <label>Numéro de téléphone</label></br>
            <input type="text" name="tel" class="input_connexion"></br>

            <label>Mot de passe</label></br>
            <input type="password" name="pass" class="input_connexion"></br>

            <label>Confirmation du de passe</label></br>
            <input type="password" name="confirm_pass" class="input_connexion"></br>

            <input type="submit" name="inscription" value="Inscription" class="btn_connexion">
            <p>Vous disposez déjà d'un compte ? <a href="connexion.php">Connectez-vous.</a> </p>
        </form>
        <?php
        if (isset($_POST['inscription'])) {
            if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['pass']) && isset($_POST['confirm_pass'])) {
                echo "<script>console.log('Tous les champs sont remplis')</script>";
                $nom = htmlentities($_POST['nom']);
                $prenom = htmlentities($_POST['prenom']);
                $email = htmlentities($_POST['email']);
                $tel = htmlentities($_POST['tel']);
                $pass = htmlentities($_POST['pass']);
                $confirm_pass = htmlentities($_POST['confirm_pass']);

                if ($pass == $confirm_pass) {
                    $ins = new Inscription($nom, $prenom, $email, $tel, $pass);
                    $ins = $ins->NewInscription();
                    if ($ins === true) {
                        echo "Inscription réussie !";
                    } else {
                        echo "Adresse e-mail non conforme";
                    }
                    // echo "<script>console.log('Confirm pass')</script>";
                    // $ins = $bdd->prepare("INSERT INTO user (name, firstname, tel, mail, passwd) VALUE (?,?,?,?,?)"); 
                    // $ins->execute(array($nom, $prenom, $tel, $email, $pass_hache ));   
                    // echo "<script>console.log('CReq sql OK')</script>";

                    // echo "Inscription réussie !";
                } else {
                    echo "Les mots de passe ne correspondent pas !";
                }
            } else {
                echo "<script>console.log('Tous les champs ne sont pas remplis')</script>";
            }
        }

        ?>

    </div>

    <?php include('include/footer.inc.php'); ?>
</body>

</html>