<?php
    session_start();

if($_POST){
    if(isset($_POST["logout"])){
        session_destroy();
        header("location:../register.php");
        // exit();
    }

}
