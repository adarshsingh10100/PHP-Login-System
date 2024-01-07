<?php
require 'db.php';
$login = false;
$showError = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $err = "";

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM user123 where username='$username' and password='$password'";



    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        // header("location: welcome.php");
    }
    else{
        $showError = "Invalid Credentials";
    }


}







?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Bihari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <?php
    require 'nav.php';
    ?>
<?php

if($login){

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You Are Logged In 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    // header("location: login.php");
}

if($showError){

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error: </strong> '. $showError .'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}


?>
    <div class="container">
        <h2 class="text-center">User Login</h2>
         <form action="http://localhost/Login%20System/login.php" method="Post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">UserName</label>
            <input type="text" class="form-control" id="username" name="username" />
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  
</html>