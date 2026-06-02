<?php
$host = "localhost";
$user = "root";          
$pass = "";              
$dbname = "talentenshow"; 

$conn = new mysqli($host, $user, $pass, $dbname);

// Check verbinding
if ($conn->connect_error) {
    die("Database verbinding mislukt: " . $conn->connect_error);
}    
?>
