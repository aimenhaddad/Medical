<!DOCTYPE html>
<html>

<head>
    <?php 
  include_once "bootcss.php";
  include_once "config.php";
  ?>
    <style>
    .navbar {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        background: #000;
        border-radius: 3px;
        box-shadow: 0 5px 5px rgba(0, 0, 0, .4);
    }

    .navbar-body {
        margin-top: 10px;
    }

    .colo {
        color: #fff;
    }
    </style>
</head>

<body>




    <nav class="navbar  navbar-light bg-light  ">

        <div class="navbar-header">
            <a class="navbar-brand ml-2" href="../index.php">
                <img class="border rounded-circle" src="../assets/img/injection.svg" alt="" height="50" width="50">
                <b >Injection Management System</b>
            </a>
        </div>

        <ul class="nav nav-pills">
            <li class="dropdown">

                <?php 
        
        $id=$_SESSION['id'];
          $sql = "SELECT user_img FROM users WHERE id=$id ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
                <img src="../uploads/<?=$images['user_img']?>" class="border rounded-circle" height="50" width="50">
                <?php } }?>
                <span class="colo text-dark"> <?php echo " ". $_SESSION['name']; ?> </span>

                <span class="btn btn-lg  dropdown-toggle" data-toggle="dropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="colo"> <i class="caret"> </i> </span> </span>
                <ul class="dropdown-menu">
                    <li><a class="btn btn-default mode"><i class="fa fa-cog"></i> Setting</a></li>
                    <li><a class="btn btn-default" href="../logout/logout.php"><i class="fa fa-sign-out"></i> LogOut</a>
                    </li>



                </ul>
            </li>
        </ul>
    </nav>
    <!--Model pop up EDIT -->
    <div class="modal fade" id="uplo" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100 font-weight-bold">Profile</h5>
                </div>



                <form action="controle/upload.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body mx-3">
                        <?php if (isset($_GET['error'])): ?>
                        <p><?php echo $_GET['error']; ?></p>
                        <?php endif ?>
                        <div class="row">
                            <input type="file" name="my_image" class="form-control" />
                            <br>
                            <div class=" d-flex justify-content-end m-3">
                                <input type="submit" name="submit" value="Upload" class="btn btn-primary " />
                            </div>
                </form>
            </div>
            <h2 class="text-center">Change Password</h2>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
            <p class="alert alert-success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <form action="controle/change_password.php" method="post">
                <label>Old Password</label>
                <input type="password" name="op" placeholder="New Password" class="form-control" />
                <br>
                <label>New Password</label>
                <input type="password" name="np" placeholder="New Password" class="form-control" />
                <br>

                <label>Confirm New Password</label>
                <input type="password" name="c_np" placeholder="Confirm New Password" class="form-control" />
                <br>

                <div class=" d-flex justify-content-end my-3">
                    <button type="submit" class="btn btn-primary ">Save</button>
                </div>

            </form>
        </div>
    </div>
    </div>
    </div>
    <!-- ######################################################################################## -->

    <?php include_once "bootjs.php";?>
    <script>
    $(document).ready(function() {
        $(".mode").click(function() {
            $("#uplo").modal("show");
        });
    });
    </script>
</body>

</html>