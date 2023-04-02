<?php
session_start();
$id = $_SESSION['id'];
include "../../assets/config.php";
$injection = $_POST['injection'];

echo $day;
echo $data;
if (empty($_POST['send'])) {

  $sql = "INSERT INTO injection(id_injection, name_injection,id_user) VALUES (null,'$injection',$id) ";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}





header("Location: ../admin.php");
