<?php
include('../controller/Posts.php');

Posts::deletePost($_GET['post_id']);
header("Location:myposts.php");

