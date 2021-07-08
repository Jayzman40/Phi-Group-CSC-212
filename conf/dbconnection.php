<?php

$username= "root";
$password= "";

try{
   
    $pdo = new PDO("mysql:host=localhost;dbname=post_app", $username,$password);
}
catch(PDOExeption $e){
    echo "Connection error REPORT:".$e;
 }

?>
