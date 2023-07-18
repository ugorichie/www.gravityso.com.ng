<?php
require_once("Db.php");
class Collab extends Db{




    public function addCollab($collab_title, $collab_role, $collab_address,$engineer_id){
        $sql = "INSERT INTO collab(collab_title, collab_role, collab_address, engineer_id) VALUES (?,?,?,?)";
        $stmt = $this -> connect() -> prepare($sql);
        $result = $stmt -> execute([$collab_title, $collab_role, $collab_address,$engineer_id]);
        return $result;
    }


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