<?php
include("models/etudiant.php");
include("orm/orm.php");
use isetsidibouzid\Etudiant;
$con=new orm("root","devpass","dbtest","dd");
$con->connexion();

if(!empty($_POST))
{
    if(!empty($_POST['nom'])){
        $etudiant=new Etudiant($_POST['nom']);
        $etudiant->setNote1($_POST['note1']);
        $etudiant->setNote2($_POST['note2']);
        $etudiant->setNote3($_POST['note3']);
        $result=$con->postModel($etudiant);


        var_dump($result);

    }
    return 444;

}



