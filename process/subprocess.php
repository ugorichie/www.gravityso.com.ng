 <?php
    session_start();
    require_once("../classes/Engineer.php");
    
    require_once("../classes/subscription.php");
    $subb = new Sub();


 if($_POST){
    if(isset($_POST["sub"])){
     $engineer_id= $_SESSION["engineer_id"];
    $date = $_POST["subdate"];
    $amount = $_POST["amount"];

    $oneYearLater = date('Y-m-d', strtotime($date . ' +1 year'));

   
    $subb -> addSub($amount, $oneYearLater, $engineer_id);
   
    

    if($subb){
        $_SESSION["sum"] = "YOU HAVE SUCCESSFULLY RENEWED YOUR SUBSCRIPTION, YOU SUBSCRIPTION EXPIRES ON $oneYearLater";
           header("location:../engineersub.php");
            exit();
    }

}
    

}

// link
// https://chat.openai.com/share/469ce40c-007b-42df-8201-3eb3594ebafd
?>