<?php 
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['buy_user'])) {
        //bill
        $cardname = mysqli_real_escape_string($conn, $_POST['cardname']);
        $cardnum = mysqli_real_escape_string($conn, $_POST['cardnum']);
        $expiry = mysqli_real_escape_string($conn, $_POST['expiry']);
        $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
        $street = mysqli_real_escape_string($conn, $_POST['street']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $zipcode = mysqli_real_escape_string($conn, $_POST['zipcode']);

        if (count($errors)==0){
            $query2 = "SELECT id_member FROM member WHERE member.username = '".$_SESSION['username']."'";
            $result2 = mysqli_query($conn,$query2);
            $mid = "";

            while($row=mysqli_fetch_array($result2))
            {
                $mid = mysqli_real_escape_string($conn, $row[0]);
                echo $mid;
            }

            $query3 = mysqli_query($conn, "SELECT * FROM receipt ORDER BY id_receipt DESC LIMIT 1");
            $ID_pre = '';
            $ID_new = '';

            while($row3=mysqli_fetch_array($query3))
            {
                echo $row3[0];
                $ID_pre = $row3[0];
                $ID_new = 'R'. str_pad(intval(substr($ID_pre,2)) + 1, 5, '0', STR_PAD_LEFT);
            }

            $idcourse =  $_SESSION['courseID'];
            $sqldb = "INSERT INTO receipt (id_receipt, id_member, id_course, cardname, cardnum, expiry, cvv) VALUES ('$ID_new', '$mid', '$idcourse', '$cardname', '$cardnum', '$expiry', '$cvv')";
            mysqli_query($conn,$sqldb);
            $sqldb2 = "INSERT INTO receipt_address (id_receipt, id_member, street, city, state, zipcode) VALUES ('$ID_new', '$mid', '$street', '$city', '$state', '$zipcode')";
            mysqli_query($conn,$sqldb2);    

            header('location: library.php');
        }
    }
?>