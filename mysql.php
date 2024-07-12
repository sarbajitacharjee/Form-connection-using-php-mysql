<?php 

$host = "localhost";
$username = "root";
$password = null;
$database =  "formdata";


$conn = new mysqli($host,$username,$password,$database);

if($conn -> connect_error)
{
    die("die connection ". $coon -> connect_error);

}

echo "Connection success <br>";

// $result = $conn -> query("show tables") -> fetch_all();
// print_r($result);


?>



          <!-- USING PDO ACCESS  (PHP DATA OBJECT) -->

<?php 

include("./config.php");



$getdata = $conn -> prepare("select * from employees");
$getdata->execute();
$emp = $getdata->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($emp);

if ($emp) {
    echo "<table border='10'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Department</th></tr>";

    // Iterating over the fetched data and displaying it
    foreach ($emp as $row) {
        echo "<tr>";
        echo "<td>" . $row['EmployeeID'] . "</td>";
        echo "<td>" . $row['FirstName']  . "  " .$row['LastName'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Department'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}


?>