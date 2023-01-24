<?php
    session_start();
    if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
    include('server.php');

    $user = $_SESSION['username'];

    $findID = mysqli_query($conn,"SELECT * FROM member WHERE username = '$user'");
    $idmember = '';
    $membername = '';
    if(mysqli_num_rows($findID) > 0)
    {
        while($row = mysqli_fetch_row($findID)) {
            $idmember = $row[0];
        }
    }
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
                            <a href="mainpage.php" class="nav-link" style="margin-left: 800px;">Home</a>
                        </li>
                    </ul>
                </div>
        </div>
        </nav>
        </div>
        <br>
        <br>
        <!-- COURSE SECTION -->
        <section id="course" class="course">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>All Courses You Have</h2>
                            <b>- Need help or have questions? Please send your message via contact on home page.</b>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                            $sql = "SELECT receipt.*
                                        , course.*
                                    FROM receipt
                                    JOIN course
                                    ON receipt.id_course = course.id_course
                                    AND receipt.id_member = '$idmember'";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($result)){
                        ?> 
                        <!-- course -->
                    <div class="col-12 col-lg-4 work-box" class="btn btn-primary btn-lg show-modal" data-toggle="modal"
                        data-target="#myModal">
                        <div class="photobox photobox_type10">
                            <div class="photobox__previewbox">
                                <!-- Image  -->
                                <img src = "images/<?=$row['image']?>" class="photobox__preview" alt="Preview">
                                <!-- Image Title -->
                                <span class="photobox__label"><?=$row['subject']?><br><?=$row['coursename']?><br>
                                    <div class="buy-btn">
                                        <a href="study.php?id=<?=$row['id_course']?>">
                                            <button>STUDY</button>
                                        </a>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    mysqli_close($conn);
                    ?>  
                </div>
            </div>
        </section>
        <br>
        <br>
        <!-- FOOTER SECTION -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>LERNEN</h5>
                        <h3>LEARN ANYWHERE, ANYTIME</h3>
                        <ul class="contact-nav">
                            <li><a data-scroll href="mainpage.php">Home</a></li>
                        </ul>
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