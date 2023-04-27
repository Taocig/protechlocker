<?php
require_once('classes/Database.class.php');

$pdo=Database::getInstance();
$bdd = $pdo->getPdo();
$id_locker = empty($_GET['id_locker']) ? 0 : $_GET['id_locker'];
$result = $bdd->query('Select * from locker');
$result = $result->fetchAll();
?>


<section style="text-align:center">
    <h1>Choisissez votre casier</h1>
</section>
<div id="locker">

    <?php
    if (!empty($result)) { ?>
        <form method="get" action="confirmation.php" class="parent">

            <?php foreach ($result as $test) { ?>
                <?php // $link = $test['busy'] == 0 ? 'confirmation.php?locker_num='.$test['id'] : '"#" onclick="javascript:alert(\'Ce casier est déjà utilisé\');return false"';    
                ?>
                <input type="submit" value="<?= ($test['id']); ?>" name="locker_num" class="div<?= ($test['id']); ?>" style="<?= $test['busy'] == 0 ?  "box-shadow: 0 1px 12px rgba(61, 144, 49, 0.36);border-color: #3a9a0f;" : "box-shadow: 1px 4px 8px rgba(227, 119, 119, 0.36);border-color: #cc9393;"   ?>">

            <?php } ?>
        </form>
    <?php
    } else {
        echo 'Le numéro de casier invalid';
    } ?>
</div>