<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="images/favicon.png" /> <!-- logo -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="icofont.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/slick.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />

    <!-- Document Title -->
    <title> LERNEN | Learn anywhere, anytime</title>
</head>

<body>
    <!-- HEADER SECTION -->
    <header id="home">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <!-- Logo -->
                <a class="navbar-brand"><img src="images/lernenlogo.png" width="120" height="55"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="interactive-menu-button">
                        <a href="#">
                            <span>Menu</span>
                        </a>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <!-- Nav Link -->
                            <a class="nav-link" style="margin-left: 500px;">A broad selection of courses<span
                                    class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
        </div>
    </header>
    <form action="login_db.php" method="post">

        <!-- notification message-->
        <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <h3>
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </h3>
        </div>
        <?php endif ?>
        <!-- login here -->
        <div class="container-fluid">
            <div class="course-aside">
                <img src="images/aside3.svg" alt="" style="z-index: -1; height: 80%;">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="float:none;margin:auto;">
                        <div class="modal-body">
                            <h3 class="title">SIGN IN</h3>
                            <p class="description">Using Username & Password</p>
                            <div class="form-group">
                                <span class="input-icon"><i class="icofont-user"></i></span>
                                <input type="username" name="username" class="form-control" placeholder="Enter Username" required>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="icofont-ui-unlock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox">
                                <label>Remember me</label>
                            </div>
                            <a href="" class="forgot-pass">Forgot Password?</a>
                            <button class="btn" type="submit" name="login_user"><a class="text">LOGIN</a></button>
                            <br>
                            <br>
                            <hr>
                            <br>
                            <p class="account">You didn't have any account?</p>
                            <button class="btn" style="margin-top:10px; margin-bottom: 25px;"> <a href="register.php" class="text">SIGN UP</a></button>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- FOOTER SECTION -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>LERNEN</h5>
                    <h3>LEARN ANYWHERE, ANYTIME</h3>
                    <h6>© 2022 - LERNEN, All Right Reserved</h6>
                    <ul class="social">
                        <div class="wrapper">
                            <div class="icon email">
                                <div class="tooltip">
                                    lernen.official@gmail.com
                                </div>
                                <span><i class="icofont-ui-email"></i></span>
                            </div>
                            <div class="icon phone">
                                <div class="tooltip">
                                    +66&nbsp;43&nbsp;28&nbsp;3700
                                </div>
                                <span><i class="icofont-phone"></i></span>
                            </div>
                            <div class="icon facebook">
                                <div class="tooltip">
                                    Lernen
                                </div>
                                <span><i class="icofont-facebook"></i></span>
                            </div>
                            <div class="icon location">
                                <div class="tooltip" style="text-align: center; top: -360px;">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.932356228761!2d102.86359689999999!3d16.428261499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228bda829566e7%3A0x24ca9da06e436ef3!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lij4Liy4LiK4Lih4LiH4LiE4Lil4Lit4Li14Liq4Liy4LiZIOC4p-C4tOC4l-C4ouC4suC5gOC4guC4leC4guC4reC4meC5geC4geC5iOC4mQ!5e0!3m2!1sth!2sth!4v1657758535788!5m2!1sth!2sth"
                                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <span><i class="icofont-location-pin"></i></span>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Scripts Ends -->
</body>

</html>