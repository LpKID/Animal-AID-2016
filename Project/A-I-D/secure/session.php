<?php
        session_start();
        if (!isset($_SESSION['is_admin'])) { //if don't login 
            header("Location: index.php");    //back to index
        }
        require 'connectdb.php';
        $session_login_id = $_SESSION['id'];
        
        $qry_user = "SELECT * FROM users WHERE id='$session_login_id'";
        $result_user = mysqli_query($dbcon,$qry_user);
        if ($result_user) {
            $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
            $s_name = $row_user['name'];
            $s_email = $row_user['email'];
            mysqli_free_result($result_user);
        }
        mysqli_close($dbcon);