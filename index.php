
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Medical</title>
  <?php include_once "include/bootcss.php"; ?>
 <!-- Template Main CSS File -->
 <link href="include/assets/css/style.css" rel="stylesheet">
</head>
<body  data-spy="scroll" data-target="#navbar-example" >
<!-- ************************* NAVBAR ************************* -->
<?php include_once "include/navbar_home.php";?>
<!-- ############################## FIN NAV######################################## -->
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>Medical</span></h1>
      <h2>This site helps you to know the injections that are in hospitals every week</h2>
      <div class="d-flex">
        <a href="#injection" class="btn-get-started scrollto">Get Started</a>
      
      </div>
    </div>
  </section><!-- End Hero -->

<!-- ######################################################################################## -->
 <!-- ======= Team Section ======= -->
 <section id="injection" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hospital</h2>
          <h3>Choose a  <span>Hospital</span></h3>
         <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        <select name="wilaya" class="form-control col-md-4 float-right">
              <option value="">Select a wilaya</option>
              <option value="01">Adrar</option>
              <option value="02">Chlef</option>
              <option value="03">Laghouat</option>
              <option value="04">Oum El Bouaghi</option>
              <option value="05">Batna</option>
              <option value="06">Béjaïa</option>
              <option value="07">Biskra</option>
              <option value="08">Béchar</option>
              <option value="09">Blida</option>
              <option value="10">Bouira</option>
              <option value="11">Tamanrasset</option>
              <option value="12">Tébessa</option>
              <option value="13">Tlemcen</option>
              <option value="14">Tiaret</option>
              <option value="15">Tizi Ouzou</option>
              <option value="16">Alger</option>
              <option value="17">Djelfa</option>
              <option value="18">Jijel</option>
              <option value="19">Sétif</option>
              <option value="20">Saïda</option>
              <option value="21">Skikda</option>
              <option value="22">Sidi Bel Abbès</option>
              <option value="23">Annaba</option>
              <option value="24">Guelma</option>
              <option value="25">Constantine</option>
              <option value="26">Médéa</option>
              <option value="27">Mostaganem</option>
              <option value="28">M'Sila</option>
              <option value="29">Mascara</option>
              <option value="30">Ouargla</option>
              <option value="31">Oran</option>
              <option value="32">El Bayadh</option>
              <option value="33">Illizi</option>
              <option value="34">Bordj Bou Arréridj</option>
              <option value="35">Boumerdès</option>
              <option value="36">El Tarf</option>
              <option value="37">Tindouf</option>
              <option value="38">Tissemsilt</option>
              <option value="39">El Oued</option>
              <option value="40">Khenchela</option>
              <option value="41">Souk Ahras</option>
              <option value="42">Tipaza</option>
              <option value="43">Mila</option>
              <option value="44">Aïn Defla</option>
              <option value="45">Naâma</option>
              <option value="46">Aïn Témouchent</option>
              <option value="47">Ghardaïa</option>
              <option value="48">Relizane</option>
        </select>
       
        </div>

       
     
  <div class="row mt-3">
    <div class="col-4 ">
      <div class="card text-white bg-light mb-3 " >
          <div class="pt-2  pl-2  text-dark"> 
          <img src="uploads\medical.png" width="50" height="50" alt=""><span> monsif</span>
      </div>

      <div class="card-body text-dark">
          <h5 class="card-title text-right ">wilaya</h5>
          <a href="#injection" class="btn btn-primary d-flex justify-content-center">Show  Program</a>
      </div>
    </div>
  </div>

          

        </div>

      </div>
    </section><!-- End Team Section -->

<?php include_once "include\bootjs.php";?>
<script>

</script>


</body>
</html>
