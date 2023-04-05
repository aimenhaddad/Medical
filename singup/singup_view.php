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
        <div class="row main-content bg-success text-center">
            <div class="col-md-4 text-center company__info">
                <span class="company__logo">
                    <h2><img class="rounded-circle" height="100px" width="100px" src="../assets/img/injection.png" alt=""></h2>
                </span>
                <h4 class="company_title">Injection</h4>
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
                            <select name="wilaya" class="form-control " required>
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
                        

                        <div class="row">
                            <input type="text" name="uname" class="form__input" placeholder="Username" required>
                        </div>

                        <div class="row">
                            <input type="password" name="pass" class="form__input" placeholder="Password" required>
                        </div>

                        <div class="row">
                            <input type="password" name="re_pass" class="form__input" placeholder="Re_Password" required>
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