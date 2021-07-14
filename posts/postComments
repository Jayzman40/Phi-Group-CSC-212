<?php
require_once('head.php');
require_once('navbar.php');
include('../controller/Posts.php');
include('../controller/Users.php');
include('../controller/Comments.php');
$posts = Posts::getPost($_GET['post_id']);
$user_id = $posts->user_id;
//$comment = Users::getUser($comment->user_id);
?>

<div class="row mx-3">
  <div class="col-md-6 my-5">
    <h5>Post | Comments</h5>
    <!-- Posts -->


    <div class="card">
      <div class="card-body">
        <p class="card-title"><sub>posted by: <?= Users::getUser($user_id)->first_name . " " . Users::getUser($user_id)->last_name ?></sub></p>
        <p class="card-text"><?= $posts->post ?></p>
        <?php $commentsPost = Comments::getCommentsByPostId($_GET['post_id']) ?>
      </div>
      <!-- <a href="newcomment.php?post=<?= $_GET['post_id'] ?>">Add a comment</a> -->
      <ul class="list-group list-group-flush mt-4">
        <?php foreach ($commentsPost as $comment) {
        ?>
          <li class="list-group-item mb-4">
            <sup><span class="bg-warning">Commented by:</span> <?= Users::getUser($_SESSION['user'])->first_name . " " . Users::getUser($_SESSION['user'])->last_name ?><br><br />
            <?= $comment->comment ?><br></sup> <sub class="ms-auto"><?= $comment->created_at ?></sub>
          </li>
        <?php } ?>
    </div>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-4">
    <div class="user-section">
      <div class="user-avatar my-5">

        <!-- Comment textbox -->

        <h4>Write your comment</h4>
        <form action="../controller/Comments.php" method="POST">
          <textarea id="editor" name="comments" cols="40" rows="10" class="form-control"></textarea>
          <input type="hidden" name="user" value="<?= $_SESSION['user'] ?>">
          <input type="hidden" name="post" value="<?= $_GET['post_id'] ?>">
          <button name="comment" type="submit" class="btn btn-success mt-4">Post</button>
        </form>
      </div>
    </div>
  </div> 

  <?php require_once('footer.php'); ?>
