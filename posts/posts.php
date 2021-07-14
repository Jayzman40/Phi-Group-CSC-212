<?php
require_once('head.php');
require_once('navbar.php');
include('../controller/Posts.php');
include('../controller/Users.php');
include('../controller/Comments.php');

$allPosts = Posts::getAllPosts();
$postComments = Comments::getAllComments();
?>
