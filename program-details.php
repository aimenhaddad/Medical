<?php if (isset($_GET['id'])) {
$id_user=$_GET['id'];
include "assets/config.php";
$sql = "SELECT day, date, name_injection, ID   FROM program WHERE id_user=$id_user AND etat=0;";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Program</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <?php include_once "assets/bootcss.php"; ?>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
   
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Medical<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-up" >

    <!-- ======= Breadcrumbs Section ======= -->
   
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4 d-flex align-items-center justify-content-center">
        <?php if (mysqli_num_rows($result)) {
                         while ($rows = mysqli_fetch_assoc($result)) { ?>
          <div class="col-lg-4 col-md-6 col-12 ">
            <div class="portfolio-info">
              <h3><strong><?= $rows['day'];   ?> </strong>  </h3>
              <span class="float-right"><?= $rows['date'];   ?></span><br>
              <strong>Injection</strong>

                <div>
                    <button  class="btn btn-outline-primary"><?= $rows['name_injection'];   ?></button>
                  
                </div>
            </div>
          </div>
         
          <?php } }  ?>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container py-4 " >
      <div class="copyright  ">
        &copy; Copyright <strong><span>Me</span></strong>. All Rights Reserved
      </div>
 
    </div>
  </footer><!-- End Footer -->

  <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <?php include_once "assets/bootjs.php";?>

</body>

</html>

<?php 
}else{
  header("Location: index.php");
}
 ?>