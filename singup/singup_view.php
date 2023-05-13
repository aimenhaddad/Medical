<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SING UP </title>
    <?php include_once "../assets/bootcss.php";?>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row main-content  text-center" >
            <div class="col-md-4 text-center company__info"style="background-color: #1977cc">
                <span class="company__logo">
                    <h2><a href="../index.php"><img class="border rounded-circle" height="100px" width="100px" src="../assets/img/injection.svg"
                            alt=""></a></h2>
                </span>
                <h4 class="company_title">Injection Management System</h4>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="container-fluid">
                    <div class="row">
                        <h2><b>SING UP</b></h2>
                    </div>
                    <div class="row">


                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <?php if (isset($_GET['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $_GET['success']; ?>
                        </div>
                        <?php } ?>


                    </div>

                    <form action="singup_control.php" method="POST" class="form-group">
                        <div class="row">
                            <input type="text" name="name" class="form__input" placeholder="Name Hospital " required>
                        </div>
                        <div class="row  ">
                            <select name="wilaya" id="mySelect" class="form-control col-md-4 float-right" required>
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


                        <div class="row">
                            <input type="text" name="uname" class="form__input" placeholder="Username" required>
                        </div>

                        <div class="row">
                            <input type="password" name="pass" class="form__input" placeholder="Password" required>
                        </div>

                        <div class="row">
                            <input type="password" name="re_pass" class="form__input" placeholder="Re_Password"
                                required>
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-center" name="singup">sing up</button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <p> have an account? <a href="../singin/singin_view.php">Sign In Here</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer -->

    <!-- JavaScript Bundle with Popper -->
    <?php include_once "../assets/bootjs.php";?>

</body>

</html>