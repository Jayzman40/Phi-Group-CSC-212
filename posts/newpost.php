<?php
require_once('head.php');
require_once('navbar.php');
?>
<div class="container-fluid bg-light">
<div class="row">
<div class="col-md-7 centered my-5">
    <h3>Create a new post</h3>
    <form action="../controller/Posts.php" method="post">
    <textarea id="editor" name="post" cols="40" rows="10" class="form-control"></textarea>
    <input type="hidden" name="user" value="<?=$_SESSION['user']?>" ><br>
    <button name="submit" type="submit" class="btn btn-success mt-4" >Post</button>
    </form>
</div>
</div>
</div>
</div>
 <?php require_once('footer.php')?>
