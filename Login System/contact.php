<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$address = $_POST['address'];
$message = $_POST['message'];

$sql =   "INSERT INTO `newPro`.`contact123`(`name`, `phoneNumber`, `email`, `address`, `message`) VALUES ('$name','$phoneNumber','$email','$address','$message')";

$result = mysqli_query($conn, $sql);

if(!$result){
  die("Something Went Wrong");
}

}



?>

<style>

    .aform {
      margin-top: 2rem;
      margin-left: 2rem;
      margin: 2rem auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input, textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .abutton {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>

  <form class="aform " method="POST" action="contact.php" id="contactForm">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="phoneNumber">Phone Number:</label>
    <input type="tel" id="phoneNumber" name="phoneNumber" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit" class="abutton">Submit</button>
  </form>
