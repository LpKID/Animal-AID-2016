<?php
        require 'secure/connectdb.php';
        
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

         date_default_timezone_set("asia/Bangkok");
            $created =  ''.date("h:i:sa") .date("d/m/Y") ;

            if($name == 'admin'){
                echo "don't username as 'admin' xx";
                exit;
            }


        //เข้ารหัส รหัสผ่าน
        $salt = 'animalTeam';
        $hash_login_password = hash_hmac('sha256', $password, $salt);
        
        $query = "INSERT INTO users (name,password,email,created_at) VALUES ('$name','$hash_login_password','$email','$created')";
        
        $result = mysqli_query($dbcon,$query);
        
        if ($result) {
            
            header("Location: success.php?code=1");
 
           



        } else {
            echo "เกิดข้อผิดพลาด ".  mysqli_error($dbcon);
        }
        
        mysqli_close($dbcon);