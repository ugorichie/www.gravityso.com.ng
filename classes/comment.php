<?php
require_once("Db.php");


class Comment extends Db{


    public function addComment($comment_email, $commenter_message, $rating, $engineer_id){
        $sql = "INSERT INTO comment(commenter_email, comment_message, rating, engineer_id ) VALUES (?,?,?,?)";
        $stmt = $this-> connect() -> prepare($sql);
       $result =  $stmt->execute([$comment_email, $commenter_message, $rating, $engineer_id]);

        return $result;
    }


    
    public function getComment( $engineer_id){
        $sql = "SELECT * FROM comment WHERE engineer_id = ?";
        $stmt = $this-> connect() -> prepare($sql);
         $stmt->execute([$engineer_id]);
        $result= $stmt->fetchAll(PDO:: FETCH_ASSOC);
        return $result;
    }



}

// $newComment = new Comment();
// $newComment -> getComment($);