<?php
include "read_user.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Injection Management System</title>
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
    <?php include_once "assets/navbar_index.php"; ?>
    <!-- ############################## FIN NAV######################################## -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Welcome to <span>Injection Management System</span></h1>
            <h2>This site helps you to know the injections that are in الجوارية every week</h2>
            <div class="d-flex">
                <a href="#services" class="btn-get-started scrollto">Get Started</a>

            </div>
        </div>
    </section><!-- End Hero -->

<!-- ############################## FIN ######################################## -->


    <section  class="services">
        <div class="container">
        <div class="section-title">
                <h2>Search Injection</h2>
                
        </div>
            <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="query">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
            <div class="row" >
                <?php
                    
            // Check if a search query is submitted
            if (isset($_GET['query'])) {
                // Process the search query and display the results
                $query = $_GET['query'];

                // Perform the database search using MySQLi or PDO
                if (trim($query) === "") {
                # code...
                } else {
                    include "assets/config.php";
                    // Prepare the query using a prepared statement to prevent SQL injection
                    $stmt = $conn->prepare("SELECT DISTINCT id_user FROM injection WHERE name_injection LIKE ?");
                    // Add wildcard characters to the search query
                    $searchQuery = '%' . $query . '%';
                    // Bind the search query to the prepared statement
                    $stmt->bind_param("s", $searchQuery);
                    // Execute the query
                    $stmt->execute();
                    // Store the result
                    $stmt->store_result();
                    // Bind the result to a variable
                    $stmt->bind_result($id_user);
                    // Display the search results
                    if ($stmt->num_rows > 0) {
                    while ($stmt->fetch()) {
                        $listID[] = $id_user;
                    }
                    // Close the statement
                    $stmt->close();

                // Iterate over the list of IDs
               
                foreach ($listID as $id_user) {
                    $stmt = $conn->prepare("SELECT id, name, wilaya, user_img FROM users WHERE id = ?");
                    // Bind the search query to the prepared statement
                    $stmt->bind_param("i", $id_user);
                    // Execute the query
                    $stmt->execute();
                    // Store the result
                    $stmt->store_result();
                    // Bind the result to variables
                    $stmt->bind_result($id, $name, $wilaya, $user_img);
                    // Fetch and display the results
                     
                     if ($stmt->num_rows > 0) {
                    while ($stmt->fetch()) {?>
                                
                                    <div class="col-lg-4  col-md-6 ">
                                        <div class="icon-box  " style="min-width: 350px;">
                                            <div class="icon">
                                                <img class="border rounded-circle" src="uploads\<?= $user_img ?>" height="100"
                                                 width="100">
                                            </div>
                                            <h4><a href="program-details.php?id=<?=$id ;?>&name=<?= $name ; ?>">
                                                    <?= $name ;   ?></a></h4>
                                            <p><?= $wilaya;  ?></p>
                                        </div>
                                    </div>
                            
                    <?php    }  
                    // Close the inner statement
                    $stmt->close();
                    }
            }
            }
                // Close the connection
                $conn->close();
                } 
            }
                ?>
        </div>      
        </div>
    </section>

    <!-- ######################################################################################## -->

    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>الجوارية</h2>
                <h3>Select the <span>الجوارية</span> whose program you want to know</h3>

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






            <div class="row" id="content_card">

                <?php if (mysqli_num_rows($result)) {
                    while ($rows = mysqli_fetch_assoc($result)) { ?>

                <span class="<?= $rows['wilaya'] ?> col-lg-4  col-md-6 ">

                    <div class="icon-box  " style="min-width: 350px;">
                        <div class="icon">
                            <img class="border rounded-circle" src="uploads\<?= $rows['user_img'];?>" height="100"
                                width="100">
                        </div>
                        <h4><a href="program-details.php?id=<?= $rows['id'];?>&name=<?= $rows['name'];   ?>">
                                <?= $rows['name'];   ?></a></h4>
                        <p><?= $rows['wilaya'];  ?></p>
                    </div>



                </span>

                <?php }
                }  ?>


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