<?php 
session_start ();
$id=$_SESSION['id'];
include "../../assets/config.php";
$day=$_POST['day'];
$data=$_POST['date'];
$id_program = $_POST['id_program'];

if (empty($_POST['save'])) {
   
// Prepare the query
$stmt = $conn->prepare("UPDATE program SET day=?, date=? WHERE ID=?");

// Bind the parameters
$stmt->bind_param("ssi" ,$day, $data, $id_program);

// Execute the statement
$stmt->execute();

// Check for errors
if ($stmt->errno) {
    // Handle the error
}

// Close the statement and database connection
$stmt->close();
$conn->close();


}





 header("Location: ../admin.php");

?>