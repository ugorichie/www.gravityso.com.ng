<?php
session_start();


require_once("../classes/comment.php");
$newComment = new Comment();

    if($_POST){

         if(isset($_POST["submit"])){

             $en_id = $_POST['engineer_id'];

            $email = $_POST["email"];

            $comment = $_POST["comment"];

            if(isset($_POST["rating"])){
                $rating = $_POST["rating"];
            }

            $newComment = new Comment();
    $comment = $newComment -> addComment( $email, $comment,$rating, $en_id);
            if($comment){
               header("location:../dashboard.php?id=$en_id");
                exit();
            }

         }



    }else{
        header("location: dashboard.php");
    }


    