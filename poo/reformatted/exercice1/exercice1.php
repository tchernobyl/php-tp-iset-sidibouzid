<?php
class personne
{
    private $nom;
    private $prénom;
    public $adresse;
//Constructeur
    public function __construct($nom,$prénom)
    {
        $this->nom=$nom;
        $this->prénom=$prénom;
    }
    public function getpersonne()
    {
        $texte=" $this->prénom $this->nom <br /> $this->adresse <br />";
        return $texte;
    }
//
    public function setadresse($adresse)
    {
        $this->adresse=$adresse;
    }
}
//Création d'objets
$client = new personne("Geelsen","Jan");
$client->adresse=("jjdjjdjd");
echo $client->getpersonne();
//Modification de l'adresse

?>