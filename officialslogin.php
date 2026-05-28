<!DOCTYPE html>
<html>

<head>
    <title>F.R.I.T.H Offcials Login</title>
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
    <div class="login-bg d-flex flex-column justify-content-center">
        <div class="container d-md-none">
            <div class="row d-flex flex-row">
                <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-center">
                    <div>
                        <img class="login-logo" src="https://res.cloudinary.com/diswytakp/image/upload/v1747880510/InShot_20250522_073952251_ffclqq.png" />
                        <p class="login-sub">Driven by purpose. Built to protect</p>
                    </div>
                </div>
                <!-- The login form -->
                <div class="col-12 col-md-6 login-cont-sm text-center d-flex flex-column justify-content-start">
                    <form>
                        <div class="input-group login-form">
                            <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                            <input type="text" class="form-control officials-form-input" id="autoSizingInputGroup1" placeholder="FRITH-DEPT-ID" required>
                        </div>
                        <div class="text-right"><a href="#" class="login-link mr-2">Forgot Password?</a></div>
                        <div class="input-group login-form mt-2">
                            <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
                            <input type="password" class="form-control officials-form-input" id="autoSizingInputGroup2" placeholder="Password" required>
                        </div>
                        <p class="login-para mt-4">Don't have an account? <a href="#" class="ml-1 login-link">Sign up</a></p>
                        <button type="submit" class="login-button shadow">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container d-none d-md-block">
            <div class="row d-flex flex-row">
                <div class="col-12 col-md-6 login-logo-cont text-center d-flex flex-column justify-content-center">
                    <div>
                        <img class="login-logo" src="https://res.cloudinary.com/diswytakp/image/upload/v1747880510/InShot_20250522_073952251_ffclqq.png" />
                        <p class="login-sub">Driven by purpose. Built to protect</p>
                    </div>
                </div>
                <!-- The login form -->
                <div class="col-12 col-md-6 login-cont pr-4 text-center d-flex flex-column justify-content-start">
                    <form>
                        <i class="fa-solid fa-users login-users-logo"></i>
                        <div class="input-group login-form">
                            <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                            <input type="text" class="form-control officials-form-input" id="autoSizingInputGroup1" placeholder="FRITH-DEPT-ID" required>
                        </div>
                        <div class="text-right"><a href="#" class="login-link mr-2">Forgot Password?</a></div>
                        <div class="input-group login-form mt-2">
                            <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
                            <input type="password" class="form-control officials-form-input" id="autoSizingInputGroup2" placeholder="Password" required>
                        </div>
                        <p class="login-para mt-4">Don't have an account? <a href="#" class="ml-1 login-link">Sign up</a></p>
                        <button type="submit" class="login-button shadow">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>