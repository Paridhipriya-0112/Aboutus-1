<?php
include 'connection.php';

if(isset ($_POST['submit'])){

    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $email_id = $_POST['email_id'];
    $message = $_POST['message'];

    $insertquery = "insert into data(First_name, Last_name, email_id, message) values('$First_name', '$Last_name', '$email_id', '$message')";

  $res = mysqli_query($con,$insertquery);

  if (mysqli_query($con, $res)) {
    echo "New record created successfully";
  } else {
    echo (console.log("Error: " . $sql . "<br>" . mysqli_error($conn)));
    }
}
?>