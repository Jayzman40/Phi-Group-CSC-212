<?php

// include(__dir__.'\..\config\dbconnection.php');
include('../config/dbconnection.php');

// New Post
class Posts
{

    public  static function newPost($user_id, $post)
    {
        global $pdo;
        $sql = "INSERT INTO posts(user_id,post) VALUES(?,?)";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute([$user_id, $post]);
        return $row;
    }
    // Update Post
    public  static function updatePost($post, $id)
    {
        global $pdo;
        $sql = "UPDATE admin SET
          post = ?
           WHERE id = ?
            ";

        $statement = $pdo->prepare($sql);
        $row = $statement->execute([$post]);
        echo $row;
        return $row;
    }
    // Delete a Post
    public  static function deletePost($id)
    {
        global $pdo;
        $sql = "DELETE FROM `posts` WHERE `posts`.`post_id`  =?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
    }


    // Get All Post
    public  static function getAllPosts()
    {
        global $pdo;
        $sql = "SELECT * FROM `posts` ORDER BY `posts`.`created_at` DESC";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_OBJ);
        return $row;
    }

    // Get my Posts
    public  static function getMyPosts($id)
    {
        global $pdo;
        $sql = "SELECT * FROM `posts` WHERE user_id =? ORDER BY `posts`.`created_at` DESC";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute([$id]);
        $row = $statement->fetchAll(PDO::FETCH_OBJ);
        return $row;
    }
    // Get a Post
    public  static function getPost($id)
    {
        global $pdo;
        $sql = "SELECT * FROM posts WHERE post_id = ?";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute([$id]);
        $row = $statement->fetch(PDO::FETCH_OBJ);
        return $row;
    }
}

if (isset($_POST["submit"])) {
    $post = ($_POST['post']);
    $user = ($_POST['user']);
    if (Posts::newPost($user, $post)) {

        header("Location:../posts/posts.php?msg=posted successfully!");
    }
}
