<?php
session_start();

require_once("../classes/Engineer.php");

if($_POST){

    if(isset($_POST["login"])){
        
        $email = $_POST["logemail"];
        $password = $_POST["password"];
       

        //VALIDATE EMPTY FIELDS
        if(empty($email) || empty($password)){

             $_SESSION["sum_form_error"] = "All fields are required.";
           header("location:../register.php");
            exit();
        //   echo "all fields are required";
        //    // header("location: ../register.php");
        //     exit();
        }
    $userone = new Engineer();
    $result = $userone -> loginEngr($email , $password); //THIS WILL BE GOING TO THE ENGINEER METHOD TO LOG IN SUCCESSFULLY
    if(!$result){
        $_SESSION["sum_form_error"] = "either username or password is incorrect";
           header("location:../register.php");
            exit();
    }

    }

}

?>