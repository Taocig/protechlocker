<?php
require_once('Request.class.php');
require_once('Validate.class.php');

use classe\Request;
use classe\Validate;

class Inscription
{
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $pass;

    public function __construct($nom, $prenom, $email, $tel, $pass)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
        $this->pass = $pass;
    }

    public function NewInscription()
    {
        $pass_hache = password_hash($this->pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (name, firstname, tel, mail, passwd) VALUE (?,?,?,?,?)";
        $data = [$this->nom, $this->prenom, $this->tel, $this->email, $pass_hache];
        if (Validate::ValidMail($this->email) === true) {
            Request::requete($sql, $data);
            return true;
        } else {
            return false;
        }
    }
}
