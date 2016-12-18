<?php

/**
 * Created by PhpStorm.
 * User: tchernobyl
 * Date: 12/18/16
 * Time: 1:06 AM
 */
class RequestSQL
{


    public $type;
    private $request;
    public $fieldsSearch=array();
    public $fieldsValues=array();
    public $table;



    /**
     * @param $fieldName
     * @param $fieldValue
     * @return $this
     */
    public function addField($fieldName, $fieldValue){


        $this->fieldsValues[$fieldName]=$fieldValue;

        return $this;
    }
    public function addFilters($filterName, $filterValue){


        $this->fieldsSearch[$filterName]=$filterValue;

        return $this;
    }

    public function execute(){
        $this->generateSqlRequest();
        return $this->request;

    }
    private function generateSqlRequest(){
        $req="";
        if($this->type=="post"){
            $req="insert into ".$this->table;
            $req1="";
            $req2="";
            $i= 0;
            foreach ($this->fieldsValues as $key => $value) {
                if($i> 0){
                    $req1.=",";
                    $req2.=",";
                }
                $req1.=$key;
                $req2.="'".$value."'";
                $i++;
            }

            $req.="(".$req1.") VALUES (".$req2.");";

        }
        if($this->type=="getList"){
            $req="select * from ".$this->table.";";

        }
        if($this->type=="getOneById"){
            $req="select * from ".$this->table." where  ";
            $i= 0;
            foreach ($this->fieldsSearch as $key => $value) {
                if($i> 0){
                    $req.=" and ".$key." = ".$value ;

                }
                $req.=" ".$key." = ".$value ;
                $i++;
            }

            $req.= ";";
        }
        $this->request=$req;
        return $req;
    }
}