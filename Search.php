<?php 
include('config.php');

if(isset($_POST['search']))
{
    $search =$_POST['search'];
    $emp = $conn -> prepare("select * from employees where FirstName like'%$search%'") ;
    $emp->execute();
    $empdata = $emp->fetchAll();
    echo "<table border='1'>"; 
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Department</th></tr>";
    foreach($empdata as $row)
    {
        echo "<tr>";
        echo "<td>".$row['EmployeeID']."</td>";
        echo "<td>".$row['FirstName']." ".$row['LastName']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['Department']."</td>";
        echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<br>";
        echo "<h1><a href='mysql.php'>Go to dataList</a></h1>";
}



?>

<form action="" method="post">
<label for="">Search For Names: </label>
<input type="text" name="search" placeholder="Search for Name">
<br><br>
<button>Search</button>
</form>