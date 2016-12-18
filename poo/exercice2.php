<?php

/**
 * Created by PhpStorm.
 * User: ameur
 * Date: 11/12/16
 * Time: 11:51 PM
 * Corrigé Exercice 2
 */

//Classe personne
abstract class personne
{
    public $nom;
    public $prenom;
//public function __construct() ;
}
//Classe client
class client extends personne
{
    private $adresse;
    public function __construct($nom,$prenom,$adresse)
    {
        parent::__construct($nom,$prenom);

        $this->adresse=$adresse;
    }
    public function getcoord()
    {
        $info="Le client $this->prenom $this->nom habite $this->adresse <br />";
        return $info;
    }
}
//Classe electeur
class electeur extends personne
{
    public $nom;
    public $prenom;
    public $bureau_de_vote;
    public $vote;
    function __construct($nom,$prenom,$bureau_de_vote)
    {
        parent::__construct($nom,$prenom);
        $this->bureau_de_vote=$bureau_de_vote;
    }
    public function avoter()
    {
        $this->vote=TRUE;
    }
}
//Création d'objets
$client1 = new client("Ben Ahmed","Jamel","Bizerte");
echo "<h4>", $client1->getcoord()," </h4>";
$electeur1 = new electeur("Taieb","Mahdi","Sfax");
//L'électeur vote
$electeur1->avoter();
//Controle du vote
if($electeur1->vote)
{
    echo "L'électeur $electeur1->prenom $electeur1->nom inscrit au bureau $electeur1->bureau_de_vote a voté <br />";
}
else
{
    echo "L'électeur $electeur1->prenom $electeur1->nom inscrit au bureau $electeur1->bureau_de_vote peut encore voter <br />";
}
?>