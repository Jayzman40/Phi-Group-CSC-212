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
