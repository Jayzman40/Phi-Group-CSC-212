<?php session_start();
if (empty($_SESSION['user'])) {
    header("Location:../index.php?err=Enter your email and password correctly first");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dependencies/css/style.css">
    <link rel="stylesheet" href="../dependencies/bootstrap5/css/bootstrap.css">
    <!-- <link href="../dependencies/texteditor/editor.css" type="text/css" rel="stylesheet"/> -->
    <title>Phi Group - Computing</title>
</head>

<body>
