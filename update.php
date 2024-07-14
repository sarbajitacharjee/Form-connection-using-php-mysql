<?php

include('./config.php');


if(isset($_GET['id']))
{
    echo "Data Of Id No. ". $id = $_GET['id'];
    echo "<br>";
    echo "<br>";
    $getemps = $conn -> prepare("select * from employees where EmployeeID = '$id'");
    $getemps->execute();
    $emp = $getemps->fetchAll();
    $firstname = $emp[0]['FirstName'];
    $lastname = $emp[0]['LastName'];
    $email = $emp[0]['Email'];
    $department = $emp[0]['Department'];
    
}

else echo "Connection Error";

if(isset($_POST['update']))
{
    // echo $_POST['update'];
    $id = $_POST['update'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    
    $updateemp = $conn -> prepare("update employees set FirstName = 
    '$firstname', LastName = '$lastname', Email = '$email', 
    Department = '$department' where EmployeeID = '$id'");
    $updateemp->execute();
    echo "Data Updated Successfully";
    header("Location: mysql.php");   // relocate to the file / refresh    
    

}

?>
<form action="" method="post">
    
    <input type="text" value="<?php echo $firstname ?> " name="fname">
    <br>
    <input type="text" value="<?php echo $lastname?> " name="lname">
    <br>
    <input type="text" value="<?php echo $email?> " name="email">
    <br>
    <input type="text" value="<?php echo $department?> " name="department">
    <br><br>
    <button value="<?php echo $id ?>" name="update">Update data</button>

</form>