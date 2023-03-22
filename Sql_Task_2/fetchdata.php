
<?php  
include 'index.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>List all employee first name with salary greater than 50k :</h3>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Employee Salary</th>
            </tr>
        </thead>
        <tbody>
            
                <?php
               
                $query1 = "select * from employee_salary_table inner join employee_details_table on employee_salary_table.employee_id=employee_details_table.employee_id where employee_salary>60";
                $conn_query1 = mysqli_query($connect, $query1);

                while ($result1 = mysqli_fetch_array($conn_query1)){
                 
                 ?>

            <tr>            
                <td><?php  echo $result1['employee_first_name']; ?></td>
                <td><?php  echo $result1['employee_salary']; ?></td>
            </tr>
                <?php
                }
            ?>
        </tbody>
    </table>
    <h3>List all employee last name with graduation percentile greater than 70% :</h3>
    <table>
        <thead>
            <tr>
                <th>Employee Last Name</th>
                <th>Employee Percentile</th>
            </tr>
        </thead>
        <tbody>

        <?php
               
               $query2 = "select * from employee_details_table where graduation_percentile>70";
               $conn_query2 = mysqli_query($connect, $query2);

               while ($result2 = mysqli_fetch_array($conn_query2))
               { 
                ?>


            <tr>
                <td>
                    <?php echo $result2['employee_last_name']; ?>
                </td>
                <td>
                    <?php echo $result2['Graduation_Percentile']; ?>
                </td>
            </tr>
        <?php      
        }
?>
        </tbody>
    </table>
    
  <h3>List all employee code name with graduation percentile less than 70% :</h3>
  <table>
        <thead>
            <tr>
                <th>Employee Code Name</th>
                <th>Employee Percentile</th>
            </tr>
        </thead>
        <tbody>

        <?php
               
               $query3 = "select * from ((employee_code_table  inner join employee_salary_table on employee_code_table.employee_code=employee_salary_table.employee_code) inner join employee_details_table on employee_salary_table.employee_id=employee_details_table.employee_id) where employee_details_table.graduation_percentile<70;";
               $conn_query3 = mysqli_query($connect, $query3);

               while ($result3 = mysqli_fetch_array($conn_query3))
               { 
                ?>


            <tr>
                <td>
                    <?php echo $result3['employee_code_name']; ?>
                </td>
                <td>
                <?php echo $result3['Graduation_Percentile']; ?>
                </td>
            </tr>
        <?php      
        }
       ?>
        </tbody>
    </table>

    <h3>List all employee’s full name that are not of domain Java :</h3>
  <table>
        <thead>
            <tr>
                <th>Employee Code Name</th>
                <th>Employee Domain </th>
            </tr>
        </thead>
        <tbody>

        <?php
               
               $query4 = "select * from ((employee_code_table  inner join employee_salary_table on employee_code_table.employee_code=employee_salary_table.employee_code) inner join employee_details_table on employee_salary_table.employee_id=employee_details_table.employee_id) where employee_code_table.employee_domain<>'Java';";
               $conn_query4 = mysqli_query($connect, $query4);

               while ($result4 = mysqli_fetch_array($conn_query4))
               { 
                ?>


            <tr>
                <td>
                    <?php echo $result4['employee_first_name'] . " " . $result4['employee_last_name']; ?>
                </td>
                <td>
                    <?php echo $result4['employee_domain']; ?>
                </td>
            </tr>
        <?php      
        }
       ?>
        </tbody>
    </table>
    <h3>List all employee_domain with sum of it's salary :</h3>
  <table>
        <thead>
            <tr>
                <th> Sum of Salary</th>
                <th>Employee Domain</th>
            </tr>
        </thead>
        <tbody>

        <?php
               
               $query5 = "select sum(employee_salary),employee_domain from employee_salary_table inner join employee_code_table on employee_code_table.employee_code = employee_salary_table.employee_code group by employee_domain;";
               $conn_query5 = mysqli_query($connect, $query5);

               while ($result5 = mysqli_fetch_array($conn_query5))
               { 
                ?>


            <tr>
                <td>
                    <?php echo $result5[0]; ?>
                </td>
                <td>
                    <?php echo $result5['employee_domain']; ?>
                </td>
            </tr>
        <?php      
        }
       ?>
        </tbody>
    </table>
   
    <h3>List all employee_domain with sum of it's salary but dont include salaries which is less than 30k :</h3>
    <table>
        <thead>
            <tr>
                <th> Sum of Salary</th>
                <th>Employee Domain</th>
            </tr>
        </thead>
        <tbody>

        <?php
               
               $query6 = "select sum(employee_salary),employee_domain from employee_salary_table inner join employee_code_table on employee_code_table.employee_code = employee_salary_table.employee_code where employee_salary>30 group by employee_domain;";
               $conn_query6 = mysqli_query($connect, $query6);

               while ($result6 = mysqli_fetch_array($conn_query6))
               { 
                ?>


            <tr>
                <td>
                    <?php echo $result6[0]; ?>
                </td>
                <td>
                    <?php echo $result6['employee_domain']; ?>
                </td>
            </tr>
        <?php      
        }
       ?>
        </tbody>
    </table>



    <h3>List all employee id which has not been assigned employee code :</h3>
    <table>
        <thead>
            <tr>
                <th> Employee Id</th>
                <th>Employee Code</th>
            </tr>
        </thead>
        <tbody>

        <?php
               
               $query7 = "select employee_id from employee_salary_table where employee_code=''";
               $conn_query7 = mysqli_query($connect, $query7);

               while ($result7 = mysqli_fetch_array($conn_query7))
               { 
                ?>


            <tr>
                <td>
                    <?php if($result7['employee_id']==null){
                        echo "Empty Set";
                    } ?>
                </td>
                    
            </tr>
        <?php      
        }
       ?>
        </tbody>
    </table>

</body>

</html>

<style>
    table,th,td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    form{
        display: none;
    }
   
</style>