<?php


class Client extends PersonneQ
{
    private $adresse;

    /**
     * Client constructor.
     * @param $nom
     * @param $prenom
     * @param $adresse
     */
    public function __construct($nom, $prenom, $adresse)
    {
        parent::__construct($nom,$prenom);
        $this->adresse=$adresse;
    }
    public function getcoord()
    {
        $info="Le client $this->prenom $this->nom habite $this->adresse <br />";
        return $info;
    }

    public function faireDuSport(){
        return 6;
    }

}
