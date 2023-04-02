<?php 
session_start ();
$id=$_SESSION['id'];
include_once "include/config.php";
$sql = "SELECT * FROM program  where etat=1  and  id_USER =$id ORDER BY ID DESC";
$result = mysqli_query($conn, $sql);


?>