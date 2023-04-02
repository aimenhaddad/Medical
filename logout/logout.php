<?php 
session_start();
session_unset();
session_destroy();
header("Location: ../singin/singin_view.php");
?>