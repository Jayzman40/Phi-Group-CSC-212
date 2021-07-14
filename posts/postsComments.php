<?php
require_once('head.php');
require_once('navbar.php');
include('../controller/Posts.php');
include('../controller/Users.php');
include('../controller/Comments.php');

$allPosts = Posts::getAllPosts();
$postComments = Comments::getAllComments();
?>

<div class="row mx-3">
  <div class="col-md-8">
    <h3>All Phi Members Posts</h3>
    <!-- Posts -->
    <?php foreach ($allPosts as $post) {

      $user = Users::getUser($post->user_id);
    ?>
      <div class="card mx-auto bg-light my-4" style="width: 80%;">
        <div class="card-body">
          <p class="card-subtitle mb-2 text-muted"><sub>posted by: <?= $user->first_name . " " . $user->last_name ?></sub>&nbsp;&nbsp;&nbsp;<sub><?= $post->created_at ?></sub></p>
          <p class="card-text"><?= $post->post ?></p>
          <a href="postComments.php?post_id=<?= $post->post_id ?>" class="card-link text-info" style="text-decoration:none">Comments<span class="badge bg-info"><?= count(Comments::getCommentsByPostId($post->post_id)) ?></span></a>

        </div>
      </div>

    <?php } ?>


  </div>
 <div class="col-md-4 bg-light ">
    <div class="user-section my-5">
      <hr>
      <div class="user-avatar my-5">
        <img src="<?= Users::getUser($_SESSION['user'])->profile ?>" alt="profile" width="80px" height="80px" style="border-radius:5%">
      </div>
      <div>
        <span><i>
            <p><?= Users::getUser($_SESSION['user'])->last_name . " " . Users::getUser($_SESSION['user'])->first_name ?></p>
            <p><?= Users::getUser($_SESSION['user'])->email ?></p>
            <p><?= Users::getUser($_SESSION['user'])->phone ?></p>
          </i>
        </span><br>
        <div>
          <span><a href="uploadimg.php">Update your profile image</a></span><br>
          <!-- <span><a href="uploadimg.php">Update your account</a></span> -->
        </div>
      </div>

    </div>
  </div>
  <?php require_once('footer.php'); ?>
