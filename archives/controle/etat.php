<?php 
include "../../assets/config.php";

 if(!empty($_GET)){


 $etat=$_GET['etat'];
 echo($etat);
 $etat=($etat==1)?0:1;
 
    $sql="UPDATE program  SET etat=$etat where ID=".$_GET['id'];
  
  mysqli_query($conn, $sql);
 
 }
 if ($_GET['etat'] != 1) {
   header("Location: ../../programmeweek/admin.php");
 }else {
  header("Location: ../archives_view.php");
 }

?>