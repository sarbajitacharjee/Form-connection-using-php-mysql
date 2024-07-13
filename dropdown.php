<?php 
// TableName : employees

include('./config.php');

$getemp = $conn -> prepare("select EmployeeID,FirstName from employees");

$getemp->execute();

$empdata = $getemp->fetchAll(PDO::FETCH_ASSOC);

// print_r($emp);

echo "<br>";
echo "<select>";
echo "<option> Select Name </option>";
foreach($empdata as $emp)
{
    echo "<option value='". $emp['EmployeeID']."'>".$emp['FirstName']."</option>";

}


?>