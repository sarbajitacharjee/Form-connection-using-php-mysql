<?php  
$host = "localhost";
$username = "root";
$password = null;
$database =  "formdata";


try{
    $conn = new PDO("mysql:host = $host; dbname=$database",$username,$password );
    $conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "<h1>Connection Done</h1>";
    
}catch(PDOException $err){
    
    echo "connection error failed to connect<br> $err ->getMessage()";
}
echo "<br><br>";



?>