<?php

require_once("Db.php");

class Sub extends Db{

    //  THIS FUNCTION IS RESPONSIBLE FOR SENDING SUN DETAILS TO THE DATABASE

    public function addSub( $sub_amount, $expire_date, $engineer_id){
        $sql = "INSERT INTO subscription(sub_amount, expire_date, engineer_id) VALUES (?,?,?)";
        $stmt = $this -> connect() -> prepare($sql);
      $result =  $stmt -> execute([$sub_amount, $expire_date, $engineer_id]);
        return $result;
    }

    // WITH THE ENGINEER ID, THIS FUNCTION HELPS TO FETCH THE ENGINEER SUB DETAILS
    
    public function getSub(  $engineer_id){
        $sql = "SELECT * FROM subscription where engineer_id = ?";
        $stmt = $this -> connect() -> prepare($sql);
       $stmt -> execute([ $engineer_id]);
       $result = $stmt -> fetchAll(PDO:: FETCH_ASSOC);
      return ($result);
    }



}

// $subb = new Sub();
// echo "<pre>";
// print_r ($subb -> getSub( "14"));
// echo "</pre>";