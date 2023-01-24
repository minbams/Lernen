<?php 
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['contact_user'])) {
        //contact
        $emailcontact = mysqli_real_escape_string($conn, $_POST['emailcontact']);
        $topic = mysqli_real_escape_string($conn, $_POST['topic']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        if (count($errors)==0){
            $query = "SELECT id_member FROM member WHERE member.username = '".$_SESSION['username']."'";
            $result = mysqli_query($conn,$query);
            $cen = "";

            while($row=mysqli_fetch_array($result))
            {
                $cen = mysqli_real_escape_string($conn, $row[0]);
            }

            $query2 = mysqli_query($conn, "SELECT * FROM contact ORDER BY id_contact DESC LIMIT 1");
            $ID_pre = '';
            $ID_new = '';
            while($row=mysqli_fetch_array($query2))
            {
                $ID_pre = $row[0];
                $ID_new = 'CT'. str_pad(intval(substr($ID_pre,2)) + 1, 5, '0', STR_PAD_LEFT);
            }
            //insert contact
            $sqldb = mysqli_query($conn,"INSERT INTO contact (id_contact, id_member, emailcontact, topic, message) VALUES ('$ID_new', '$cen', '$emailcontact', '$topic', '$message')");
            
            header('location: mainpage.php');
        }
    } 
?>