<?php

session_start();

if(!isset($_SESSION['adminin']) || $_SESSION['adminin']!= true){
  header("location: http://localhost/Login%20System/");
  exit();
}
else{
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Welcome - <?php $_SESSION['expectedUsername'] ?></title>
</head>
<body>
    <?php
    include 'nav.php';

echo 'Welcome '.  $_SESSION['adminUsername']; 
?>

</body>
</html>