<?php
 $file=$_FILES['filehere'];
 $file_name=$_FILES['filehere']['name'];
 $file_path=$_FILES['filehere']['full_path'];
 $file_temp=$_FILES['filehere']['tmp_name'];
 $file_type=$_FILES['filehere']['type'];
 $newfilelocation="./images/".$file_name;
 move_uploaded_file($_FILES['filehere']['tmp_name'],$newfilelocation); 
if(isset($_POST['submit'])){
    $last_name=$_POST['lname'];   
    // Logic to check First Name and Last Name
    if(preg_match("/^[A-Za-z]/",$_POST['fname']) and preg_match("/^[A-Za-z]/",$_POST['lname'])){
        $first_name=$_POST['fname'];
        $last_name=$_POST['lname'];
        $fullname= $first_name . " " . $last_name;
        echo  " <img src=$newfilelocation height=300px; width=300px;/><br>";
        echo " <h3>Hello $fullname</h3>"; 
    }
    else{
        echo "Invalid format or Input Fileds are empty";
    };
    // Logic to take files and upload files
   
     
       
}
?>
