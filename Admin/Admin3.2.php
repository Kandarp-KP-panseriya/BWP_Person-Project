<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BankWalaPerson</title>
    <link rel="stylesheet" href="AdminStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        #mainright {
            float: none;
            width: 100%;
        }
    </style>
    <?php
    if (isset($_POST['submit'])) {

        include '../connection.php';
        $name = $_POST['name'];
        $email = $_POST['Email'];
        $username = $_POST['Aname'];
        $password = $_POST['password'];

        $email_ = "SELECT * FROM signup WHERE Email = '$email'";
        $run_email = mysqli_query($conn, $email_);
        $count1 = mysqli_num_rows($run_email);
        //echo $catch['Email'];
    

        $usr_ = "SELECT * FROM signup WHERE  Username = '$username'";
        $run_usr = mysqli_query($conn, $usr_);
        $count = mysqli_num_rows($run_usr);
        if ($count1 > 0) {
            echo "Admin Already exist";
        } elseif ($count > 0) {
            echo "Admin name Already exist";
        } else {
            $sql = "INSERT INTO `signup` (`Name`, `Email`, `Username`, `Password`, `User/Admin`) VALUES ('$name', '$email', '$username', '$password', 'Admin')";
            $result = mysqli_query($conn, $sql);
            if ($result) {

                echo "<script>window.location='Admin3.2.php';</script>";
            }

        }

    }
    ?>
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img class="logo" src="../images/logo3.png" alt="">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <h1 class="hadadmin">Admin Pannel</h1>
                <!-- <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Services.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.html">About us</a>
                </li> -->
        </div>
        <a class="nav-link" href="../logout.php">LogOut</a>
    </div>
</nav>
<!---------------------------------------Add new Admin--------------------------------------------------------------------------------------------->

<body>

    <div class="main-right p-3">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="Admin3.php">
                        <<< </a>
                </li>
                <li class="page-item"><a class="page-link" href="Admin3.php">Admin Profile</a></li>
                <li class="page-item"><a class="page-link" href="Admin3.2.php">Add New Admin</a></li>
                <li class="page-item"><a class="page-link" href="Admin3.2.php">>></a></li>
            </ul>
        </nav>
        <div class="rightAdmininput" id="mainright">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="input-group">
                    <span class="input-group-text">Admin Name</span>
                    <input type="text" name="name" class="form-control" required>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Email</span>
                    <input type="Email" name="Email" class="form-control" required>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Admin Id name</span>
                    <input type="text" name="Aname" class="form-control" required>
                </div><br>
                <!-- <div class="input-group">
                    <span class="input-group-text">Description</span>
                    <input type="text"  class="form-control" required>
                </div><br> -->
                <div class="input-group">
                    <span class="input-group-text">Password</span>
                    <input type="password" name="password" class="form-control" required>
                </div><br>

                <div class="col-12 mb-5 text-center">
                    <button class="btn btn-primary" name="submit" type="submit">Add Admin</button>
                </div>
            </form>
        </div>

        <div class="UserDefineCard">
            <div class="d-flex justify-content-evenly">
                <div class="row justify-content-md-center">
                    <?php
                    include '../connection.php';
                    $sql = "SELECT * FROM `signup`";
                    $result = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $AUcolum = $row['User/Admin'];
                            $MainAdminName = $row['Name'];
                            if ($AUcolum == "Admin" && $MainAdminName != "Kandarp Panseriya") { ?>
                                <div class="card" style="width: 18rem;">
                                    <img src="../images/logo5.jpg" class="card-img-top">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h5>
                                                <?php echo $row['Name']; ?>
                                            </h5>
                                            <hr>
                                            <p>
                                                <?php echo $row['Email']; ?>
                                            </p>
                                            <p>Junior Admin</p>
                                            <a href="Update.php?id=<?php echo $row['Id']?>"><button type="button" class="btn btn-success">Update</button></a>
                                            <a href="DeleteAdmin.php?id=<?php echo $row['Id']?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="main-left">
        <h3> <a href="Admin3.php"> Profile >>>>></a></h3>
        <hr>
        <h3> <a href="Admin1.php"> Current Users</a></h3>
        <hr>
        <h3> <a href="Admin2.php"> FeedBack</a></h3>
        <hr>
        <h3> <a href="Admin4.php"> Add Bank Details</a></h3>
        <hr>
        <h3> <a href="Admin5.php"> User Add This </a></h3>
        <hr>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>