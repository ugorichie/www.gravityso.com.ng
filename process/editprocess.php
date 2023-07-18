<?php
require_once("../classes/Engineer.php");
session_start();
    

if($_POST){

    if(isset($_POST["update"])){

        if(!isset($_POST["state"])){
            $state = $_POST["state"]; 
        }

        if(!isset($_POST["yoe"])){
            $yoe = $_POST["yoe"]; 
        }


        $engr_id = $_SESSION["engineer_id"];

        $fullname = $_POST["fname"];

        $lastname = $_POST["lname"];

        $othername = $_POST["oname"];

        $state = $_POST["state"];
        
        $yoe = $_POST["yoe"];

        $phone = $_POST["phone"];

        $pic = $_FILES["pic"];


    if($pic["size"]>3000000){
        $_SESSION["sum_form"] = " picture is too large, maximum file size should be 3MB";
        header("location:../editprofile.php");
         exit();
    }

    if($pic["error"] > 0){
        $_SESSION["sum_form"] = " picture upload failed, kindly check your network connection or try again";
        header("location:../editprofile.php");
         exit();
    }

    $picext = ["image/png", "image/gif", "image/jpg", "image/jpeg"];
    $pictype = strtolower($pic["type"]);

    if(!in_array($pictype, $picext)){
        $_SESSION["sum_form"] = "Picture you tried uploading is in an invalid file format";
        header("location:../editprofile.php");
         exit();
    }

     $filename = time().$pic["name"];
    $destination = __DIR__ ."/../upload/".$filename;
    //move_uploaded_file($pic["tmp_name"], $destination);
    //$result = move_uploaded_file($pic["tmp_name"], $destination); 

     if(move_uploaded_file($pic["tmp_name"], $destination)){

        $engr1 = new Engineer();
        $response = $engr1-> updateEngineerDetails($engr_id, $fullname, $lastname, $othername, $yoe, $phone,$filename ,$state);
 
     }

        if($response){
            $_SESSION["sum_form_error"] = " Profile Successfully Updated";
           header("location:../editprofile.php");
            exit();
        }


 }

}