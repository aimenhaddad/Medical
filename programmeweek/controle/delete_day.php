<?php


if(isset($_GET['id'])) {
    echo $_GET['id'];
    include "../../assets/config.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
 
    $id=validate($_GET['id']) ;
    $sql="DELETE FROM program WHERE ID=$id";
    $result= mysqli_query($conn, $sql);
    if ($result) {
       echo "delete success";
    }else {
        echo "delete  no success";
    }
}
 header("Location: ../admin.php");


?>