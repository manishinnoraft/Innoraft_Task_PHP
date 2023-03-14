<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class=container>
    <div class=content>
    <form action="" method="post" enctype="multipart/form-data">
    First Name : <input type="text" name="fname" class="inputfield"> <br>
    Last Name : <input type="text" name="lname" class="inputfield"> <br>
    <input type="file" name="filehere" class="fileuploadbtn" class="marginbottom1rem"> <br>
    Enter Marks :<br><textarea cols='30' rows='6' name="marks" class="marginbottom1rem" placeholder="Subject|Marks"></textarea> <br>
    Enter Mobile Number: <br><input type="tel" name="phonenumber" placeholder="+91 [10 dight Number]"><br>
    <input type="submit" value="Submit" name="submit" class="margin1rem"> 
    </form>
    
    <?php include 'logic.php';?>
</div>
</div>   
</body>
</html>