<?php
include("request.php");
/**
 * Created by PhpStorm.
 * User: tchernobyl
 * Date: 12/17/16
 * Time: 11:18 PM
 */
class orm
{



    private $username;
    private $password;
    private $host;
    private $dataBase;
    private $connexion;

    public function __construct($user,$password,$host,$database){


        $this->host=$host;
        $this->username=$user;
        $this->dataBase=$database;
        $this->password=$password;

    }

    public function connexion()
    {
         return $this->connexion = new mysqli($this->host,$this->username,$this->password,$this->dataBase);

    }

    public function postModel($object){
        $request=new RequestSQL();
        $request->type="post";
        $request->table=$object->nomTableau();
        $this->prepareObject($object,$request);

        $result=$this->executeRequest($request,$object);
        $generatedId=$this->connexion->insert_id;
        $object->setId($generatedId);

        return($result);

    }

    public function selectModels($object){
        $request=new RequestSQL();
        $request->type="getList";
        $request->table=$object->nomTableau();


        $result=$this->executeRequest($request,$object);

        return $result;


    }
    public function selectModelById($object,$id){
        $request=new RequestSQL();
        $request->type="getOneById";
        $request->table=$object->nomTableau();

        $request->addFilters("id",$id);

        var_dump($request);
        $result=$this->executeRequest($request,$object);

        return $result;

    }

    private function executeRequest($request,$object){

        $result=$this->connexion->query($request->execute());

        if($request->type=="getOneById"){
            if(!$result)
            {
                return array(
                    "status"=>false,
                    "code"=>404,
                    "data"=>array()
                );
            }
            else
            {
                $liatObject=array(
                    "status"=>true,
                    "code"=>200,
                    "data"=>array()
                );
                $rules=$object->getRules();


                while ($row = mysqli_fetch_assoc($result)) {

                    foreach ($row as $key => $value) {


                        call_user_func( array( $object, 'set'.ucfirst($key) ),array($value) );

                    }

                    array_push($liatObject["data"],$row);
                }
                return $liatObject;
            }
        }
        if($request->type=="getList"){
            if(!$result)
            {
                return array(
                    "status"=>false,
                    "code"=>200,
                    "data"=>array()
                );
            }
            else
            {
                $liatObjects=array(
                    "status"=>true,
                    "code"=>200,
                    "data"=>array()
                );



                while ($row = mysqli_fetch_assoc($result)) {

                    $objectInstance=$object;
                    foreach ($row as $key => $value) {


                        call_user_func( array( $objectInstance, 'set'.ucfirst($key) ),array($value) );

                    }

                    array_push($liatObjects["data"],$objectInstance);
                    echo 44;
                }

////Lecture des résultats
//                while ($row = $result->fetch_array(MYSQLI_NUM))
//                {
//                    foreach($row as $donn=>$d)
//                    {
//                        echo $d." ".$donn."<br>";
//                    }
//                    echo "<hr />";
//                }
                return $liatObjects;
            }
        }
        if($request->type=="post"){

            if($result)
            {
                return array(
                    "status"=>true,
                    "code"=>200,
                    "data"=>$object
                );

            }
            else
            {

                return array(
                    "status"=>false,
                    "code"=>500,
                    "data"=>$object
                );
            }
        }


    }
    private function prepareObject($object,$request){
        $results=array();

        $results['errors']=array();
        $results['messages']=array();

        $attributes=$object->getAttributs();
        $rules=$object->getRules();


        foreach ($attributes as $key => $value) {

            if(array_key_exists($key, $rules)){
                $rule=$rules[$key];
                if($rule['required']){

                    if(!$value){
                        array_push($results['errors'],array(
                            "code"=>400,
                            "message"=>"field ".$rule['name']." can not be empty",
                            "field"=>$key,
                            "fieldName"=>$rule['name']
                        ));

                    }else{
                        $request->addField($key,$value);


                    }
                }
            }


        }


        $results["request"]=$request;

       return $results;

    }

    public function getAttributs()
    {
        $arr = array();
        foreach ($this as $key => $value) {
            $_arr = array($key => $value);
            array_push($arr, $_arr);

        }
        return $arr;
    }
}