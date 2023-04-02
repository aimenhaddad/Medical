
 <?php
 
 $servername = "localhost" ;
 $username   = "root" ;
 $password   = "" ;
 $db_name    = "medical" ;
 
 // Create connection
 $conn =new mysqli($servername, $username, $password,$db_name);
 
 // Check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

 ?> 
