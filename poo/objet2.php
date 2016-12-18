<?php
class action
{
//Constante
    const PARIS="Palais Brognard";
//variables propres de la classe
    public $nom;
    public $cours;
    public $bourse="bourse de Paris ";
//fonction propre de la classe
    public function info()
    {
        echo "Informations en date du ",date("d/m/Y H:i:s"),"<br>"; $now=getdate();
        $heure= $now["hours"];
        $jour= $now["wday"];
        echo "<h3>Horaires des cotations</h3>";
        if(($heure>=9 && $heure <=17)&& ($jour!=0 && $jour!=6))
        { echo "La Bourse de Paris est ouverte <br>"; }
        else
        { echo "La Bourse de Paris est fermée <br>"; } if(($heure>=16 && $heure <=23)&& ($jour!=0 && $jour!=6) )
    { echo "La Bourse de New York est ouverte <hr>"; }
    else
    { echo "La Bourse de New York est fermée <hr>"; }
    }
}
?>