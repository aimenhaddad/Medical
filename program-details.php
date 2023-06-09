<?php if (isset($_GET['id'])) {
  $id_user = $_GET['id'];
  $name = $_GET['name'];
  include "assets/config.php";
  $sql = "SELECT day, date, name_injection, ID   FROM program WHERE id_user=$id_user AND etat=0;";
  $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $name?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/all.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/css/css.css" rel="stylesheet" />
    <link href="assets/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">

    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            
            <!-- Uncomment below if you prefer to use an image logo -->
             <a href="index.php" ><img class="border rounded-circle" src="assets/img/injection.svg" alt="" height="50" width="50"> <b>Injection Management System</b></a>
         
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main" data-aos="fade-up">
                
        <!-- ======= Breadcrumbs Section ======= -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="services" class="d-flex align-items-center"> 
            <div class="container">
                
            <div class="section-title">
               
                <h3>Weekly Planner for <span><?=$name?></span></h3>

               
            </div>
           
                <div class="row gy-4 d-flex align-items-center justify-content-center">
                    <?php if (mysqli_num_rows($result)) {
              while ($rows = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-lg-4 col-md-6 col-12 ">
                        <div class="portfolio-info">
                            <h3><strong><?= $rows['day'];   ?> </strong> </h3>
                            <span class="float-right"><?= $rows['date'];   ?></span><br>
                            <strong>Injection</strong>

                            <div>

                                <?php
                       $motif = ","; 
                       $array = explode($motif, $rows['name_injection']);
                    
                      foreach ($array as $value) {

                      ?>
                                <button class="btn btn-outline-primary m-1"><?= $value   ?></button>
                                <?php  }
                      ?>
                            </div>
                        </div>
                    </div>

                    <?php }
            }  ?>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

>
    
  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="container d-md-flex py-4">

      
      
    </div>
  </footer><!-- End Footer -->
  <footer class="footer fixed-bottom">
  <div class="container">
  <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
        &copy; Copyright <strong><span>Me</span></strong>. All Rights Reserved
        </div>
      </div>
  </div>
</footer>


    <script src="assets/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="assets/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<?php
} else {
  header("Location: index.php");
}
?>