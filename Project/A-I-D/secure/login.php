<?php
    require 'connectdb.php';
    
    $name = mysqli_real_escape_string($dbcon,$_POST['name']);
    $password = mysqli_real_escape_string($dbcon,$_POST['password']);
    
    $salt = 'animalTeam';
    $hash_password = hash_hmac('sha256', $password, $salt);
    
    $sql = "SELECT * FROM users WHERE name=? AND password=?";
    $stmt = mysqli_prepare($dbcon, $sql);
    mysqli_stmt_bind_param($stmt,"ss", $name,$hash_password);
    mysqli_execute($stmt);
    $result_user = mysqli_stmt_get_result($stmt);
    if ($result_user->num_rows == 1) {
        session_start();
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $_SESSION['id'] = $row_user['id'];




        if($row_user['status']==500){
            $_SESSION['is_admin']=500;
            header("Location:main.php");//if user is admin pass it will be redirect to this main.php
        }else{
                $_SESSION['is_member'] = 0;
                $_SESSION['login_name'] = $row_user['name'];
                 header("Location: ../index.php");
        }
   
    } else {
        echo "ผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
