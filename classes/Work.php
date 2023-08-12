<?php
require_once("Db.php");

class Work extends Db{

// THIS FUNCTION IS RESPONSIBLE FOR INSERTING ENGINEERS WORK INTO THE DATABASE

public function insertWork($work_image,$work_title,$work_description,$engineer_id){
    $sql = "INSERT INTO engineerwork (work_image,work_title,work_description,engineer_id) VALUES (?,?,?,?)";
    $stmt = $this-> connect() -> prepare($sql);
    $success = $stmt -> execute([$work_image,$work_title,$work_description,$engineer_id]);
    if($success){
        return ("work added successfully");
    }

}

// RESPONSIBLE FOR FECTHING WORKS UPLOADED INTO THE DATABASE BY THE ENGINEER 

public function getWork($engineer_id){
    $sql = "SELECT * FROM engineerwork WHERE engineer_id = ?";
    $stmt = $this-> connect() -> prepare($sql);
     $stmt ->execute([$engineer_id]);
     $engr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
     return ($engr);
    

}



}

// $nwork = new Work();
// echo "<pre>";
// print_r ($nwork -> getWork(16));
// echo "</pre>";