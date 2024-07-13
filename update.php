<?php

include('./config.php');

echo $_GET['Email'];

if(isset($_GET['EmployeeID']))
{
    echo $id = $_GET['EmployeeID'];
    $getemp = $conn -> prepare("select * from Employees where id = '$id'");
    $getemp->execute();
    $emp = $getemp->fetchAll(PDO::FETCH_ASSOC);
    print_r($emp);
    
}

else echo "Connection Error";


?>