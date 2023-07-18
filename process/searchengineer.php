<?php
require_once("../classes/Engineer.php");
$engr = new Engineer( );
session_start();



if($_POST){

    if(isset($_POST["butn"])){

        if(isset($_POST["state"])){
        $key = $_POST["state"];
        
        }

     $resp = $engr -> fetchEngineer($key) ;

     if($resp){
        header("location: ../clientlist.php?id=$key");
     }
    //  echo"<pre>";
    //  print_r($resp);
    //  echo"</pre>";


     $respcount = count((array) $resp);
          
        if($respcount < 1){
            $_SESSION["sum_form_error"] = "SORRY!   There  are  NO  engineers  registered  in  this  state  currently";
               header("location:../client.php");
                exit();
            }

            

}
}else{
    header("location:../register.php");
}