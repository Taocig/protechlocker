<?php
namespace classe;

require_once('Database.class.php');
require_once('Validate.class.php');
require_once('Request.class.php');

use Database;
use classe\Validate;
use classe\Request;

Class Reservation{
    public static function GetOneLocker($data){
        $sql = "SELECT * FROM locker WHERE id=?";
        Request::requete($sql,$data);
    }

    public function NewReservation($mail,$code,$id){
        if (Validate::ValidMail($mail) && Validate::ValidCode($code)){
            $sql="UPDATE locker SET busy= ?,user= ? ,code= ? WHERE id= ?";
            $data=[true,$mail,$code,$id];
            Request::requete($sql,$data);
            header("Location:index.php");
        }else{
            echo("Adresse e-mail ou code invalid");
        }
    }
}
?>