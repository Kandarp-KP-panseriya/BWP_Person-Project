<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/footer.css">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php

    if (isset($_POST['submit'])) {

        session_start();
        include 'connection.php';
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM signup WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);

        $change = mysqli_num_rows($result);
        if ($change) {
            // decode karva database no password made $pasww = mysqli_fetch_assoc($result)
            $get_passd = mysqli_fetch_assoc($result);
            $db_password = $get_passd['Password'];
            $db_UserAdmin = $get_passd['User/Admin'];

            $_SESSION['Name'] = $get_passd['Name'];
            $_SESSION['Username'] = $get_passd['Username'];
            
            // Not work but hash code compare essyly ---$compare = password_verify($password, $db_password);
            if ($password == $db_password && $db_UserAdmin == 'User') {
                echo '<script>alert("Login Succesfully  :)  :) ")</script>';
                echo "<script>window.location='User/User.php';</script>";

            } elseif ($password == $db_password && $db_UserAdmin == 'Admin') {
                echo '<script>alert("Admin Welcome to your Admin pannel :)  :) ")</script>';
                echo "<script>window.location='Admin/Admin1.php';</script>";
            } else {
                echo '<script>alert("Wrong Password :(  :( ")</script>';
            }

        } else {
            echo '<script>alert("Wrong Email :(  :( ")</script>';
        }
    }
    ?>
</head>
<style>
    body {
        background-color: rgb(241, 234, 240);
    }

    .container-fluid {
        background-color: rgb(142, 15, 70);
        color: white;
        padding: 0.0% 0px 0.0% 0px;
        font-size: 2.5vh;
        font-weight: bold;
    }

    .container-fluid a {
        color: white;
    }

    #login
    {
        padding-right: 1%;
    }

    .logo {
        padding-right: 5%;
    }

    .form-l {
        display: block;
        width: 28%;
        height: auto;
        padding: 1% 7% 1% 7%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 7%;
        margin-bottom: 10%;

        background-color: rgb(142, 15, 70);
        /* background-image: radial-gradient(rgb(109, 113, 230), rgb(181, 51, 110)); */
        align-items: center;
        text-align: center;
    }


    .form-l input {
        margin: auto;
        background: none;
        border: none;
        padding: 3%;
        margin: 3%;
        text-align: center;
        font-size: 1vw;
        background-color: aliceblue;
        border-radius: 10%;
        border: none;
    }

    input:hover {
        background-color: wheat;
        border: none;
    }

    h2 {
        font-size: 3vw;
        color: whitesmoke;
    }

    a {
        color: whitesmoke;
        font-size: 1vw;
        text-decoration: none;
    }

    .sub {
        background-color: wheat;
        border: none;
    }

    .sub:hover {
        background-color: rgb(237, 206, 149);
        text-decoration: underline;
    }

    i {
        color: whitesmoke;
        font-size: 1vw
    }

    .form-l h3 {
        color: rgb(214, 201, 178);
        font-size: 1.2vw;
    }

    @media (width <=992px) {
        .form-l {
            width: 40%;
            margin-top: 20%;
            margin-bottom: 20%;
        }

        .form-l h2 {
            font-size: 4vw;
        }

        .form-l h3 {
            color: rgb(214, 201, 178);
            font-size: 2vw;
        }

        .form-l a {
            font-size: 2vw;
        }

        .form-l input {
            font-size: 2vw;
        }

        .form-l i {
            font-size: 2vw;
        }
    }

    @media (width <=768px) {
        .form-l {
            width: 50%;
            margin-top: 20%;
            margin-bottom: 20%;
        }

        .form-l h2 {
            font-size: 5vw;
        }

        .form-l h3 {
            color: rgb(214, 201, 178);
            font-size: 2.5vw;
        }

        .form-l a {
            font-size: 2vw;
        }

        .form-l input {
            font-size: 2vw;
        }

        .form-l i {
            font-size: 2vw;
        }

    }

    @media (width <=576px) {
        .form-l {
            width: 70%;
            margin-top: 40%;
            margin-bottom: 40%;
        }

        .form-l h2 {
            font-size: 7.5vw;
        }

        .form-l h3 {
            color: rgb(214, 201, 178);
            font-size: 3vw;
        }

        .form-l a {
            font-size: 3vw;
            text-decoration: underline;
        }

        .form-l input {
            font-size: 3vw;
        }

        .form-l i {
            font-size: 3vw;
        }


        .logo {
            display: none;
        }

    

    }
</style>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <!---------------------------------------------------------------------------------------------->
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="form-l">
        <h2>Log In</h2>
        <hr>
        <hr>
        <i class="fa-solid fa-user fa-beat-fade"></i>
        <input class="user" name="email" type="text" placeholder="Email" required>
        <hr>
        <i class="fa-solid fa-lock fa-beat-fade"></i>
        <input class="password" name="password" type="password" placeholder="Enter password" required>
        <br>
        <input class="sub" type="submit" name="submit" value="Login">
        <h3 class="h3">For New User - <a href="Sign_up.php">Sign Up</a> <i
                class="fa-solid fa-angles-left fa-bounce"></i></h3>
    </form>
    <!-- ---------------------------------------------------------------------------------  -->
    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>