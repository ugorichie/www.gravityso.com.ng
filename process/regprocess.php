<?php
session_start();

    require_once("../classes/Engineer.php");
    $engineerOne = new Engineer();

    if($_POST){
        
      if(isset($_POST["reg"])){

        
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $oname = $_POST["oname"];
        $dob = $_POST["dob"]; 
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $confirmpass = $_POST["confirmpass"];
        $phone = $_POST["phone"];
        

        if(isset($_POST["state"]) ){
             $state = $_POST["state"];
         }
 

        if(isset($_POST["gender"]) ){
            $gender = $_POST["gender"];
        }

        if(isset($_POST["yoe"]) ){
             $yoe = $_POST["yoe"];
        }




         //VALIDATE EMPTY FIELDS
         if(empty($fname) || empty($lname) || empty($gender) || empty($yoe) || empty($dob) ||empty($email) || empty($pass) || empty($phone) || empty($state)){

            $_SESSION["form"] = "REGISTRATION FAILED: &nbsp; &nbsp; All fields with * are required";
        header("location:../register.php");
         exit();
        }

        //VALIDATE PASSWORD LENGTH
        if(strlen($pass) < 8){
            $_SESSION["form"] = "REGISTRATION FAILED: &nbsp; Password must be more than 8 characters 'consisting letters/specialcharacters/numbers' ";
        header("location:../register.php");
         exit();
        }

        //VALIDATE PASSWORD AND CONFIRM PASSWORD 
        if($pass !== $confirmpass){
            $_SESSION["form"] = " REGISTRATION FAILED: &nbsp; Password and Confirm Password Must Be The Same, please complete your registration registration";
        header("location:../register.php");
         exit();
        }

        //encrypt the password ,to make it more secure.
        $pass = password_hash($pass, PASSWORD_DEFAULT);


        $engr1 = $engineerOne->registerEngr ( $fname, $lname, $oname,$gender,$yoe, $dob, $email, $pass, $phone,$state);

        if($engr1){
            $_SESSION["success_form"] = " REGISTRATION SUCCESSFULL: &nbsp; you can now log into your dashboard with your details";
        header("location:../register.php");
         exit();
        }


        }







    }else{
        header("location:../register.php");
    }
