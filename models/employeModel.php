<?php
include_once ('../lib/connection.php');
include ('queries.php');


class employe_model{
    private $stmt;
    public $rs;

    public function viewEmploye(){
      global $conn, $SELECT_EMPLEADOS;
      $stmt = $conn->Prepare($SELECT_EMPLEADOS);
      $rs = $conn->GetArray($SELECT_EMPLEADOS);
      return $rs;
    }


    public function updateEmploye($objectEmploye){
      global $conn,$UPDATE_EMPLEADOS;
      $conn->StartTrans();
      $conn->Execute($UPDATE_EMPLEADOS,$this->objectToArray($objectEmploye)); //NEW A EMPLOYE
      if($conn->HasFailedTrans()){
          $message = false;
      }else{
          $message = true;
      }
      $conn->CompleteTrans();
      echo $message;
    }

    public function deleteEmploye($idEmploye){
      global $conn,$DELETE_EMPLOYE;
      $conn->StartTrans();
      $conn->Execute($DELETE_EMPLOYE,$idEmploye); //DELETE A EMPLOYE
      if($conn->HasFailedTrans()){
          $message = false;
      }else{
          $message = true;
      }
      $conn->CompleteTrans();
      echo $message;
    }

    public function objectToArray($object){
      $newArray = array();
      $i=0;
      foreach ($object as $value) {
        $newArray[$i]=$value;
        $i++;
      }
      return $newArray;
      }

}


?>
