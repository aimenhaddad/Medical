<?php
session_start();
include_once "../assets/config.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['name']) && isset($_POST['uname'])  && isset($_POST['pass']) && isset($_POST['re_pass'])) {
 
function validate($data){
$data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

   $wilaya = $_POST['wilaya'];
   // Do something with the selected option
   $name=validate($_POST['name']);
   $uname=validate($_POST['uname']);
   $re_pass=validate($_POST['re_pass']);
   $pass=validate($_POST['pass']);
   $img="img";
$uesr_data='uname '.$uname.'&name '.$name;
if (empty($wilaya)) {
   header("Location: singup_view.php?error=Wilaya is required&$uesr_data");
    exit();
}
if (empty($uname)) {
   header("Location: singup_view.php?error=UserName is required&$uesr_data");
    exit();
}else if(empty($name)){
   header("Location: singup_view.php?error=Name is required&$uesr_data");
  exit();
}else if(empty($pass)){
     header("Location: singup_view.php?error=Password is required&$uesr_data");
    exit();
}else if(empty($re_pass)){
   header("Location: singup_view.php?error=Re_Password is required&$uesr_data");
  exit();
}else if($re_pass !== $pass){
   header("Location: singup_view.php?error=The confirmation password does not match&$uesr_data");
  exit();
}else{
   
   $sql ="SELECT * FROM users WHERE user_name='$uname'";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
      header("Location: singup_view.php?error=The username is taken try another&$uesr_data");
  exit();
   }

  
    
   
   else{
   $sql1 = "INSERT INTO  users(id, user_name, password, name, wilaya, user_img) VALUES(null,'$uname','$pass','$name',$wilaya ,'$img')";
      if (mysqli_query($conn, $sql1)) {
         header("Location: singup_view.php?success=your account has been created successfully");
        exit();
       } else {
         header("Location: singup_view.php?success=unkown error occurred&$uesr_data");
         exit();
       }
   
    }
 }

}else{
header("Location: singup_view.php");
exit();
}
}


?>