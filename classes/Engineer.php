<?php
require_once("Db.php");

class Engineer extends Db{



     public function registerEngr($engineer_firstname,$engineer_lastname, $engineer_othername, $engineer_gender, $engineer_YOE, $engineer_DOB,      $engineer_email,$engineer_password,$engineer_phone,$state_id){

        $sql = "SELECT * FROM engineerdetails WHERE engineer_id = ?";
        $stmt = $this-> connect() -> prepare($sql);
        $stmt->execute([$engineer_email]);

        // Do a rowcount()on the database, if rowcount is 1, means the email is already in use.
            $stmt->rowCount();
            $engrcount = $stmt->rowCount();
            
            if($engrcount > 0){
                echo " Email already in use ";
                exit();
            }

        // INSERTION  METHOD STARTS HERE!
            $sql = "INSERT INTO engineerdetails (engineer_firstname,engineer_lastname, engineer_othername, engineer_gender, engineer_YOE, engineer_DOB,engineer_email,engineer_password,engineer_phone, state_id) VALUES (?,?,?,?,?,?,?,?,?,?)";

            $stmt = $this->connect()->prepare($sql);

          $engineer = $stmt->execute([$engineer_firstname,$engineer_lastname, $engineer_othername, $engineer_gender, $engineer_YOE, $engineer_DOB,$engineer_email,$engineer_password,$engineer_phone, $state_id]);

          return $engineer;


        }


  //LOGIN METHOD 

  public function loginEngr($email, $password){
    //check if the email is in the database when user wants to log in
    $sql = "SELECT * FROM engineerdetails WHERE engineer_email = ?";
    $stmt = $this-> connect() -> prepare ($sql);
    $stmt->execute([$email]);
    // Do a rowcount()on the data base, if rowcount is less than 1, means the email is not there, so echo to the user on line 51
    $stmt->rowCount();
    $engrnum = $stmt->rowCount();
    
    if($engrnum < 1){
        return false;
        echo "Either username or pass wordword is incorrect ";
        exit();
    }

    //fetch the associative array of the engineer
    $engr = $stmt->fetch(PDO::FETCH_ASSOC);
    $engr["engineer_password"];
    //since we need only the password, get password of the user
   // this is how to get the password from the database, from the array 

     password_verify($password, $engr["engineer_password"]);

    if(password_verify($password, $engr["engineer_password"])){
        session_start();
        //if the password is correct, we want to store all thier details in a $_SESSION. this would help me store in the server and easy for me to display on thier profile / dashboard when i want to show their details

    $_SESSION["engineer_id"] = $engr["engineer_id"];
    $_SESSION["role"] = $engr["role"];
    $_SESSION["engineer_firstname"] = $engr["engineer_firstname"];
    $_SESSION["engineer_lastname"] = $engr["engineer_lastname"];
    $_SESSION["engineer_othername"] = $engr["engineer_othername"];
    $_SESSION["engineer_YOE"] = $engr["engineer_YOE"];
    $_SESSION["engineer_state"] = $engr["state_id"];
    $_SESSION["engineer_phone"] = $engr["engineer_phone"];
    

    if($engr["role"] === "engineer"){
       header("location: ../engineerdashboard.php");
      
    }else if($engr["role"] === "admin"){
      header("location: ../adminprofile.php");
    }else{
        session_destroy();
        header("location: ../register.php");
        exit();
    }
        exit();
   //  }
}else{
    return false;
}

}

        //Method to fetch engineerdatails using the ID
         public function getEngineerDetails($engineer_id){
            
            $sql = "SELECT * FROM engineerdetails left join state ON engineerdetails.state_id = state.state_id WHERE engineerdetails.engineer_id = ? ";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$engineer_id]);
            $engr = $stmt->fetch(PDO::FETCH_ASSOC);
            return $engr;



        }


        //METHOD TO UPDATE PROFILE
      public function updateEngineerDetails($engineer_id, $engineer_firstname,$engineer_lastname,$engineer_othername,$engineer_YOE, $engineer_phone, $engineer_image, $state_id ){
        $sql = "UPDATE engineerdetails SET engineer_firstname= ?, engineer_lastname= ?,engineer_othername= ?,engineer_YOE= ?,engineer_phone = ?,engineer_image = ?, state_id = ? WHERE `engineer_id`=?";
        $stmt = $this->connect()->prepare($sql);
        $response = $stmt->execute([$engineer_firstname,$engineer_lastname,$engineer_othername,$engineer_YOE, $engineer_phone,$engineer_image,$state_id,$engineer_id]);
        
        return $response;


    }



 // updating users password
    public function updatePassword ($engineer_id, $oldpassword, $newpassword){
    $sql = "SELECT * FROM engineerdetails WHERE engineer_id= ?";
    $stmt = $this-> connect() -> prepare ($sql);
    $stmt->execute([$engineer_id]);
    $engineer = $stmt-> fetch(PDO:: FETCH_ASSOC);

    //CHECKING IF PASSWORD PROVIDED MATCHES THE PASSWORD STORED IN THE DATABASE
    if(password_verify($oldpassword, $engineer["engineer_password"])){
        $sql = "UPDATE engineerdetails SET engineer_password = ? WHERE engineer_id =  ?";
        $stmt = $this->connect()->prepare($sql);
        $updatedUser =  $stmt -> execute ([$newpassword, $engineer_id]);
        return $updatedUser;
    }else{
    $_SESSION["err_pass"] = "OLD PASSWORD IS NOT CORRECT, PLEASE TRY AGAIN";
                    header("location:../changepassword.php");
    }

}


    public function fetchEngineer($state_id){
        $sql = "SELECT * from engineerdetails  join state ON engineerdetails.state_id = state.state_id WHERE state.state_id = ? ";
        $stmt = $this->connect() -> prepare($sql);
        $stmt -> execute([$state_id]);
        $fet = $stmt->fetchAll(PDO::FETCH_ASSOC);
         return $fet;

    }


    public function showEngineer($engineer_id){
        $sql = "SELECT * FROM engineerdetails WHERE engineer_id = ?";
        $stmt = $this->connect()-> prepare($sql);
        $stmt->execute([$engineer_id]);
        $show = $stmt -> fetch(PDO::FETCH_ASSOC);
        return $show;
    }





  }


// $engr = new Engineer( );
// $resp = $engr -> fetchEngineer("4") ;
// echo"<pre>";
// print_r($resp);
// echo"</pre>";

