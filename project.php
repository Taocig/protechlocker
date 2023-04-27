<?php 
    //$bdd = new PDO("mysql:host=protechlocker-1.cjmsqvjjyvqm.eu-west-3.rds.amazonaws.com;dbname=protechlocker;port=3306", "admin", "Protechlocker");
    $erreur = "";
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
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Protech Locker</title>
</head>
<body>
    <h1>Project</h1>
    <?php
    $sql="SELECT * from user";
    if(!$bdd->query($sql)) echo "Pb d'accès a user";
    else{
         foreach ($bdd->query($sql) as $row)
         echo $row['name']."<br/>\n";
    }
    ?>
    <div class="parent"> 
    <div class="div1"> </div> 
    <div class="div2"> </div> 
    <div class="div3"> </div> 
    <div class="div4"> </div> 
    <div class="div5"> </div> 
    </div>
</body>
</html>