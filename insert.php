<?php

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $message = $_POST['message'];

  $host = "localhost";
  $db_userName = "root";
  $db_password = "";
  $db_name = "CV";

  //Database connection
  $conn = new mysqli($host, $db_userName, $db_password, $db_name);
  if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
  }else{
    $stmt = "INSERT INTO `Users` (`firstName`, `lastName`, `messsage`) VALUES ('$firstName', '$lastName', '$message');";
    if(mysqli_query($conn, $stmt))
    {echo"Your feedbeck is successuful";}

    $conn->close();
  }

    ?>
