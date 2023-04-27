<?php

use classe\Reservation;

require_once('classes/Database.class.php');
require_once('classes/Reservation.class.php');

$pdo = Database::getInstance();
$bdd = $pdo->getPdo();

$locker_num = empty($_GET['locker_num']) ? 0 : $_GET['locker_num'];

if (!empty($_SESSION)) {
    var_dump($_SESSION);
} else { ?>

    <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>" class="form_confirmation">
        <p>
            <?php
            $sql = "SELECT * FROM locker WHERE id=?";
            $stmt = $bdd->prepare($sql);
            $stmt->execute([$locker_num]);
            $resultStatus = $stmt->fetch();
            if (is_array($resultStatus) && $resultStatus['busy'] == false) {
                echo "Vous réservez le casier : " . $locker_num;
            } else {
                echo "Entrez votre code pour ouvrir le casier  " . $locker_num;
            }
            ?>
        </p></br>
        <label for="locker">Entrez votre code :</label>
        <input type="hidden" name="locker" value="<?= $locker_num ?>">
        <input type="mail" name="mail" placeholder="test@test.com">
        <input type="text" name="code" placeholder="Exemple : 1234">
        <input type="submit" class="form_confirmation_submit">
    </form>
<?php
    if (!empty($_POST)) {
        if (is_array($resultStatus) && $resultStatus['busy'] == false) {
            $reservation = new Reservation();
            $reservation->NewReservation($_POST['mail'],$_POST['code'],$resultStatus['id']);
        }
    }
} ?>