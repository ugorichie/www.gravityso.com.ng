<?php

require_once("Db.php");

class Admin extends Db{


    // public function countEng(){
    //     $sql = "SELECT COUNT(engineer_email) FROM engineerdetails";
    //     $stmt = $this->connect()->prepare($sql);
    //    $stmt->execute();
    //     $count = $stmt -> fetchAll(PDO:: FETCH_ASSOC);
    //     return $count;
    // }

    public function countEng(){
        $sql = "SELECT engineer_email FROM engineerdetails";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $count = $stmt -> rowCount();
         return $count;
    }




    public function countStateEng($state_id){
        $sql = "SELECT engineer_email FROM engineerdetails where state_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$state_id]);
        $count = $stmt -> rowCount();
         return $count;
    }



    public function getEngr(){
        $sql = "SELECT * FROM engineerdetails ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);
        $count = $stmt -> fetchAll(PDO:: FETCH_ASSOC);
         return $count;
    }

    public function delEngr($engineer_id){
        $sql = "DELETE FROM engineerdetails where engineer_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $count =  $stmt->execute([$engineer_id]);
        
         return $count;
    }


    public function countComEng($engineer_id){
        $sql = "SELECT * FROM comment where engineer_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$engineer_id]);
        $count = $stmt -> rowCount();
         return $count;
    }


    public function countWork($engineer_id){
        $sql = "SELECT * FROM engineerwork where engineer_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$engineer_id]);
        $count = $stmt -> rowCount();
         return $count;
    }




}

// $newAdmin = new Admin();
// $newAdmin = $newAdmin-> countWork(16);

