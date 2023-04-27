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
    <section style="margin-top:20%;">
        <p>
            <a href="reservation.php" style="margin-left: 10%;">Choisir un autre casier </a></br></br>
        </p>
  
        <?php include('include/confirmation.inc.php');?>
    </section>
    <?php include('include/footer.inc.php'); ?>
</body>

</html>