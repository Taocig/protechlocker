<?php
namespace classe;

require_once('Database.class.php');
require_once('Validate.class.php');

use Database;
use classe\Validate;

class InterfaceClient{
    public function Rendre($data){
        $sql="UPDATE locker SET busy= ?,user= ? WHERE id= ?";
        Request::requete($sql,$data);
        header("Location:index.php");
    }
    
    public function Open($data){
        $sql="UPDATE locker SET busy= ?,user= ? WHERE id= ?";
        Request::requete($sql,$data);
        header("Location:index.php");
    }

    public function Close($data){
        $sql="UPDATE locker SET busy= ?,user= ? WHERE id= ?";
        Request::requete($sql,$data);
        header("Location:index.php");

    }
}