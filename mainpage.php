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

                <!-- notification message-->
                <?php if (isset($_SESSION['success'])) : ?>
                <div class="success">
                    <h3>
                        <?php 
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                            ?>
                    </h3>
                </div>
                <?php endif ?>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <!-- Nav Link -->
                            <a class="nav-link">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <!-- Nav Link -->
                            <a class="nav-link" data-scroll href="#about-us">About</a>
                        </li>
                        <li class="nav-item">
                            <!-- Nav Link -->
                            <a class="nav-link" data-scroll href="#course">Courses</a>
                        </li>
                        <li class="nav-item">
                            <!-- Nav Link -->
                            <a class="nav-link" data-scroll href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <!-- Nav Link -->
                            <a class="nav-link" data-scroll href="#contact-us">Contact</a>
                        </li>
                        <?php if (isset($_SESSION['username'])) : ?>
                        <li class="nav-item dropdown">
                            <!-- Lang Dropdown Link -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><strong><?php echo $_SESSION['username']; ?></strong></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!-- Lang Dropdown Choice -->
                                <a class="dropdown-item" href="library.php">Library</a>
                                <!-- Lang Dropdown Choice -->
                                <a class="dropdown-item" href="mainpage.php?logout='1'">Logout</a>
                            </div>
                        </li>
                        <?php endif ?>
                    </ul>
                </div>
        </div>
        </nav>
        </div>

        <!-- HERO SECTION -->
        <div class="container-fluid hero">
            <img src="images/hero.svg" alt="">
            <div class="container">
                <!-- Hero Title -->
                <h1>Welcome Back</h1>
                <!-- Hero Title Info -->
                <p>Glad to see you here again.<br>Pick some course to learn!</p>
                <div class="hero-btns">
                    <!-- Hero Btn First -->
                    <a data-scroll href="library.php">Go To Library</a>
                    <!-- Hero Btn Second -->
                    <a data-scroll href="#contact-us">Get in Touch</a>
                </div>
            </div>
        </div>
    </header>
    <!-- SERVICES SECTION -->
    <section id="about-us" class="services">
        <div class="container-fluid">
            <div class="side-img">
                <img src="images/aside.svg" alt="">
            </div>
            <div class="side2-img">
                <img src="images/aside2.svg" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-4 service-txt">
                        <h2>Anything you need, we’ve got you covered</h2>
                        <div class="hero-btns service-btn">
                            <a data-scroll href="#contact-us">Get in Touch</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="service-box">
                            <img src="images/service-icon1.svg" alt="">
                            <!-- Service Title -->
                            <h3>Easy to learn<br>Easy to buy</h3>
                            <!-- Replace Patch to Image Under -->
                            <p>Learn online in your own time and at your own speed.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="service-box">
                            <img src="images/service-icon2.svg" alt="">
                            <!-- Service Title -->
                            <h3>24/7<br>Manage your own study time</h3>
                            <!-- Service Info -->
                            <p>Choose your schedule, set study goals and track your progress.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-6">
                    <img src="images/aboutimg.svg" alt="">
                </div>
                <div class="col-12 col-sm-12 col-lg-6">
                    <h5>OUR COMPANY</h5>
                    <h2>Lernen<br>in German</h2>
                    <!-- Replace About Us Text Under -->
                    <p>is mean learning in English. Let's learn together!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- COURSE SECTION -->
    <section id="course" class="course">
        <div class="container-fluid">
            <div class="course-aside">
                <img src="images/aside3.svg" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Buy Courses</h2>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $sql = "SELECT * FROM course ORDER BY id_course";
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
                                        <a href="detail.php?id=<?=$row['id_course']?>">
                                            <button>BUY</button>
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
    <!-- BLOG SECTION -->
    <section id="blog" class="blog">
        <div class="container-fluid">
            <div class="blog-aside">
                <img src="images/aside4.svg" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>Here we go!</h5>
                        <h2>Update News</h2>
                    </div>
                </div>
                <div id="blog-drag" class="row blog-slider" style="font-family: 'Noto Sans Thai', sans-serif;">
                    <div class="col-12 col-lg-4 blog-box blog-first">
                        <!-- Blog Post Title -->
                        <h6>ส่อง 4 สาขาน่าเรียนในปี 2021</h6>
                        <!-- Blog Post Date -->
                        <p>13 มิถุนายน 2564</p>
                        <!-- Blog Post -->
                        <p>สาขาวิชานวัตกรรมการสื่อสาร<br>สาขาการจัดการอีสปอร์ต<br>สาขาเทคโนโลยีดิจิทัลเพื่อการออกแบบ<br>สาขาวิชากัญชาเวชศาสตร์
                        </p>
                    </div>
                    <div class="col-12 col-lg-4 blog-box">
                        <!-- Blog Post Title -->
                        <h6>5 อันดับสายงานเงินเดือนสูงสุด</h6>
                        <!-- Blog Post Date -->
                        <p>16 มีนาคม 2564</p>
                        <!-- Blog Post -->
                        <p>งานไอที 23,255 - 41,122 บาท<br>งานบริการเฉพาะทาง 22,872 - 39,331 บาท<br>งานโทรคมนาคม 22,785 -
                            38,612 บาท<br>งานบริการด้านการแพทย์ 21,945 - 37,320 บาท<br>งานอีคอมเมิร์ซ 21,599 - 35,283
                            บาท</p>
                    </div>
                    <div class="col-12 col-lg-4 blog-box">
                        <!-- Blog Post Title -->
                        <h6>จ่อใช้โรงเรียนใหญ่ ต้นแบบสอน</h6>
                        <!-- Blog Post Date -->
                        <p>8 มิถุนายน 2563</p>
                        <!-- Blog Post -->
                        <p>สพฐ. เผยสอบคัดเลือก ม.4 ทั่วประเทศราบรื่น ยังคงกำหนดมาตรการป้องกันการแพร่เชื้อไวรัสโควิด-19
                            เข้มข้น เตรียมผลักดันให้โรงเรียนขนาดใหญ่เป็นต้นแบบการจัดการเรียนการสอนแบบ Social Distancing
                            ช่วงเปิดเทอมใหม่ 1 ก.ค.นี้ </p>
                    </div>
                    <!-- Blog Section to be showed on Drag  -->
                    <div class="col-12 col-lg-4 blog-box hiden-blog hide-blog">
                        <!-- Blog Post Title -->
                        <h6>ใบ ก.ว. จำเป็นสำหรับวิศวกรใน 8 สาขาเท่านั้น</h6>
                        <!-- Blog Post Date -->
                        <p>17 กันยายน 2564</p>
                        <!-- Blog Post -->
                        <p>1) วิศวกรรมโยธา<br>
                            2) วิศวกรรมไฟฟ้ากำลัง<br>
                            3) วิศวกรรมไฟฟ้าสื่อสาร<br>
                            4) วิศวกรรมเครื่องกล<br>
                            5) วิศวกรรมอุตสาหการ<br>
                            6) วิศวกรรมเหมืองแร่<br>
                            7) วิศวกรรมเคมี<br>
                            8) วิศวกรรมสิ่งแวดล้อม</p>
                    </div>
                    <div class="col-12 col-lg-4 blog-box hiden-blog  hide-blog">
                        <!-- Blog Post Title -->
                        <h6>อนุมัติแล้ว 11 กลุ่มวิชาเอก สายงานครู เปิดสอบท้องถิ่น รอบใหม่ ปี 2565</h6>
                        <!-- Blog Post Date -->
                        <p>26 กุมภาพันธ์ 2565</p>
                        <!-- Blog Post -->
                        <p>1) กลุ่มวิชาวัดผลประเมินผล<br>
                            2) กลุ่มวิชาจิตวิทยาและการแนะแนว<br>
                            3) กลุ่มวิชาคหกรรม<br>
                            4) กลุ่มวิชาบรรณารักษ์<br>
                            5) กลุ่มวิชานาฏศิลป์<br>
                            6) กลุ่มวิชาดนตรีไทย<br>
                            7) กลุ่มวิชาดนตรีสากล<br>
                            8) กลุ่มวิชาประถมศึกษา<br>
                            9) กลุ่มวิชาภาษาจีน<br>
                            10) กลุ่มวิชาเทคโนโลยีทางการศึกษา<br>
                            11) กลุ่มวิชาครูผู้ดูแลเด็ก</p>
                    </div>
                    <div class="col-12 col-lg-4 blog-box hiden-blog  hide-blog">
                        <!-- Blog Post Title -->
                        <h6>ผู้ร่วมก่อตั้ง Tezos กล่าวไม่แปลกใจที่ Celsius ล้มละลาย</h6>
                        <!-- Blog Post Date -->
                        <p>15 กรกฎาคม 2565</p>
                        <!-- Blog Post -->
                        <p>นาง Kathleen Breitman ผู้ร่วมก่อตั้ง Tezos แพลตฟอร์มบล็อกเชนโอเพนซอร์ซแบบกระจายศูนย์
                            ได้ออกมาแสดงความเห็นเกี่ยวกับเหตุการณ์การล้มละลายของบริษัทยักษ์ใหญ่ Celsius
                            ที่เพิ่งเกิดขึ้นไปเมื่อไม่นานมานี้ ในระหว่างการให้สัมภาษณ์กับ Bloomberg Technology
                            เมื่อวันที่ 15 กรกฎาคม Breitman กล่าวถึงกรณีของแพลตฟอร์มการให้ยืม crypto ชื่อดัง Celsius
                            โดยสังเกตว่าการตัดสินใจยื่นล้มละลายนั้นถือเป็นสิ่งที่น่าจะเกิดขึ้นอยู่แล้ว</p>
                    </div>
                </div>
                <!-- Blog Button to Show More or Less on Mobile&Tablet View  -->
                <button class="hide-me" id="blog-btn">Show More Stories</button>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION -->
    <section id="contact-us" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>CONTACT US</h5>
                    <h2>Get in Touch</h2>
                </div>
            </div>
            <form action="contact_db.php" method="post">
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
            <div class="row">
                <div class="col-12 col-lg-6 email">
                    <input placeholder="Your email" type="email" id="emailcontact" name="emailcontact" pattern=".+@gmail.com" size="30" required>
                </div>
                <div class="col-12 col-lg-6 email">
                    <input placeholder="Topic" type="subject" id="topic" name="topic"size="30" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12 message">
                    <textarea placeholder="Message here" id="message" name="message" rows="5" cols="1"></textarea>
                </div>
                <div class="col-12">
                    <div class="hero-btns contact-btn">
                        <button type=submit name="contact_user" class="btn px-3" style="font-size: 15px;font weight: 20px;height: 50px;width: 20%; border: 2px solid #FF3946;">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER SECTION -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>LERNEN</h5>
                    <h3>LEARN ANYWHERE, ANYTIME</h3>
                    <ul class="contact-nav">
                        <li><a data-scroll href="#home">Home</a></li>
                        <li><a data-scroll href="#about-us">About</a></li>
                        <li><a data-scroll href="#course">Courses</a></li>
                        <li><a data-scroll href="#blog">Blog</a></li>
                        <li><a data-scroll href="#contact-us">Contact</a></li>
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