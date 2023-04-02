<?php
include "../crud/read.php";
include_once "../assets/config.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>Admin Page</title>
        <?php include_once "../assets/bootcss.php"; ?>
        <link rel="stylesheet" href="style.css">
    </head>

    <body data-spy="scroll" data-target="#navbar-example">
        <!-- ************************* NAVBAR ************************* -->
        <?php include_once "../assets/navbar.php"; ?>
        <!-- ############################## FIN NAV######################################## -->

        <!-- ************************* MY TASK ************************* -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- ************************* MY TASK  HEAD *************************-->
                <!-- BUTTON ETAT -->
                <div class="justify-left-left">
                    <div class="navbar-body">
                        <a class="btn btn-outline-light" href="finish.php">Archives</a>
                    </div>
                </div>
                <br>
                <!-- ************************* TITLE && BTN ADD TASK ************************* -->
                <div class="row ">
                    <div class="col ">
                        <h2 class="text-center text-white">Programme This Week</h2>
                        <br>
                        <button class="btn btn-success float-right " data-toggle="modal" data-target="#modalRegisterForm">New <i class="fas fa-plus"></i></button>
                        <button class="btn btn-success float-right mr-2" data-toggle="modal" data-target="#modalInjection">New <img src="..\assets\img\injection.png" width="19" height="20" class="d-inline-block align-top" alt=""> </button>
                    </div>
                </div>
                <br>
                <!-- ####################################   #################################### -->

                <!-- ************************* TABLE   ************************* -->

                <div class="row ">
                    <?php if (mysqli_num_rows($result)) { ?>

                        <div class="col justify-content-center ">

                            <div class="main-content1">
                                <div class="table-responsive ">
                                    <table class="table ">
                                        <thead class="thead">
                                            <tr>
                                                <th scope="row">ID</th>
                                                <th scope="row">Day</th>
                                                <th scope="row">Date</th>
                                                <th scope="row">Injection</th>
                                                <th scope="row">Archive</th>
                                                <th scope="row">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody  ">
                                            <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                                                <tr>
                                                    <td><?= $rows['ID'];   ?></td>
                                                    <td><?= $rows['day'];   ?></td>
                                                    <td><?= $rows['date']; ?></td>
                                                    <td><?= $rows['name_injection']; ?></td>
                                                    <td>
                                                        <a class="btn btn-default" href="etat.php?id=<?php echo ($rows['ID'] . " & etat=" . $rows['etat']); ?>"><i class="far fa-check"></i> </a>
                                                    </td>

                                                    <td>
                                                        <button class="btn btn-primary edit_injection"> <img src="..\assets\img\injection.png" width="19" height="20" class="d-inline-block align-top" alt=""></button>

                                                        <button class="btn btn-primary modaledit"><i class="fas fa-pencil-alt"></i></button>
                                                        <a class="btn btn-danger" href="delete.php?id=<?= $rows['ID']; ?>"><i class="fas fa-trash-alt"></i></a>
                                                    </td>




                                                </tr>
                                        <?php }
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- #################################### FIN TABLE ####################################-->

            </div>
        </div>
        <!-- ######################################################################################## -->

        <!--Model pop up ADD -->
        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">ADD NEW DAY</h4>
                    </div>
                    <div class="modal-body mx-3">

                        <form action="controle/add_day.php" method="POST">

                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="titl"><b>Day</b></label>
                                <select class="form-select" name="day" aria-label="Day of week">
                                    <option selected>Choose a day</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>

                            </div>
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="start"><b>date</b></label>
                                <input type="date" name="da" id="start" name="trip-start" value="2023-04-1" min="2023-01-01" class="form-control validate">
                            </div>
                            
                            <div class="modal-footer d-flex justify-content-center">
                                <button class="btn btn-primary" name="send">Add</button>
                                <button class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ######################################################################################## -->
        <!--Model pop up injection -->
        <div class="modal fade" id="modalInjection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">ADD NEW INJECTION </h4>
                    </div>
                    <div class="modal-body mx-3">

                        <form action="controle/add_injection.php" method="POST">

                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="injection"><b>Injection</b></label>
                                <input type="text" name="injection" id="injection" class="form-control validate">

                            </div>

                            <div class="modal-footer d-flex justify-content-center">
                                <button class="btn btn-primary" name="send">Add</button>
                                <button class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ######################################################################################## -->

        <!--Model pop up injecton -->
        <div class="modal fade" id="modaleditinjecton" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header text-center">
                        <h5 class="modal-title w-100 font-weight-bold">INJECTION </h5>
                    </div>

                    <div class="modal-body mx-3">
                        <form action="controle\edit_injection.php" method="POST">


                            <div class="md-form mb-4">
                                <input type="hidden" name="id_program" id="id_program">
                                <?php
                                $sql = "SELECT id_injection, name_injection FROM injection WHERE id_user=" . $_SESSION['id'];
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result)) {
                                    while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                        <input type="checkbox" id="<?= $rows['name_injection'] ?>" name="option[]" value="<?= $rows['name_injection'] ?>">
                                        <label for="<?= $rows['name_injection'] ?>"><?= $rows['name_injection'] ?></label>
                                <?php }
                                }
                                ?>
                            </div>

                            <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" name="save">save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ######################################################################################## -->
        <!--Model pop up EDIT -->
        <div class="modal fade" id="modaledi" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title w-100 font-weight-bold">EDIT Task</h5>
                    </div>

                    <div class="modal-body mx-3">
                        <form action="controle/edit_day.php" method="POST">

                            <input type="hidden" name="id_program" id="up_id">
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="dday"><b>Day</b></label>
                                <select class="form-select" name="day" id="day_edit" id="dday" aria-label="Day of week">
                                    <option selected>Choose a day</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>



                                <div class="md-form mb-4">
                                    <label for="start"><b>date</b></label>
                                    <input type="date" name="date" id="date" id="start" name="trip-start" class="form-control validate">
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary" name="save">save</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ######################################################################################## -->

        <?php include_once "../assets/bootjs.php"; ?>
        <script>
            $(document).ready(function() {
                $(".edit_injection").click(function() {
                    $("#modaleditinjecton").modal("show");
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();
                    $('#id_program').val(data['0']);


                });

                $(".modaledit").click(function() {
                    $("#modaledi").modal("show");

                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();
                    var dropdown = document.getElementById("day_edit");
                    for (var i = 0; i < dropdown.options.length; i++) {
                        if (dropdown.options[i].text === data['1']) {
                            dropdown.selectedIndex = i;
                            break;
                        }
                    }
                    $('#up_id').val(data['0']);
                    $('#date').val(data['2']);
                });


            });
        </script>
    <?php
} else {
    header("Location: ../index.php");
    exit();
}
    ?>
    </body>

    </html>