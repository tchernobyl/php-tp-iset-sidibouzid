<?php
/**
 * Created by PhpStorm.
 * User: tchernobyl
 * Date: 12/17/16
 * Time: 10:57 PM
 */

namespace isetsidibouzid;


class Etudiant
{

    private $id;
    private $nom;
    private $note1;
    private $note2;
    private $note3;


    public function __construct($nom= null,$note1=null,$note2=null,$note3=null)
    {
        $this->nom = $nom;
        $this->note1=$note1;
        $this->note2=$note2;
        $this->note3=$note3;
    }


    public function getRules()
    {
        return [

            "nom" => array(
                "name"=>"Nom Etudiant",
                "required"=>true
            ),
            "note1" => array(
                "name"=>"Note DS",
                "required"=>true
            ),
            "note2" => array(
                "name"=>"Note TP",
                "required"=>true
            ),
            "note3" => array(
                "name"=>"Note Examen",
                "required"=>true
            )
        ];
    }

    public static function nomTableau()
    {
        return "etudiant";
    }

    public function moyenne()
    {
        return (($this->getNote1() + $this->getNote2() + $this->getNote3()) / 3);
    }

    public function getAttributs()
    {
        $arr = array();
        foreach ($this as $key => $value) {

            $arr[$key]=$value;

        }
        return $arr;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNote1()
    {
        return $this->note1;
    }

    /**
     * @param mixed $note1
     */
    public function setNote1($note1)
    {
        $this->note1 = $note1;
    }

    /**
     * @return mixed
     */
    public function getNote2()
    {
        return $this->note2;
    }

    /**
     * @param mixed $note2
     */
    public function setNote2($note2)
    {
        $this->note2 = $note2;
    }

    /**
     * @return mixed
     */
    public function getNote3()
    {
        return $this->note3;
    }

    /**
     * @param mixed $note3
     */
    public function setNote3($note3)
    {
        $this->note3 = $note3;
    }


}