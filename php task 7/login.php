<?php
session_start();

if (!isset($_SESSION['uname'])) {
    if (isset($_POST['submit'])) {
        $uname = $_REQUEST['username'];
        $pass = $_REQUEST['pass'];
        $_SESSION['uname'] = $uname;
        $_SESSION['pass'] = $pass;
        echo " <script> location.href='welcome.php' </script> ";
    }
} else {
    echo " <script> location.href='welcome.php' </script> ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Task 7</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="Content_div">
            <form action="" method="post">
                Username: <input type="text" name="username"><br>
                Password: <input type="password" name="pass"><br>
                <input type="submit" name="submit">
            </form>
        </div>
    </div>


</body>

</html>