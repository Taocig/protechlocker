<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/locker.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header>
        <?php include('include/navbar.inc.php'); ?>

        <?php //include('include/header.inc.php'); ?>
    </header>
    <section style="margin-top:10%;">
        <?php include('include/locker.inc.php');?>
        <p style="margin:auto 10px ; text-align:center">
           Les casiers disponibles sont affichés ci-dessus. </br>
           Un casier en vert est considéré comme disponible, un casier en rouge est considéré comme occupé. </br></br>
           Pour réserver un casier, cliquez sur ne numero de votre choix. </br></br>
        </p>
    </section>
    <?php include('include/footer.inc.php'); ?>
</body>

</html>