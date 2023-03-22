
    <?php
    include 'form.php';
    $server = "localhost";
    $username = "Manishvj02";
    $password = "Manish123#";
    $database = "employee_details";


    $connect = new mysqli($server, $username, $password, $database);
    if ($connect->connect_error) {
        echo "No conncection";
    } 
    if(isset($_POST['submit'])){
    $employee_code=$_POST['employee_code'];
    $employee_code_name=$_POST['employee_code_name'];
    $employee_domain=$_POST['employee_domain'];
    $employee_id=$_POST['employee_id'];
    $employee_salary=$_POST['employee_salary'];
    $graduation_percentile=$_POST['graduation_percentile'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];  
    $sqlquery1="insert into employee_code_table values( '$employee_code','$employee_code_name','$employee_domain')";
    $sqlquery2="insert into employee_salary_table values( '$employee_id','$employee_salary','$employee_code')";
    $sqlquery3="insert into employee_details_table values('$employee_id','$fname','$lname','$graduation_percentile')";
    if(mysqli_query($connect,$sqlquery1) && mysqli_query($connect,$sqlquery2) && mysqli_query($connect,$sqlquery3)){
         echo "Data is sent to database";
    }
    else{
        echo "Data not sent";
    }
    
}

  ?>

