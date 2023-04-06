<?php
include "read_user.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Medical</title>
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

<body data-spy="scroll" data-target="#navbar-example">
    <!-- ************************* NAVBAR ************************* -->
    <?php include_once "assets/navbar_index.php";?>
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
                <h3>Choose a <span>Hospital</span></h3>

                <div class="d-flex align-items-center justify-content-center my-4 ">

                    <select name="wilaya" id="city" class="form-control  justify-content-center ">
                        <option value="all">Select a wilaya</option>
                        <option value="Adrar">Adrar</option>
                        <option value="Chlef">Chlef</option>
                        <option value="Laghouat">Laghouat</option>
                        <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                        <option value="Batna">Batna</option>
                        <option value="Béjaïa">Béjaïa</option>
                        <option value="Biskra">Biskra</option>
                        <option value="Béchar">Béchar</option>
                        <option value="Blida">Blida</option>
                        <option value="Bouira">Bouira</option>
                        <option value="Tamanrasset">Tamanrasset</option>
                        <option value="Tébessa">Tébessa</option>
                        <option value="Tlemcen">Tlemcen</option>
                        <option value="Tiaret">Tiaret</option>
                        <option value="Tizi Ouzou">Tizi Ouzou</option>
                        <option value="Alger">Alger</option>
                        <option value="Djelfa">Djelfa</option>
                        <option value="Jijel">Jijel</option>
                        <option value="Sétif">Sétif</option>
                        <option value="Saïda">Saïda</option>
                        <option value="Skikda">Skikda</option>
                        <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
                        <option value="Annaba">Annaba</option>
                        <option value="Guelma">Guelma</option>
                        <option value="Constantine">Constantine</option>
                        <option value="Médéa">Médéa</option>
                        <option value="Mostaganem">Mostaganem</option>
                        <option value="M'Sila">M'Sila</option>
                        <option value="Mascara">Mascara</option>
                        <option value="Ouargla">Ouargla</option>
                        <option value="Oran">Oran</option>
                        <option value="El Bayadh">El Bayadh</option>
                        <option value="Illizi">Illizi</option>
                        <option value="Bordj Bou Arréridj">Bordj Bou Arréridj</option>
                        <option value="Boumerdès">Boumerdès</option>
                        <option value="El Tarf">El Tarf</option>
                        <option value="Tindouf">Tindouf</option>
                        <option value="Tissemsilt">Tissemsilt</option>
                        <option value="El Oued">El Oued</option>
                        <option value="Khenchela">Khenchela</option>
                        <option value="Souk Ahras">Souk Ahras</option>
                        <option value="Tipaza">Tipaza</option>
                        <option value="Mila">Mila</option>
                        <option value="Aïn Defla">Aïn Defla</option>
                        <option value="Naâma">Naâma</option>
                        <option value="Aïn Témouchent">Aïn Témouchent</option>
                        <option value="Ghardaïa">Ghardaïa</option>
                        <option value="Relizane">Relizane</option>
                    </select>
                </div>
            </div>



            <div class="row mt-3 gy-4 d-flex align-items-center justify-content-center" id="content_card">

                <?php if (mysqli_num_rows($result)) {
                         while ($rows = mysqli_fetch_assoc($result)) { ?>

                <span class="<?= $rows['wilaya']?> col-4 ">

                    <div class="card text-white bg-light mb-3  ">
                        <div class="pt-2  pl-2  text-dark">
                            <img class="border rounded-circle" src="uploads\<?= $rows['user_img'];   ?>" width="50"
                                height="50" alt="">
                            <b class="pt-2  pl-2  text-dark"><?= $rows['name'];   ?></b>
                        </div>

                        <div class="card-body text-dark">
                            <h5 class="card-title text-right "><?= $rows['wilaya'];   ?></h5>
                            <a href="program-details.php?id=<?= $rows['id'];   ?>"
                                class="btn btn-primary d-flex justify-content-center">Show Program</a>
                        </div>
                    </div>
                </span>

                <?php } }  ?>

            </div>

        </div>
    </section><!-- End Team Section -->
    <script src="assets/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="assets/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    // Get the dropdown and the content elements
    var dropdown = document.getElementById("city");
    var content = document.getElementById("content_card");

    // Attach onchange event listener to the dropdown
    dropdown.onchange = function() {
        // Get the selected value from the dropdown
        var selectedValue = dropdown.value;

        // Get all the content elements
        var items = content.getElementsByTagName("span");

        // Loop through all the content elements
        for (var i = 0; i < items.length; i++) {
            // Check if the current content element has the selected value as a class
            console.log(items[i].classList + "  " + selectedValue);
            if (selectedValue == "all" || items[i].classList.contains(selectedValue)) {
                // Show the content element if it matches the selected value
                items[i].style.display = "block";
            } else {
                // Hide the content element if it doesn't match the selected value
                items[i].style.display = "none";
            }
        }
    }
    </script>


</body>

</html>