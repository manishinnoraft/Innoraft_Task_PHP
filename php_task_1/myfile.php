<!-- Php logic code  -->
<?php 
      $nameErr="";
      $firstname=$_POST["fname"];
      $lastname = $_POST["lname"];
      $name = $_POST ["Name"]; 

    if ((!preg_match ("/^[a-zA-z]*$/", $firstname)) or (!preg_match ("/^[a-zA-z]*$/", $lastname))) {  
        $ErrMsg = "Only alphabets and whitespace are allowed.";  
        echo $ErrMsg;  
    } else {  
    if($firstname!=" " and $lastname!=""){
    $fullName =  $firstname . " " . $lastname;  
    }  
}
    function myerror($data){  
      if(empty($data)){
        echo "Field is empty *" ;
      }
    }
?>
<!-- Php logic code end -->
<!-- Form structure starts -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
    <form action="myfile.php" method="post">    
    First Name: <br>
    <input type="text" name="fname"  id="fnameid"> 
    <span class="errorClass"><?php myerror($firstname); ?></span>
    <br>
    Last Name: <br> 
    <input type=" text" name="lname" id="lnameid"> 
    <span class="errorClass"><?php myerror($lastname); ?></span>
    <br>
    <div></div>
    <input type="text" name="fullname" id="myoutput" disabled>
        <br>
    <input id="submitbtn" type="submit" name="submitbtn"> <br>
<?php
    if(isset($_POST["submitbtn"])){
        if(!empty($fullName) and $fullName!=" "){
    echo "Hello ".  $fullName;
    }
}
?>
</form>
<!-- Form structure ends -->
<!-- Jquery code starts -->
<script>
$(document).ready(function(){
    $("#fnameid , #lnameid").on('input', function(){
        var fnamevar= $('#fnameid').val();
        var lnamevar= $('#lnameid').val();
        var fullnamevar = fnamevar + " " + lnamevar;
        // Print entered value in a div box
        $("#myoutput").val(fullnamevar);
    });
});
</script>
<!-- Jquery code ends -->
</body>

<!-- CSS code starts -->
<style>
    .errorClass{
        color:red;
    }
    form input{
        margin: 0.5rem 0;
        padding: 5px;
        width: 200px;

    } 
</style>
 <!--CSS code starts  -->
</html>