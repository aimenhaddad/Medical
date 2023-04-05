<?php 
session_start ();
$id=$_SESSION['id'];
include "../assets/config.php";
$sql = "SELECT ID,day,date,etat,id_user,name_injection FROM program  where etat=1  and  id_USER =$id ORDER BY ID DESC";
$result = mysqli_query($conn, $sql);


?>