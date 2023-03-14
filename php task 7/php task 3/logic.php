<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<?php

// Class Create for form.
class form{
    public $firstname1,$lastname1,$file1,$marks1;
    function __construct($firstname,$lastname,$file,$marks) {
        $this->firstname1 = $firstname;
        $this->lastname1 = $lastname;
        $this->file1=$file;
        $this->marks1=$marks;
      }
// Function for Marks show   
function showmarks(){
    $array1=explode("\n",$this->marks1);
    if(isset($_POST['submit'])){
   echo" <table border=1px solid black; width=60%;> 
        
            <tr>
                <th>Subject</th>
                <th>Marks</th>
            </tr> ";

            foreach ($array1 as $element){
                $array=explode("|",$element);
                echo 
                "<tr>
                    <td>$array[0]</td>
                    <td>$array[1]</td>
                </tr>";
                }
   echo "</table>";
    
}   
}      
// Function for names validation
function checknames(){
if(isset($_POST['submit'])){
if(preg_match('/[A-Za-z]/',$this->firstname1) and preg_match('/[A-Za-z]/',$this->lastname1)){
echo $this->firstname1. " ". $this->lastname1;
echo "<br>";
}
else{
    echo "Enter only Characters in Name fileds " ; 
}
}
}

// Function for file upload
function fileupload(){
    $file_name=$this->file1['name'];
    $newfilelocation="./images/".$file_name;
    if(isset($_POST['submit'])){
    move_uploaded_file($this->file1['tmp_name'],$newfilelocation);
    echo "<img src=$newfilelocation height=250px; width=250px;/>";
}
}
}
// Post method to fetch data
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$marks=$_POST['marks'];
$file=$_FILES['filehere'];
// Object created for the class form
$object1 = new form($firstname,$lastname,$file,$marks);
// Calling all the functions
$object1->checknames(); 
$object1->fileupload();
$object1->showmarks();
?>
</html>