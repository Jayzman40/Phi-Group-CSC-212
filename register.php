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


   <form action="controller/Users.php" method="POST">
 <!-- Name -->
 <div class="row">
  <div class="col-md-6">
  <div class="mb-3 align-center ">
    <label for="fn" class="form-label">First Name</label>
    <input type="text" name="first_name" class="form-control" id="fn" aria-describedby="name" required>
  </div>
  </div>
  <div class="col-md-6">
  <div class="mb-3 align-center ">
    <label for="sn" class="form-label">Surname</label>
    <input type="text" name="last_name" class="form-control" id="sn" aria-describedby="name" required>
  </div>
  </div>
  </div>
  <!-- End of names -->
    
     <!-- Gender DOB -->
<div class="row">
  <div class="col-md-6">
  <div class="mb-3 align-center ">
    <label for="gender" class="form-label">Gender</label>
    <select class="form-control" name="gender" id="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    </select>
  </div>
  </div>
  <div class="col-md-6">
  <div class="mb-3 align-center ">
    <label for="dob" class="form-label">Date of Birth</label>
    <input type="date"  name="dob" class="form-control" id="dob" aria-describedby="dob" required>
  </div>
  </div>
  </div>
  <!-- end of Gender DOB -->

   <!-- email/phone -->

  <div class="mb-3 align-center ">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="fn" aria-describedby="email" required>
  </div>
  <div class="mb-3 align-center ">
    <label for="phone" class="form-label">Phone</label>
    <input type="tel" name="phone" class="form-control" id="sn" aria-describedby="phone" required>
  </div>
  <!-- End of email /phone -->

   <!-- Passwords -->
 <div class="row">
  <div class="col-md-6">
  <div class="mb-3 align-center ">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password" aria-describedby="password" required>
  </div>
  </div>
  <div class="col-md-6">
  <div class="mb-3 align-center ">
    <label for="repassword" class="form-label">Comfirm Password</label>
    <input type="password" name="repassword" class="form-control" id="repassword" aria-describedby="repassword" required>
  </div>
  </div>
  </div>
  <!-- End of Passwords -->
<!-- submit -->
  <button name="register" class="btn btn-primary">register</button>
</form>
</div>
</div>
 </div>
 </div>


<script src="dependencies/bootstrap5/js/bootstrap.js"></script>
</body>
</html>
