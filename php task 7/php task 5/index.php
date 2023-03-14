<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    First Name : <input type="text" name="fname" class="inputfield"> <br>
    Last Name : <input type="text" name="lname" class="inputfield"> <br>
    <input type="file" name="filehere"> <br>
    Enter Marks :<br><textarea cols='30' rows='6' name="marks"  placeholder="Subject|Marks"></textarea> <br>
    Enter Mobile Number: <br><input type="tel" name="phonenumber" placeholder="+91 [10 dight Number]"><br> 
    Enter Email: <br> <input type="text" name="email" id="email_id"><br>
    <input type="submit" value="Submit" name="submit" >    
</form>
    <?php include 'logic.php'; ?>
</body>
</html>