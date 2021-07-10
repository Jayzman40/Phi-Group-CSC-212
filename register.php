<?php 
require('head.php');
require('navbar.php');
 ?>


<div class="container-fluid bg-light">
<div class="row">
 <div class="col-md-12 p-4 d-flex mx-auto">
 
  <!-- Logging Form -->
  <div class="col-md-5 login-page mx-auto mt-4">
  <div class="card">
  <div class="card-body p-4 m2">


  <?php if(!empty($_GET['msg'])){ ?>
    <div class="alert alert-success d-flex align-items-center" role="alert">
  <div>
    <?= $_GET['msg'] ?>
  </div>
</div>   
 <?php }
 elseif(isset($_GET['err'])){?>
  <div class="alert alert-warning d-flex align-items-center" role="alert">
  <div>
    <?= $_GET['err'] ?>
  </div>
</div>   
 <?php }?> 
