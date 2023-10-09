<?php 
include('conectar.php');
$con= mysqli_connect(HOST, USER, PASSWORD, DB);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>
