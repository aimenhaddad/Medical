<?php 
session_start ();
$id=$_SESSION['id'];
include "../../assets/config.php";
$day=$_POST['day'];
$data=$_POST['da'];
echo $day ;
echo $data;
if (empty($_POST['send'])) {
   
$sql = "INSERT INTO program(ID,day,date,id_user) VALUES (null,'$day','$data',$id) ";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}





header("Location: ../admin.php");
