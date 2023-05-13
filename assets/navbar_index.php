

<!DOCTYPE html>
<html>
<head>
  <?php 
  include_once "bootcss.php";

  ?>
  <style>
  .navbar{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background: #000;
    border-radius: 3px;
	    box-shadow: 0 5px 5px rgba(0,0,0,.4);
  }
  .navbar-body{
    margin-top: 20px;
   
  }
  .colo{
    color: #fff;
  }
</style>
</head>
<body > 

  
<!-- Image and text -->
<nav class="navbar navbar-light bg-light ">
  
  <a class="navbar-brand m-2" href="#" >
  <img class="border rounded-circle" src="assets/img/injection.svg" alt="" height="50" width="50"> <b>Injection Management System</b>
  </a>
  <form class="form-inline mr-4">
    <a href=".\singin\singin_view.php" class="btn btn-outline-primary btn-lg p-2  mr-2 text-primary" type="submit" > Sing In </a>
    <a href=".\singup\singup_view.php"      class="btn btn-outline-primary btn-lg p-2   text-primary "    type="submit" > Sing Up </a>
  </form>

</nav>
             


  <?php include_once "bootjs.php";?>
<script>

</script>
</body>
</html>