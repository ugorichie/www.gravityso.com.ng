<?php
    session_start();
    require_once("../classes/Engineer.php");
    if($_POST){

            if(isset($_POST["change"])){

                $oldpassword = $_POST["pass"];

                $newpassword = $_POST["newpass"];

                $engineer_id = $_SESSION["engineer_id"];

                //HASH THE NEW PASSWORD BEFORE SENDING IT TO THE METHOD
                $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);

                if(empty($oldpassword) || empty($newpassword)){
                    $_SESSION["err_pass"] = "BOTH FIELDS ARE REQUIRED";
                    header("location:../changepassword.php");
                    // exit();
                   
                }
            }


            $engr = new Engineer();
            $result = $engr -> updatePassword($engineer_id, $oldpassword, $newpassword );


            if($result == 1){
                $_SESSION["pass"] = "PASSWORD SUCCESSFULLY CHANGED";
                header("location:../changepassword.php");
                    exit();
            }
            





    }




?>