<?php
session_start();
include('controller/Users.php');


// -----------------------ADMIN login---------------------------------


if (isset($_POST['email']) && isset($_POST['password'])) {

    $logUser = Users::getUserByEmailPassword($_POST['email'], $_POST['password']);

    if (isset($logUser)) {
        $_SESSION['user'] = $logUser->user_id;
        header("Location:posts/posts.php");
    } 
}
    // else {
    //     header("Location:index.php?err=email or password is incorrect!");
    // }
else {
    header("Location:index.php?err=email or password isfield empty!");
}
