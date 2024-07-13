<?php
// TableName : employees

if (isset($_POST['firstname'])) {
    include ('./config.php');
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $department = $_POST['department'];


    
try{

    $emp = $conn->prepare("
    insert into `employees` (`EmployeeID`,`FirstName`,`LastName`,`Email`,`Department`)
    values(Null, '$firstname', '$lastname' , '$email','$department')
    ");
    
    $result = $emp->execute();
    if ($result)
    {
        header("Location: mysql.php");       // relocate to the file /refresh
        echo "data inserted succesfully";
    
}

else
echo "<br>Failed to insert<br>";
}catch(PDOException $e)
{
    // print_r($e);
    // echo $e->getMessage();
    if ($e->getCode() == 23000) { // Duplicate entry
        echo "Email already exists. Please use a different email address.";
    } else {
        echo "Error: " . $e->getMessage();
    }

}
}

?>