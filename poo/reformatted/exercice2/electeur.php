<?php
//Classe electeur

class Electeur extends PersonneQ
{

    public $bureau_de_vote;
    public $vote;
    function __construct($nom,$prenom,$bureau_de_vote)
    {
        parent::__construct($nom,$prenom);

        $this->bureau_de_vote=$bureau_de_vote;
    }
    public function getY(){
        return $this->getT()."dd";
    }
    public function faireDuSport(){
        return 6;
    }
    public function avoter()
    {
        $this->vote=TRUE;
    }
}