<?php
include("personneQ.php");
include("client.php");
include("electeur.php");

//Création d'objets
$client1 = new Client("Ben Ahmed","Jamel","Bizerte");
echo "<h4>", $client1->getcoord()," </h4>";
$electeur1 = new Electeur("Taieb","Mahdi","Sfax");
//L'électeur vote
$electeur1->avoter();
echo $electeur1->getY();
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