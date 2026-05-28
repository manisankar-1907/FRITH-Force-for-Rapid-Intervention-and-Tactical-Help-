<?php
session_start(); 
include 'db_connect.php'; // Include the database connection file

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $check = "SELECT username, password FROM user_info WHERE username = '$username' AND password='$password'";
        $checkedResult = $con->query($check);

        if($checkedResult->num_rows > 0) {
            header("Location: home.php"); 
            exit();
        }
        else {
            $error = "<p style='color:#AD0F12; text-align: center; font-size: 12px; margin: 0px 0px;'>Incorrect username or password!</p>";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>F.R.I.T.H User Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frithstyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/caf34cee9a.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="official-login-bg d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row shadow-lg">
                <div class="col-12 col-md-6 official-login-card-1 d-flex flex-column justify-content-between">
                    <img class="official-login-logo" src="https://res.cloudinary.com/diswytakp/image/upload/v1747880510/InShot_20250522_073952251_ffclqq.png" />
                    <div class="mb-5">
                        <h1 class="official-login-head">Welcome Back</h1>
                        <p class="official-login-para">This is your gateway to safety, hope, and strength. At F.R.I.T.H, we stand with you to protect, to listen and to act. Log in to stay updated, report concerns, or seek support. Your voice matters. Your life matters.</p>
                    </div>
                    <p class="official-login-para">Powered by TG Govt. Built by Mani Sankar.</p>
                </div>
                <div class="col-12 col-md-6 official-login-card-2 text-center d-flex flex-column justify-content-center">
                    <?php if (isset($error)) { echo "$error"; } ?>
                    <form method="POST" action="userlogin.php">
                        <div class="text-left">
                            <p class="officials-login-para mb-0">Username</p>
                        </div>
                        <div class="input-group login-form mt-2">
                            <input name="username" type="text" class="form-control form-input" id="autoSizingInputGroup1" required>
                        </div>
                        <div class="text-left">
                            <p class="officials-login-para mb-0">Password</p>
                        </div>
                        <div class="input-group login-form mt-2">
                            <input name="password" type="password" class="form-control form-input" id="autoSizingInputGroup2" required>
                        </div>
                        <a href="#" class="officials-login-link">Forgot password?</a>
                        <button type="submit" class="officials-login-button mt-3 shadow">Login</button>
                        <p class="officials-login-para mt-4">Don't have an account? <a href="uc1.php" class="ml-1 officials-login-link">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>