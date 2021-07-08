<?php

include('../config/dbconnection.php');

// New Comment
class Comments
{


    public  static function newComment($post_id, $comment, $user_id)
    {
        global $pdo;
        $sql = "INSERT INTO comments(post_id, comment, user_id)
                        VALUES(?,?,?)";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute([$post_id, $comment, $user_id]);
        return $row;
    }
    // Delete an users
    public  static function deleteComment($id)
    {
        global $pdo;
        $sql = "DELETE FROM comments WHERE comment_id =?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
    }

    // Get all comments on a User
    public  static function getCommentsByPostId($id)
    {
        global $pdo;
        $sql = "SELECT * FROM comments WHERE post_id =? ORDER BY `comments`.`created_at` DESC";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute([$id]);
        $row = $statement->fetchAll(PDO::FETCH_OBJ);
        return $row;
    }


    // Get All Comments
    public  static function getAllComments()
    {
        global $pdo;
        $sql = "SELECT * FROM `comments` ORDER BY `comments`.`created_at` DESC";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_OBJ);
        return $row;
    }
}

if(isset($_POST['comment'])){
    $post = $_POST['post']; 
    $user = $_POST['user'];
    $comment = $_POST['comments'];
    if(Comments::newComment($post, $comment, $user)){

        header("Location:../posts/postComments.php?post_id=".$post);
    }
}
