<?php

/**
 * Created by PhpStorm.
 * User: ameur
 * Date: 11/12/16
 * Time: 11:51 PM
 * Corrigé Exercice 3
 */
 class Employe
{
    public $nom;
    public $anciennete;
    public $service;
    function __construct($nom,$anciennete,$service) {
        $this->nom=$nom;
        $this->anciennete=$anciennete; $this->service=$service;
    }
    public function CalculerSalaire()
    {
        if ($this->anciennete > 10)
            $salaire=550;
        else
            $salaire=400;
        return $salaire;
    }
}

class EmpProd extends Employe
{
    public $NbUnites;
    function __construct($nom,$anciennete,$service,$NbUnites) {
        parent::__construct($nom,$anciennete,$service); $this->NbUnites=$NbUnites;
    }
    public function CalculerSalaire()
    {
        $salaire1=parent::CalculerSalaire();
        $salaire1=$salaire1+ 5*$this->NbUnites;
        return $salaire1;
    }
}
//Création d'objets
$Employe1 = new Employe("Ali",19,"Vente",6); $salaire=$Employe1->CalculerSalaire();
echo "Le salaire de l'employé <B> $Employe1->nom </B> du service <B>$Employe1->service </B> ayant une ancienneté <B> $Employe1->anciennete</B> ans est <B>$salaire</B>D";
echo "<hr>";
$EmpProd1 = new EmpProd("Mehdi",9,"Production",6); $salaire1=$EmpProd1->CalculerSalaire();
echo "Le salaire de l'employé <B> $EmpProd1->nom </B> du service <B>$EmpProd1->service </B> ayant une ancienneté <B> $EmpProd1->anciennete</B> ans est <B>$salaire1</B>D";
echo "<hr>";
?>