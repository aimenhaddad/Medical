<?php
include "../../assets/config.php";



if (empty($_POST['save'])) {
    $id_program = $_POST['id_program'];
    $sql = "DELETE FROM injection_possible WHERE id_program= $id_program";
    if (mysqli_query($conn, $sql)) {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $selected_options = $_POST['option'];
            $injctin = "";
            foreach ($selected_options as $name_injection) {
                $injctin = $injctin . $name_injection . " ";
                $sql = "INSERT INTO injection_possible(id_injection_possible, name_injection, id_program) VALUES (null,' $name_injection',$id_program)";
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully ";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        }
        $sql = "UPDATE program SET name_injection='$injctin' WHERE ID= $id_program";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully ";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
header("Location: ../admin.php");
