<?php
include("models/etudiant.php");
include("orm/orm.php");
use isetsidibouzid\Etudiant;
$con=new orm("root","devpass","dbtest","dd");
$con->connexion();



        $etudiant=new Etudiant();
        $result=$con->selectModels($etudiant);

var_dump($result);








