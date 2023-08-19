<?php

require_once("Db.php");

class Admin extends Db{


    

    // THIS FUNCTION COUNTS ALL ENGINEERS REGISTERED ON THE SITE

    public function countEng(){
        $sql = "SELECT engineer_email FROM engineerdetails";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $count = $stmt -> rowCount();
         return $count;
    }


    // THIS FUNCTION COUNTS ALL THE ENGINEERS REGISTERED IN A PARTICULAR STATE

    public function countStateEng($state_id){
        $sql = "SELECT engineer_email FROM engineerdetails where state_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$state_id]);
        $count = $stmt -> rowCount();
         return $count;
    }


    // THIS FUNCTIONS RETRIEVES/GETS ALL THE DETAILS OF ENGINEERS AND DISPLAYS THEM IN AN ASSOCIATIVE ARRAY

    public function getEngr(){
        $sql = "SELECT * FROM engineerdetails ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);
        $count = $stmt -> fetchAll(PDO:: FETCH_ASSOC);
         return $count;
    }


    // THIS FUNCTION DELETES DETAILS OF AN ENGINEER USING THE ENGINEER Id, AVAILABLE ONLY FOR THE ADMIN

    public function delEngr($engineer_id){
        $sql = "DELETE FROM engineerdetails where engineer_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $count =  $stmt->execute([$engineer_id]);
        
         return $count;
    }


    // THIS FUNCTION COUNTS THE NUMBER OF COMMENTS ON AN ENGINEER, 

    public function countComEng($engineer_id){
        $sql = "SELECT * FROM comment where engineer_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$engineer_id]);
        $count = $stmt -> rowCount();
         return $count; 
    }


    // THIS FUNCTION COUNTS THE NUMBER OF WORK POSTED BY THE ENGINNER

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

