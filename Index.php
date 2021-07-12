<?php
require('head.php');
require('navbar.php');
// $msg = $_GET['msg'];
?>


<div class="container-fluid bg-white">
  <div class="row">
    <div class="col-md-12 p-4 d-flex mx-auto">

      <!-- Logging Form -->
      <div class="col-md-5 login-page mx-auto mt-5">

        <?php
        if (!empty($_GET['msg'])) { ?>
          <div class="alert alert-success d-flex align-items-center" role="alert">
            <div>
              <?= $_GET['msg'] ?>
            </div>
          </div>
        <?php } elseif (isset($_GET['err'])) { ?>
          <div class="alert alert-warning d-flex align-items-center" role="alert">
            <div>
              <?= $_GET['err'] ?>
            </div>
          </div>
        <?php } ?>
        <div class="card">
        <div class="card-body m-3 p-5">
        <form action="login.php" method="POST">
          <div class="mb-3 align-center">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <button type="submit" class="btn btn-primary">login</button>
        </form>
        </div>
        </div>
      </div>
    </div>

    <script src="dependencies/bootstrap5/js/bootstrap.js"></script>
    </body>

    </html>
