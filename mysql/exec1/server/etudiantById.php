<?php
include("models/etudiant.php");
include("orm/orm.php");
use isetsidibouzid\Etudiant;
$con=new orm("root","devpass","dbtest","dd");
$con->connexion();

$etudiant=new Etudiant();
$result=$con->selectModelById($etudiant,28);
var_dump($result);
//$etudiant=new Etudiant("ameur");
//$etudiant->setNote1(555);
//$result=$con->postModel($etudiant);
//
//
//var_dump($result);
//var_dump(get_object_vars($con));
//
//var_dump($con->connexion());
//var_dump($etudiant->getRules() );



