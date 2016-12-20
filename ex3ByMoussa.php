<?php
class Employe{
	protected $nom;
	protected $service;
	protected $anciennete;
	public function __construct($n,$s,$a){
		$this->nom=$n;
		$this->service=$s;
		$this->anciennete=$a;
	}
	public function calculerSalaire(){
		$salaire;
		if($this->anciennete<10){
			$salaire=400;
		}else{
		    $salaire=550;
		}
		return $salaire;
	}
	public function Affiche(){
		return "Le salaire de l'employé $this->nom du service $this->service ayant une ancienneté $this->anciennete ans est ". $this->calculerSalaire();
	}
}



class EmployePro extends Employe
{
	private $nbunite;
	public function __construct($n,$s,$a,$p)
	{
		parent::__construct($n,$s,$a);
		$this->nbunite=$p;
	}
	public function calculerSalaire(){
		$salaire = parent::calculerSalaire() + $this->nbunite*5;
		return $salaire;
	}
	public function Affiche(){
		return $info= "Le salaire de l'employé $this->nom du service $this->service ayant une ancienneté $this->anciennete ans est " . $this->calculerSalaire() ;
	}

}
$empl1 = new Employe("Salah","Vente",19);

echo $empl1->Affiche();
echo "<hr/>";
$empl2 = new EmployePro("Ahmed","Production",9,5);

echo $empl2->Affiche();
?>
