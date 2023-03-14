<?php
   session_start();
   if(!isset($_SESSION['uname'])){
    echo " <script> location.href='login.php' </script>";
   }else 
   if(isset($_POST['logout-btn'])){
    session_unset();
    session_destroy();
    echo " <script> location.href='login.php' </script>";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <form action="" method="post">
    <a href="../php_task_1/myfile.php">PHP Task 1</a> <br>
    <a href="../php task 2/index.php">PHP Task 2</a> <br>
    <a href="../php task 3/index.php">PHP Task 3</a> <br>
    <a href="../php task 4/index.php">PHP Task 4</a> <br>
    <a href="../php task 5/index.php">PHP Task 5</a> <br>
    <a href="../php task 6/index.php">PHP Task 6</a> <br> 
    <input type="submit" name="logout-btn"  value="Log Out">

    </form>
</body>