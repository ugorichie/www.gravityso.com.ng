<?php

require_once("Db.php");

class Sub extends Db{



    public function addSub( $sub_amount, $expire_date, $engineer_id){
        $sql = "INSERT INTO subscription(sub_amount, expire_date, engineer_id) VALUES (?,?,?)";
        $stmt = $this -> connect() -> prepare($sql);
      $result =  $stmt -> execute([$sub_amount, $expire_date, $engineer_id]);
        return $result;
    }

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