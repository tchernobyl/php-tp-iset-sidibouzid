<?php
/**
 * Created by PhpStorm.
 * User: tchernobyl
 * Date: 11/13/16
 * Time: 3:05 AM
 */



abstract class PersonneQ
{
    public $nom;
    public $prenom;
    abstract function faireDuSport();
    function __construct($nom,$prenom)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
    }
//public function __construct() ;
}