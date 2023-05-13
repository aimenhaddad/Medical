<?php 

include "controle/read_archives.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Archives</title>
    <?php include_once "../assets/bootcss.php";?>
    <link rel="stylesheet" href="style.css">
</head>

<body style=" background: #fff; ">

    <?php include_once "../assets/navbar.php";?>

    <div class="main-content">
        <div class="container-fluid" style=" background:rgba(255, 255, 255, 0.63); ">
            <div class="justify-left-left">
                <div class="navbar-body">

                    <a class="btn btn-outline-dark" href="../programmeweek/admin.php">This Week</a>
                </div>
            </div>
            <h2 class="text-center task">Archives</h2>



            <div class="row justify-content-center">
                <div class="col-12">

                   

                    <div class="main-content1">
                        <table class="table   text-center">
                            <thead class="thead">
                                <tr>

                                    <th scope="row">ID</th>
                                    <th scope="row">Day</th>
                                    <th scope="row">Date</th>
                                    <th scope="row">Injection</th>
                                    <th scope="row">unarchive</th>

                                </tr>
                            </thead>
                            <?php if (mysqli_num_rows($result)) {?>
                            <tbody class="tbody">
                                <?php while ($rows=mysqli_fetch_assoc($result)) { ?>
                                <tr> 

                                    <td><?= $rows['ID'];   ?></td>
                                    <td><?= $rows['day'];   ?></td>
                                    <td><?= $rows['date']; ?></td>
                                    <td><?= $rows['name_injection']; ?></td>

                                    <td>
                                        <a class="btn btn-default"
                                            href="controle/etat.php?id=<?php echo( $rows['ID']." & etat=".$rows['etat']);?>"><i class="fa-solid fa-x"></i> </a>
                                    </td>
                                </tr>
                                <?php } } ?>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
}else{
   header("Location: ../singin/singin_view.php");
   exit();
}
 ?>
    <script>
    $(document).ready(function() {

    });
    </script>
    <?php include_once "../assets/bootjs.php";?>
</body>

</html>