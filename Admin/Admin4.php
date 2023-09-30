<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<!doctype html>
<html lang="en">
<!---------------------------------User Side Output--------------------------->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BankWalaPerson</title>
    <link rel="stylesheet" href="AdminStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <?php
    include '../connection.php';
    ?>
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
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img class="logo" src="../images/logo3.png" alt="">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <h1 class="hadadmin">Admin Pannel</h1>
        </div>
        <a class="nav-link" href="../logout.php">LogOut</a>
    </div>
</nav>
<!-------------------------------------Bank Detalis----------------------------------------------------------------------------------------------->

<body>

    <div class="main-right p-3">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="Admin4.php">User-side Output</a></li>
                <li class="page-item"><a class="page-link" href="Admin4.2.php">Edit service</a></li>
            </ul>
        </nav>

        <!--<tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>-->
        <div class="container">
            <table class="table table-bordered border-secondary bg-light">
                <thead class="text-center bg-info">
                    <h3 class="text-center">Best Saving Accounts</h3>
                    <tr>
                        <th scope="col">Saving Accounts</th>
                        <th scope="col">Interest Rate</th>
                        <th scope="col">Minimum Balance Requirement</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <td colspan="4">
                    <a href="Admin4.2.php">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>
                </td>
                <tbody class="text-center">
                    <?php
                    $sql = "SELECT * FROM `savingaccount`";
                    $result = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>' . "<td>" . $row['Accounts'] . "</td>" . "<td>" . $row['InterestR'] . "</td>" . "<td>" . $row['mrb'] . "</td>"; ?>
                            <td>
                                <a href="ServicesDelete.php?id=<?php echo $row['ID'] ?>"><i class='fa-solid fa-trash-can'></i></a>
                            </td>
                            <?php
                        }
                    } ?>
                </tbody>
            </table>
            <hr>
            <br>
            <table class="table table-bordered border-secondary bg-light">
                <thead class="text-center bg-info">
                    <h3 class="text-center">What is the Cash Withdrawal Limit & Cash Transaction Limit for
                        Savings
                        Accounts
                    </h3>
                    <tr>
                        <th scope="col"> Bank Name</th>
                        <th scope="col">Cash Withdrawal Limit*</th>
                        <th scope="col">Cash Transaction Limit*</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <td colspan="4">
                    <a href="Admin4.2.php">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>
                </td>
                <tbody class="text-center">
                    <?php
                    $sql = "SELECT * FROM `accountlimits`";
                    $result = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>' . "<td>" . $row['Banknm'] . "</td>" . "<td>" . $row['CWL'] . "</td>" . "<td>" . $row['CTL'] . "</td>"; ?>
                            <td>
                                <a href="ServicesDelete2.php?id=<?php echo $row['Id'] ?>"><i class='fa-solid fa-trash-can'></i></a>
                            </td>
                            <?php

                        }
                    } ?>
                </tbody>
            </table>

            <hr>
            <br>
            <!------------------------------------------------------------------------------------------------->

            <table class="table table-bordered border-primary bg-light">
                <thead class="text-center bg-success">
                    <h3 class="text-center">Online Payment Apps</h3>
                    <tr>
                        <th scope="col">Paytem</th>
                        <th scope="col">Google Pay</th>
                        <th scope="col">PhonePe</th>
                    </tr>
                </thead>
                <tr class="trapp">
                    <td><img id='imgapp' src="../images/logo-3.png" class="card-img-top pb-1" alt="...">
                    </td>
                    <td><img id='imgapp' src="../images/logo-4.png" class="card-img-top" alt="...">
                    </td>
                    <td><img id='imgapp' src="../images/logo-5.png" class="card-img-top" alt="...">
                    </td>
                </tr>
                <tbody class="text-center">

                    <tr>
                        <td>
                            -> RBI approved secure e-wallet
                            <br> -> Zero banking charge
                            <br> -> Utilities: Payments bank,ticket booking- flight, train, bus & movie, UPI Payments,
                            etc.
                            <br> -> Transaction limit: 1L for wallet & 1L+ for UPI bank transfer
                        </td>
                        <td> ->Available on Android & iOS<br>
                            -> Zero banking charge<br>
                            -> Utilities: UPI payments, Bill payments- phone, DTH service, gas, ticket booking- train,
                            bus,flight etc.<br>
                            -> Transaction Limit: More than 1L
                        </td>
                        <td>
                            -> Bill Payments, DTH recharge, ticket bookings <br>
                            -> UPI transactions <br>
                            -> Zero banking charge<br>
                            -> Transaction limit:10000 for wallet and 1L for UPI At this stage, it’s impossible to
                            predictwho will the race in digital payments
                        </td>
                    </tr>
                </tbody>
            </table>

            <hr>
            <br>
            <!-------------------------------------------------------------------------------------------------->

            <section id="Demate Accounts">
                <table class="table table-bordered border-secondary bg-light">
                    <thead class="text-center bg-info">
                        <h3 class="text-center">Demate Account</h3>
                        <tr>
                            <th scope="col">Details</th>
                            <th scope="col">Zerodha</th>
                            <th scope="col">Angel Broking</th>
                            <th scope="col">Groww</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <td colspan="5">
                        <a href="Admin4.2.php">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                    </td>
                    <tbody class="text-center">

                        <tr>
                            <th scope="col" class="trapp">Logo</th>
                            <td><img id='imgapp1' src="../images/logo-1.png" class="card-img-top" alt="...">
                            </td>
                            <td><img id='imgapp' src="../images/logo-2.png" class="card-img-top" alt="...">
                            </td>
                            <td><img id='imgapp' src="../images/bank-4.png" class="card-img-top" alt="...">
                            </td>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM `demateaccounts`";
                        $result = mysqli_query($conn, $sql);

                        $num = mysqli_num_rows($result);
                        if ($num > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>' . "<th>" . $row['Details'] . "</th>" . "<td>" . $row['Demat-broker-1'] . "</td>" . "<td>" . $row['Demat-broker-2'] . "</td>" . "<td>" . $row['Demat-broker-3'] . "</td>"; ?>
                                <td>
                                    <a href="ServicesDelete3.php?id=<?php echo $row['id'] ?>"><i class='fa-solid fa-trash-can'></i></a>
                                </td>
                                <?php

                            }
                        } ?>
                    </tbody>
                </table>
                <hr>
                <br>
            </section>
        </div>
    </div>
    <div class="main-left">
        <h3> <a href="Admin3.php"> Profile</a></h3>
        <hr>
        <h3> <a href="Admin1.php"> Current Users</a></h3>
        <hr>
        <h3> <a href="Admin2.php"> FeedBack</a></h3>
        <hr>
        <h3> <a href="Admin4.php"> Add Bank Details >>>>> </a></h3>
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