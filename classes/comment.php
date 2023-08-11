<?php
require_once("Db.php");


class Comment extends Db{

    // THIS FUNCTION IS RESPONSIBLE FOR ADDING VISITORS COMMENTS AND RATINGS TO THE DATABASE
    
    public function addComment($comment_email, $commenter_message, $rating, $engineer_id){
        $sql = "INSERT INTO comment(commenter_email, comment_message, rating, engineer_id ) VALUES (?,?,?,?)";
        $stmt = $this-> connect() -> prepare($sql);
       $result =  $stmt->execute([$comment_email, $commenter_message, $rating, $engineer_id]);

        return $result;
    }


    // THIS FUNCTION FETCHES ALL COMMENTS FROM THE DATABASE WITH RESPECT TO THE PARTICULAR ENGINEER AND DISPLAYS THEM ON THE CLIENT SIDE OF THE ENGINNER DASHBOARD

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