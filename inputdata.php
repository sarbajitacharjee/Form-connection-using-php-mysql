<?php
// TableName : employees

if (isset($_POST['firstname'])) {
    include ('./config.php');
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $department = $_POST['department'];


    

    $emp = $conn->prepare("
    insert into `employees` (`EmployeeID`,`FirstName`,`LastName`,`Email`,`Department`)
    values(Null, '$firstname', '$lastname' , '$email','$department')
    ");

    $result = $emp->execute();
    if ($result)
        echo "data inserted succesfully";
    else
        echo "Failed to insert";
}

?>