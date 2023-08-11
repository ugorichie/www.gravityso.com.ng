<?php
require_once("Db.php");
class Collab extends Db{


    // THIS FUNCTIONS MAKES IT POSSIBLE FOR ENGINEERS TO ADD COLLABORATIONS (PREVIOUS PROJECTS THEY COLLABORATED ON )

    public function addCollab($collab_title, $collab_role, $collab_address,$engineer_id){
        $sql = "INSERT INTO collab(collab_title, collab_role, collab_address, engineer_id) VALUES (?,?,?,?)";
        $stmt = $this -> connect() -> prepare($sql);
        $result = $stmt -> execute([$collab_title, $collab_role, $collab_address,$engineer_id]);
        return $result;
    }


    // THIS FUNCTION IS RESPONSIBLE FOR FETCHING ALL THE COLLABORATIONS IN THE DATABASE AND LISTING THEM WITH RESPECT TO THE ENGINEER, USING THE ENGINEER ID. AND ITS DISPLAYED ON THE CLIENT SIDE OF THE ENGINEER DASHBOARD

    public function getCollab($engineer_id){
        $sql = "SELECT * FROM collab WHERE engineer_id = ?";
        $stmt = $this -> connect() -> prepare($sql);
        $stmt -> execute([$engineer_id]);
        $result = $stmt -> fetchAll(PDO:: FETCH_ASSOC);
        return $result;

    }
}

// $collabs = new Collab;
// $collabs -> addcollab(4);