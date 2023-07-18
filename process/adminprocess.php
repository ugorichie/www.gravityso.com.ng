<?php
require_once("../classes/Admin.php");
$newAdmin = new Admin();



if($_POST){

        if(isset($_POST["delprofile"])){

            $en_id = $_POST["en_id"];

            echo $en_id;

            $newAdmin = $newAdmin-> delEngr($en_id);

            if($newAdmin){
                header("location: ../adminprofile.php");
            }
        }




}