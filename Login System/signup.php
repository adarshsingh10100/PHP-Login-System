<?php
require 'db.php';
$showAlert = false;
$showError = false;
$exists = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $err = "";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    // $exists=false;
    // Check Whether Username Exits
    $existsql = "SELECT * FROM `user123` WHERE username = '$username';";
    $result = mysqli_query($conn, $existsql);
    $numExitsRow = mysqli_num_rows($result);
    if($numExitsRow > 0){
        $exists = true;
    }
    else{
        $exists = false;
        
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `newPro` . `user123` (`username`, `password`, `datetime`) VALUES ('$username', '$password', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo 'Something Went Wrong';
    }
    else{
        $showAlert = true;
    }
    }
    else{
        $showError = "Password Do Not Match";
    }

}
    }





?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup - Bihari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <?php
    require 'nav.php';
    ?>
    <?php

if($showAlert){

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your Account Is Created Now. Now You Can Login
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
if($exists){

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error: </strong> '. "Username Already Exist" .'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}


?>
    <div class="container">
        <h2 class="text-center">Signup To Our Website</h2>
        <form action="http://localhost/Login%20System/signup.php" method="Post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">UserName</label>
                <input type="text" class="form-control" id="username" name="username" />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <small id="emailHelp" class="form-text text-muted">Make Sure To Type The Same Password</small>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>


</html>