<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "newPro";

$conn = new mysqli($server, $username, $password, $dbname);

if(!$conn){
    echo 'Something Went Wrong'. mysqli_connect_error();
}



?>