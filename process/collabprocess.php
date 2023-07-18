<?php

session_start();
require_once("../classes/collab.php");
$collabs = new Collab;


if($_POST){

    if(isset($_POST["addcollab"])){

        $engineer_id = $_SESSION["engineer_id"];

        $role = $_POST["role"];

        $title = $_POST["title"];

        $address = $_POST["address"];

       $collaboration = $collabs -> addcollab($title, $role, $address,$engineer_id);

       if($collaboration){
        $_SESSION["collab"] = " COLLABORATON ADDED SUCCESFULLY";
           header("location:../engineercollab.php");
            exit();
       }
    }
}