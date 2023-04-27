<?php
namespace classe;
require_once('classes/Database.class.php');
use Database;
class Request{ 
    public static function requete($sql,$data){
        $db = Database::getInstance();
        $pdo = $db->getPdo();
        $sql=$pdo->prepare($sql);
        $sql->execute($data);
    }
}
