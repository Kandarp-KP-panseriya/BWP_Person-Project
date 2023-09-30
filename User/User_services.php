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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style1.css">
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
                        <a class="nav-link  active" href="User_services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="My_services.php">My Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="User_about.php">About us</a>
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
        <section id="Home">
            <div class="d-flex justify-content-around p-3">
                <a href="#Home"><button class="btn btn-primary" id="">Main</button></a>
                <a href="#OpenAccount"><button class="btn btn-primary" id="">Open Account</button></a>
                <a href="#online apps"><button class="btn btn-primary" id="">Online Payment Apps</button></a>
                <a href="#Demate Accounts"><button class="btn btn-primary">Demate Account</button></a>
                <a href="#Credit Cards"><button class="btn btn-primary">Credit Cards</button></a>
                <a href="#Fixed Deposits"><button class="btn btn-primary">Fixed Deposits</button></a>
            </div>
        </section>
        <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-secondary ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse px-5" id="navbarNav">

                <ul class="navbar-nav text-align">
                    <li class="nav-item active">
                        <a class="navbar-brand btn btn-primary " href="#">Diffrent Banks</a>
                    </li>
                    <li class="nav-item active">
                        <a class="navbar-brand btn btn-primary" href="#">Online Payment Apps</a>
                    </li>
                    <li class="nav-item active">
                        <a class="navbar-brand btn btn-primary" href="#">Demate Accounts</a>
                    </li>
                    <li class="nav-item active">
                        <a class="navbar-brand btn btn-primary" href="#">Credit Cards</a>
                    </li>
                    <li class="nav-item active">
                        <a class="navbar-brand btn btn-primary" href="#">Fixed Deposits</a>
                    </li>
                </ul>
            </div>
        </nav>-->
        <section id="OpenAccount" class="mb-5">
            <table class="table table-bordered border-secondary bg-light w-80">
                <thead class="text-center bg-info">
                    <h3 class="text-center">Best Saving Accounts</h3>
                    <tr>
                        <th scope="col">Saving Accounts</th>
                        <th scope="col">Interest Rate</th>
                        <th scope="col">Minimum Balance Requirement</th>
                        <th scope="col">Add Services</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $sql = "SELECT * FROM `savingaccount`";
                    $result = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>' . "<td>" . $row['Accounts'] . "</td>" . "<td>" . $row['InterestR'] . "</td>" . "<td>" . $row['mrb'] . "</td>"; ?>
                            <td>
                                <a
                                    href="User_interested2.php?id=<?php echo $row['ID'] ?> & user=<?php echo $_SESSION["Username"] ?>">
                                    <button class="btn btn-warning">I'm interested</button>
                                </a>
                            </td>
                            <?php
                        }
                    } ?>
                </tbody>
            </table>
            <hr>
            <br>
            <!-------------------------------------------------------------------------------------------------->
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
                <tbody class="text-center">
                    <?php
                    $sql = "SELECT * FROM `accountlimits`";
                    $result = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>' . "<td>" . $row['Banknm'] . "</td>" . "<td>" . $row['CWL'] . "</td>" . "<td>" . $row['CTL'] . "</td>"; ?>
                            <td>
                                <a
                                    href="User_interested.php?id=<?php echo $row['Id'] ?> & user=<?php echo $_SESSION["Username"] ?>">
                                    <button class="btn btn-warning">I'm interested</button>
                                </a>
                            </td>
                            <?php

                        }
                    } ?>
                </tbody>
            </table>
            <hr>
            <br>
            <!------------------------------------------------------------------------------------------------->

            <br>
            <table class="table table-bordered border-info m-2">
                <thead class="text-center bg-secondary">
                    <h4 class="text-center">Documents to be Submitted for Opening a Savings Account</h4>
                </thead>
                <tbody class="">
                    <tr>
                        <th scope="col">Proof of age and identity</th>
                        <td> PAN Card, Voter ID, Passport, and Driving license</td>
                    </tr>
                    <tr>
                        <th scope="col">Photographs</th>
                        <td>At least 2 passport-sized photographs</td>
                    </tr>
                    <tr>
                        <th scope="col">Proof of address</th>
                        <td>Driving license, Voter’s ID, Passport, Utility bill</td>
                    </tr>
                    <tr>
                        <th scope="col">Senior Citizen Card</th>
                        <td> Document with proof of their age. A senior citizen card is
                            issued by the Social Welfare Department and is the
                            document that is most preferred as proof.</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!------------------------------------------------------------------------------------------------->

        <section id="online apps">
            <table class="table table-bordered border-primary">
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
                        <td> RBI approved secure e-wallet<br>Zero banking charge<br>Utilities: Payments bank, ticket
                            booking- flight, train, bus & movie, UPI Payments, etc.
                            <br>Transaction limit: 1L for wallet & 1L+ for UPI bank transfer
                        </td>
                        <td>Available on Android & iOS<br>
                            Zero banking charge<br>
                            Utilities: UPI payments, Bill payments- phone, DTH service, gas, ticket booking- train, bus,
                            flight etc.<br>
                            Transaction Limit: More than 1L
                        </td>
                        <td>
                            Bill Payments, DTH recharge, ticket bookings <br>
                            UPI transactions <br>
                            Zero banking charge<br>
                            Transaction limit:10000 for wallet and 1L for UPIAt this stage, it’s impossible to predict
                            who will the race in digital payments
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table class="table table-bordered border-info m-2">
                <thead class="text-center bg-secondary">
                    <h4 class="text-center">Paytm vs Google Pay vs PhonePe:Information</h4>
                </thead>
                <tbody class="">
                    <tr>
                        <th scope="col">Paytem</th>
                        <td> Paytm is the wunderkind of One97 Communication Ltd. marketed by Vijay Shekhar Sharma in
                            2010.
                            Initial functionalities included bill payment for mobile, DTH service, and online purchase.
                            Since then, Paytm has evolved as a sophisticated mobile payment application with a recorded
                            250M+ users in the mere extent of 8 years and a robust capacity of 5000 transactions per
                            second.
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Google Pay</th>
                        <td>Google presented its first digital payment app in 2017 founded on NPCI’s UPI platform.
                            Originally branded as Tez, the app was later rebranded as Google Pay. It was an instant hit
                            among the Indian users with 8.5M installations. In a record time of 40 days, 30M
                            transactions
                            were performed.</td>
                    </tr>
                    <tr>
                        <th scope="col">Phone Pe</th>
                        <td>PhonePe was engendered by former Flipkart employees Sameer Nigam and Rahul Chari in 2015. In
                            August 2016, PhonePe was the 1st Android app providing UPI based user services. In 3 months,
                            the
                            app showed a record-breaking download crossing 10M users. PhonePe also hit the 50M badge on
                            the
                            Google Play store swiftly.
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <br>
        </section>
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
                    </tr>
                </thead>
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
                    $da1 = "Zerodha";
                    $da2 = "Angel Broking";
                    $da3 = "Groww"; ?>
                    <?php
                    $sql = "SELECT * FROM `demateaccounts`";
                    $result = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>' . "<th>" . $row['Details'] . "</th>" . "<td>" . $row['Demat-broker-1'] . "</td>" . "<td>" . $row['Demat-broker-2'] . "</td>" . "<td>" . $row['Demat-broker-3'] . "</td>"; ?>

                            <?php

                        }
                    } ?>

                    <tr>
                        <th>
                            Try
                        </th>

                        <td>
                            <a
                                href="User_interested3.php?id=<?php echo $da1 ?> & user=<?php echo $_SESSION["Username"] ?>">
                                <button class="btn btn-warning">I'm interested</button>
                            </a>
                        </td>
                        <td>
                            <a
                                href="User_interested3.php?id=<?php echo $da2 ?> & user=<?php echo $_SESSION["Username"] ?>">
                                <button class="btn btn-warning">I'm interested</button>
                            </a>
                        </td>
                        <td>
                            <a
                                href="User_interested3.php?id=<?php echo $da3 ?> & user=<?php echo $_SESSION["Username"] ?>">
                                <button class="btn btn-warning">I'm interested</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <br>
        </section>


        <section id="Credit Cards">
            <table class="table table-bordered border-secondary">
                <thead class="text-center bg-secondary">
                    <tr>
                        <th class="text-center">Credit Cards</th>
                    </tr>
                </thead>
                <tr>
                    <td class="text-center">Coming Soon</td>
                </tr>
            </table>
        </section>
        <br>
        <hr>
        <section id="Fixed Deposits">
            <table class="table table-bordered border-secondary">
                <thead class="text-center bg-secondary">
                    <tr>
                        <th class="text-center">Fixed Deposits</th>
                    </tr>
                </thead>
                <tr>
                    <td class="text-center">Coming Soon</td>
                </tr>
            </table>
        </section>
        <a href="#Home"><button class="btn btn-primary">Up</button></a>
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