<?php
include "../../assets/config.php";



if (empty($_POST['save'])) {
    $id_program = $_POST['id_program'];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $selected_options = $_POST['option'];
            $injctin = "";
            $len =count($selected_options);
            $indce=0;
            foreach ($selected_options as $name_injection) {
                if ( $indce == $len-1) {
                    $injctin =  $injctin.$name_injection  ;
                }else{
                    $injctin =  $injctin.$name_injection." , "  ;
                }
                $indce++;
            }
        }
        $sql = "UPDATE program SET name_injection='$injctin' WHERE ID= $id_program";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully ";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
 
}
header("Location: ../admin.php");
