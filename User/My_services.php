<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>User Services</title>
    <style>
        #imgapp {
            width: 30%;
        }

        #imgapp1 {
            width: 50%;
        }

        .trapp {
            text-align: center;
        }

    </style>
    <?php
    include '../connection.php';
    ?>
</head>


<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img class="logo" src="../images/logo3.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="User.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="User_services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="My_services.php">My Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="User_about.php">About us</a>
                    </li>
            </div>
            <img src="../images/profile.png" class="mx-1" width="2%" alt="">
            <?php echo $_SESSION['Username']; ?>
            <a class="nav-link mx-3" href="../logout.php">Logout</a>
        </div>
    </nav>
</header>

<body>
    <div class="container p-1">

        <table class="table table-bordered border-secondary bg-light w-80">
            <thead class="text-center bg-info">
                <h3 class="text-center">Best Saving Accounts</h3>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Banks</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $username =  $_SESSION['Name'];
                $sql = "SELECT * FROM `userinterest` WHERE `UserName` = '$username'";
                $result = mysqli_query($conn, $sql);

                $num = mysqli_num_rows($result);
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>' . "<td>" . $row['UserName'] . "</td>" . "<td>" . $row['UserEmail'] . "</td>" . "<td>" . $row['BankName'] . "</td>"; ?>
                        <?php
                    }
                } ?>
            </tbody>
        </table>
        <hr>
        <br>
    </div>
</body>



<footer>
    <?php include '../footer.php'; ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>

</html>
<!--                 <tr>
                        <th scope="col">Charges for opening a trading account</th>
                        <td>₹ 200</td>
                        <td>₹0</td>
                        <td>₹0</td>
                    </tr>

                    <tr>
                        <th scope="col">Brokerage for Equity delivery</th>
                        <td>₹0</td>
                        <td>₹ 15 if the order <₹ 50,000, ₹ 30 if the order value>₹ 50,000</td>
                        <td>0.05% or ₹ 20 per trade whichever is lower</td>
                    </tr>
                    <tr>
                        <th scope="col">The exchange</th>
                        <td>BSE , NSE , MCX, MCX-SX</td>
                        <td>BSE , NSE , MCX, MCX-SX</td>
                        <td>BSE, NSE, CSE, MSE, INX</td>
                    </tr>-->