<?php 
require_once("../classes/Work.php");
session_start();

if($_POST){

        if(isset($_POST["addwork"])){

            $engr_id = $_SESSION["engineer_id"];

            $work_desc = $_POST["workdesc"];

            

           $workpic = $_FILES["workpic"];

           $work_title = $_POST["worktit"];

            
           if(($work_title == "")){
            $_SESSION["err_nwork"] = "AN ERROR WAS ENCOUNTERED, KINDLY MAKE SURE ALL FIELDS WITH THE * ARE FILLED, THEN TRY AGAIN";
            header("location:../editwork.php");
             exit();
           }

            if($workpic["size"]>3000000){
                $_SESSION["err_nwork"] = " picture is too large, maximum file size should be 3MB";
               header("location:../editwork.php");
                 exit();
            }
        
            if($workpic["error"] > 0){
                $_SESSION["err_nwork"] = " picture upload failed, kindly check your network connection or try again";
                header("location:../editwork.php");
                 exit();
            }
        
            $picext = ["image/png", "image/gif", "image/jpg", "image/jpeg"];
            $pictype = strtolower($workpic["type"]);
        
            if(!in_array($pictype, $picext)){
                $_SESSION["err_nwork"] = "Picture you tried uploading is in an invalid file format";
                header("location:../editwork.php");
                 exit();
            }
        
             $filename = time().$workpic["name"];
            $destination = __DIR__ ."/../workupload/".$filename;


           if (move_uploaded_file($workpic["tmp_name"], $destination)){

            $nwork = new Work();
            $nwork -> insertWork( $filename,$work_title,$work_desc,$engr_id);


           }

           if($nwork){
            
            $_SESSION["nwork"] = " WORK SUCCESSFULLY ADDED TO YOUR WORK-SECTION";
            header("location:../editwork.php");
             exit();

           }
           
          

            
           
        




        }


}else{
    header("location:engineerdashboard.php");
}