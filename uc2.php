<?php
session_start();
include 'db_connect.php'; // Include the database connection file
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['uname'];
    $_SESSION['uname'] = $fname;
    header("Location: uc3.php"); // Redirect to uc2.php
    exit(); 
}
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/caf34cee9a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="frithstyle.css">  
    <style>
        .uc-bg {
            background-image: url('https://img.freepik.com/premium-photo/extra-dark-gain-noise-texture-background_294865-3483.jpg');
            background-size: cover;
            height: 100vh;
            padding: 0 25px;
        }

        .uc-card:hover .uc-card-header,
        .uc-card:hover .uc-card-content {
            box-shadow: 1px 1px 12px 0px rgba(137, 179, 179, 0.25);
            transform: scale(1.003);
        }

        .uc-card:hover .uc-label {
            color: rgba(255, 255, 255, 0.80);
        }

        .uc-card:hover .uc-input {
            border-color: rgba(190, 221, 220, 0.40);
        }

        .uc-card-header {
            background-color: #1D1D1D;
            border-top-right-radius: 0px;
            border-top-left-radius: 0px;
            padding: 10px;
            padding-top: 18px;
            text-align: center;
            border-style: solid;
            border-color: grey;
            border-width: 0px;
            border-bottom-width: 0px;
            box-shadow: 0px 0px 4px 0px rgba(137, 179, 179, 0.20);
            transition: 1.50s;
        }

        .uc-card-head {
            color: rgba(255, 255, 255, 0.80);
            font-size: 18px;
            font-weight: 600;
        }

        .uc-card-content {
            background-color: #1D1D1D;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
            padding: 20px;
            padding-top: 20px;
            text-align: center;
            box-shadow: 0px 0px 4px 0px rgba(137, 179, 179, 0.20);
            color: white;
            transition: 1.50s;
        }

        .uc-label {
            color: rgba(185, 213, 213, 0.80);
            font-family: 'Work Sans';
            transition: 0.50s;
        }

        .uc-input {
            background: transparent;
            border-width: 0px;
            border-bottom-width: 1px;
            border-style: solid;
            border-color: rgba(190, 221, 220, 0.20);
            outline: none;
            color: white;
            padding: 3px;
            transition: 0.50s;
        }

        .uc-para {
            font-size: 12px;
            color: grey;
            font-family: 'Work Sans';
        }

        .uc-link {
            color: rgba(255, 255, 255, 0.60);
            cursor: pointer;
            transition: 0.30s;
        }

        .uc-link:hover {
            color: rgba(255, 255, 255, 0.80);
            text-decoration: none;
        }

        .uc-button-cont {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 45px;
        }

        .uc-button {
            background-color: rgba(86, 86, 86, 0.15);
            border-color: #B9D5D5;
            border-style: solid;
            color: rgba(172, 197, 197, 0.60);
            padding: 2px 40px;
            border-width: 0;
            font-size: 20px;
            transition: 0.25s;
            border-radius: 5PX;
        }

        .uc-button:focus {
            outline: none;
            color: rgba(172, 197, 197, 0.90);
            transform: scale(1.01);
            box-shadow: 0 0 6px rgba(212, 227, 227, 0.10);
        }

        .uc-button:hover {
            color: rgba(172, 197, 197, 0.90);
            transform: scale(1.01);
            box-shadow: 0 0 6px rgba(212, 227, 227, 0.10);
        }
    </style>
</head>

<body>
    <div class="uc-bg d-flex flex-column justify-content-center">
        <div class="container d-flex flex-row justify-content-center">
            <div class="row uc-card">
                <div class="col-12 uc-card-header">
                    <h1 class="uc-card-head">F.R.I.T.H</h1>
                </div>
                <div class="col-12 uc-card-content">
                    <p class="uc-para pb-4">Refer to our <a class="uc-link">privacy policy</a> and <a class="uc-link">terms of use</a> before signing up</p>
                    <form class="text-center" method="POST">
                        <label for="uname" class="uc-label">Username:</label><br />
                        <input class="uc-input" id="uname" name="uname" type="text" required><br /><br />
                        <div class="uc-button-cont">
                            <button alt="next" class="uc-button" type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                        <div class="text-center pt-2">
                            <p class="uc-para">Already have an account? <a href="userlogin.php" class="uc-link">Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>