<?php
    //THIS FILE WOULD CHECK IF A USER IS NOT LOGGED IN AND IT RIDEIRECTS HIM TO THE LOGIN PAGE;

     if(!isset($_SESSION["engineer_id"])){
        header("location: register.php");
        exit();
     }