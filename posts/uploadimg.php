        <?php
        require_once('head.php');
        require_once('navbar.php');
        include_once('../config/dbconnection.php');



        if (isset($_POST['upload'])) {
            $user = $_SESSION['user'];
            $fileName = $_FILES['profile']['name'];
            $fileTmp = $_FILES['profile']['tmp_name'];
            $fileSize = $_FILES['profile']['size'];
            $fileError = $_FILES['profile']['error'];
            $fileType = $_FILES['profile']['type'];

            $fileExt = explode('.', $_FILES['profile']['name']);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg', 'jpeg', 'png');
            if (in_array($fileActualExt, $allowed)) {
                if ($_FILES['profile']['error'] === 0) {
                    $fileNameNew = 'profile' . $_SESSION['user'] . '.' . $fileActualExt;
                    $fileDestination = "img/" . $fileNameNew;
                    move_uploaded_file($_FILES['profile']['tmp_name'], $fileDestination);
                    global $pdo;
                   
                    $sqlUpdate = "UPDATE users SET
                profile = ?
                WHERE user_id = ?
                    ";
                    $statement = $pdo->prepare($sqlUpdate);
                    $row = $statement->execute([$fileDestination, $user]);
                    
                }
            }
                $status=1;
        }
        ?>
 <div class="container">
            <div class="row">
                <div class="col-md-7 centered my-5">
                <?php if(isset($status)){
                    if($status == 1){
                    ?>
                <div class="alert alert-success">Uploaded Successfully</div>
                
                <?php 
            
            $status="";
                }}?>

                    <h3>New comment</h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="file" name="profile" class="form-control" required>
                        <button name="upload" type="submit" class="btn btn-success mt-4">Upload</button>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 mt-5 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?= $fileDestination ?>"  height="200px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('footer.php');

        ?>
