<?php
require("example.php");


$action1= new action();
$action1->nom = "Mortendi";
$action1->cours = 15.15;
//Utilisation des propriétés
echo "<b>L action $action1->nom cotée à la $action1->bourse vaut  $action1->cours </b><hr><hr>";
//Appel d'une méthode
$action1->info();
echo "La structure de l'objet \$action1 est : <br>";
//La fonction var_dump() permet d’afficher le nom, le type et la valeur de chaque propriété
var_dump($action1);
// Lire l’ensemble des propriétés de l’objet $action1 à l’aide d’une boucle foreach
echo "<h4>Descriptif de l'action</h4>";
foreach($action1 as $prop=>$valeur)
{
    echo "$prop = $valeur <br />";
}
//Vérifier si $action1 est une instance de la classe action
if($action1 instanceof action) echo "<hr />L'objet \$action1 est du type action";