<?php 
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['reg_user'])) {
        //member
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']); 

        if ($password_1 != $password_2){
            array_push($errors, "The two passwords do not match");
        }
        $user_check_query = "SELECT * FROM member WHERE username = '$username'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){ // if user exists
            if ($result['username'] === $username){
                    array_push($errors, "Username already exists");
            }
            if ($result['email'] === $email){
                array_push($errors, "Email already exists");
            }
        }

        if (count($errors)==0){

            $password = $password_1;
            $query2 = mysqli_query($conn, "SELECT * FROM member ORDER BY id_member DESC LIMIT 1");
            $ID_pre = '';
            $ID_new = '';
            while($row=mysqli_fetch_array($query2))
            {
                $ID_pre = $row[0];
                $ID_new = 'M'. str_pad(intval(substr($ID_pre,1)) + 1, 5, '0', STR_PAD_LEFT);
            }
            //insert member
            $sqldb = mysqli_query($conn,"INSERT INTO member (id_member, username, fname, lname, email, userpass, phone) VALUES ('$ID_new', '$username', '$fname', '$lname', '$email', '$password', '$phone')");
            
            $_SESSION['username'] = $username;
            //$_SESSION['success'] = "You are now logged in";
            header('location: mainpage.php');
        } else {
            array_push($errors, "Username or Email already exists");
            //$_SESSION['error'] = "Username or Email already exists";
            header("location: register.php");
        }
    }
    
?>