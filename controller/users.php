<?php

include(__dir__ . '/../config/dbconnection.php');

// Register User
class Users
{


    public  static function registerUser($first_name, $last_name, $gender, $dob, $email, $phone, $password)
    {

        global $pdo;
        $sql = "INSERT INTO users(first_name, last_name, gender, dob, email, phone, password)
                        VALUES(?,?,?,?,?,?,?)";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute([$first_name, $last_name, $gender, $dob, $email, $phone, $password]);
        return $row;
    }
    // Update a User 
    public  static function updateUser($first_name, $last_name, $gender, $dob, $email, $phone, $password, $id)
    {
        global $pdo;
        $sql = "UPDATE users SET
           first_name = ?,
           last_name = ?, 
           gender = ?, 
           dob = ?,
           email = ?, 
           phone = ?, 
           password = ?
           WHERE id = ?
            ";

        $statement = $pdo->prepare($sql);
        $row = $statement->execute([$first_name, $last_name, $gender, $dob, $email, $phone, $password, $id]);
        echo $row;
        return $row;
    }
    // Delete an users
    public  static function deleteUser($id)
    {
        global $pdo;
        $sql = "DELETE FROM users WHERE post_id =?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
    }

    // Get a user by ID
    public  static function getUser($id)
    {
        global $pdo;
        $sql = "SELECT * FROM users WHERE user_id =?";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute([$id]);
        $row = $statement->fetch(PDO::FETCH_OBJ);
        return $row;
    }

    // Get an users by email
    public  static function getUserByEmail($email)
    {
        global $pdo;
        $sql = "SELECT * FROM users WHERE email =?";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute([$email]);
        $row = $statement->fetch(PDO::FETCH_OBJ);
        return $row;
    }

    // Get an users by email and password
    public  static function getUserByEmailPassword($email, $password)
    {
        global $pdo;
        $sql = "SELECT * FROM users WHERE email =? AND password =?";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute([$email, $password]);
        $row = $statement->fetch(PDO::FETCH_OBJ);
        return $row;
    }


    // Get All Users
    public  static function getAllUsers()
    {
        global $pdo;
        $sql = "SELECT * FROM users";
        $statement = $pdo->prepare($sql);
        $row = $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_OBJ);
        return $row;
    }
}

// $first_name, $last_name, $gender, $dob, $email, $phone, $password
if (isset($_POST["register"])) {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $gender = htmlspecialchars($_POST['gender']);
    $dob = htmlspecialchars($_POST['dob']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $repassword = htmlspecialchars($_POST['repassword']);


    if ($password == $repassword) {
        if(Users::getUserByEmail($email)){
            header("Location:../register.php?err=This email is already attached to an existing user");
        }
        else{
            if (Users::registerUser($first_name, $last_name, $gender, $dob, $email, $phone, $password)) {

                header("Location:../index.php?msg=Registration successful. You can log in now");
            } 

        }
    }
        else {
            header("Location:../register.php?err=Mismatched passwords");
    }
}
