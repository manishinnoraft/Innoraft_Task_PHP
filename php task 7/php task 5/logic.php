<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<?php

// Class Create for form.
class form{
    public $firstname1,$lastname1,$phone1,$file1,$marks1,$email1;
    function __construct($firstname,$lastname,$phone,$file,$marks,$email) {
        $this->firstname1 = $firstname;
        $this->lastname1 = $lastname;
        $this->phone1 = $phone;
        $this->file1=$file;
        $this->marks1=$marks;
        $this->email1=$email;
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
// Function for Phone Number Verification
function phone_verfication(){
    
if(isset($_POST['submit'])){
$this->phone1 = str_replace(' ', '', $this->phone1);
$startpattern="/\+91[0-9]{10}/";
if(preg_match($startpattern,$this->phone1)){
    echo "Right number";
}
else{
    echo "Enter Valid Indian Number";
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
function email_validation(){
    if(preg_match("/^[a-zA-Z0-9._]+@[a-z]+\.[a-z]/",$this->email1)){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.apilayer.com/email_verification/check?email=$this->email1",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain",
            "apikey: 9Qb8R2g9J29nBmM7DaPMQkRIlVCXUiUh"
        ),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $text_decode=json_decode($response,true);
        if($text_decode['smtp_check']==true) {
            echo "Email is valid";
        }
        else{
            echo "Email is Valid";
        }

    }
    else{
        echo "Invalid Email Format";
    }

}
}
// Post method to fetch data
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$phone=$_POST['phonenumber'];
$marks=$_POST['marks'];
$file=$_FILES['filehere'];
$email=$_POST['email'];
// Object created for the class form
$object1 = new form($firstname,$lastname,$phone,$file,$marks,$email);
// Calling all the functions
$object1->checknames(); 
$object1->phone_verfication();
$object1->fileupload();
$object1->showmarks();
$object1->email_validation();
?>
</html>