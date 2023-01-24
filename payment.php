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
    $_SESSION['courseID'] = $_GET['id'];
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
    <style>
        .card{
        border:none;
        border-radius: 7px;
        }
        .form-control {
        border-bottom: 2px solid #eee !important;
        border: none;
        font-weight: 600
        }
        .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #8bbafe;
        outline: 0;
        box-shadow: none;
        border-radius: 0px;
        border-bottom: 2px solid blue !important;
        }
        .inputbox {
        position: relative;
        margin-bottom: 20px;
        width: 100%
        }
        .inputbox span {
        position: absolute;
        top: 7px;
        left: 11px;
        transition: 0.5s
        }
        .inputbox i {
        position: absolute;
        top: 13px;
        right: 8px;
        transition: 0.5s;
        color: #3F51B5;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0
        }
        .inputbox input:focus~span {
        transform: translateX(-0px) translateY(-15px);
        font-size: 12px
        }
        .inputbox input:valid~span {
        transform: translateX(-0px) translateY(-15px);
        font-size: 12px
        }
        .card-blue{
        background-color: #3F51B5;
        }
        .hightlight{
        background-color: #3F51B5;
        padding: 10px;
        border-radius: 10px;
        margin-top: 15px;
        font-size: 14px;
        }
        .yellow{
        color: #fdcc49; 
        }
        .decoration{
        text-decoration: none;
        font-size: 14px;
        }
        .btn-success {
        color: #ed5f5e;
        background-color: #fff;
        border-color:#ed5f5e;
        margin-bottom: 50px;
        margin-left: 51%;
        border-radius: 20px;
        width: 50%;
        }
        .btn-success:hover {
        color: #fff;
        background-color:#3F51B5;
        border-color: #3F51B5;
        }
        .decoration:hover{
        text-decoration: none;
        color: #fdcc49; 
        }
      </style>
</head>
<body>
  <!-- HEADER SECTION -->  
  <header id="home">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <!-- Logo -->
        <a class="navbar-brand"><img src="images/lernenlogo.png" width="120" height="55"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    
    <div class="container mt-5 px-5">
        <div class="mb-4">
            <h2>Confirm order and pay</h2>
        <span>please make the payment, after that you can enjoy this course.</span>            
        </div>
    <form action="payment_db.php" method="post">
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
        <div class="col-md-8">            
            <div class="card p-3">
                <h6 class="text-uppercase">Payment details</h6>
                <div class="inputbox mt-3"> <input type="text" name="cardname" class="form-control" required="required"> <span>Name on card</span> </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="inputbox mt-3 mr-2"> <input type="text" name="cardnum" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> 
                        </div>                     
                    </div>
                    <div class="col-md-6">
                         <div class="d-flex flex-row">
                             <div class="inputbox mt-3 mr-2"> <input type="text" name="expiry" class="form-control" required="required"> <span>Expiry</span> </div>
                          <div class="inputbox mt-3 mr-2"> <input type="text" name="cvv" class="form-control" required="required"> <span>CVV</span> </div>                            
                         </div>                     
                    </div>                  
                </div>

                <div class="mt-4 mb-4">
                    <h6 class="text-uppercase">Billing Address</h6>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="street" class="form-control" required="required"> <span>Street Address</span> </div>         
                        </div>
                         <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="city" class="form-control" required="required"> <span>City</span> </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="state" class="form-control" required="required"> <span>State/Province</span> </div>                  
                        </div>
                         <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="zipcode" class="form-control" required="required"> <span>Zip code</span> </div>          
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-4 d-flex justify-content-between">
                        <button type="submit" name="buy_user" class="btn btn-success px-3">Pay</button>
                    </div>
            </div>
        </form>
        <?php
            $ids = $_GET['id'];
            $sql = "SELECT * FROM course WHERE course.id_course='$ids' ";
            $result = mysqli_query($conn,$sql);
            ($row = mysqli_fetch_array($result))

        ?>
        <div class="col-md-4">
            <div class="card card-blue p-3 text-white mb-3">
                <span><?=$row['subject']?> - <?=$row['coursename']?></span>
                <div class="d-flex flex-row align-items-end mb-3">
                    <h1 class="mb-0 yellow"><?=$row['price']?> <span style="font-size: 20px; color: #fff;">Baht</span></h1>
                </div>
                
                <span>Enjoy this course after you complete the payment</span>
                <span>100% Guaranteed 24/7 support</span>    
                <br>
                <a href="mainpage.php#course" class="yellow decoration">Click here to choose another course!</a>
            </div>      
        </div>
        <?php
            mysqli_close($conn);
        ?>
    </div>
  </div>
  
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.932356228761!2d102.86359689999999!3d16.428261499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228bda829566e7%3A0x24ca9da06e436ef3!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lij4Liy4LiK4Lih4LiH4LiE4Lil4Lit4Li14Liq4Liy4LiZIOC4p-C4tOC4l-C4ouC4suC5gOC4guC4leC4guC4reC4meC5geC4geC5iOC4mQ!5e0!3m2!1sth!2sth!4v1657758535788!5m2!1sth!2sth" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/smooth-scroll.min.js"></script>
  <script src="js/main.js"></script>
  <!-- Scripts Ends -->
</body>
</html>
