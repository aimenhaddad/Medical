<?php 
include "assets/config.php";
$sql = "SELECT id , name, wilaya,user_img FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

?>