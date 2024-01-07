<?php
require 'db.php';



if($_SERVER['REQUEST_METHOD'] == "POST"){

    $expectedUsername = "adarshbro0066";

    $expectedPassword = "utkarshbro6600";   

    $adminUsername = $_POST['adminUsername'];

    $adminPassword = $_POST['adminPassword'];


    if ($adminUsername == $expectedUsername && $adminPassword == $expectedPassword) {
        session_start();
        $_SESSION['adminin'] = true;
        $_SESSION['adminUsername'] = $adminUsername;
        header("location: http://localhost/Login%20System/admin.php");
    }
    else{
        echo "Please, Don't Try! You Can Be Blocked";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin Login</title>
</head>

<body>

    <div class="container">
        <h2 class="text-center">Admin Login</h2>
        <form action="http://localhost/Login%20System/adminlogin.php/" method="Post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">UserName</label>
                <input type="text" class="form-control" id="adminUsername" name="adminUsername" />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="adminPassword" name="adminPassword">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>