<?php

 require 'secure/connectdb.php';

  $login_username =$_POST['username'];
  $login_password =$_POST['password'];
  $login_email = $_POST['email'];
  
  //ไม่ให้ user ใช้ชื่อ admin 
  if($login_username=="admin"){
       header("Location: unsuccess.php?");
  }
  //เข้ารหัส รหัสผ่าน
  $salt = 'thisisthpassofmeyounevergonnastop';
  $hash_login_password = hash_hmac('sha256', $login_password, $salt);
  //เอาตัวนี้แหละบันทึกลงไปในฐานข้อมูล 
  
  //ประกาศตัวแปรคิวรี่ขึ้นมาเพื่อเพิ่มข้อมูลลงตาราง
  $query = "INSERT INTO tblogin (login_username,login_password,login_email)"
          . " VALUES ('$login_username','$hash_login_password','$login_email')";
  
  $result = mysqli_query($dbcon, $query);//จะรันคำสั่งข้างบน เช็ค
  
  if($result){
      header("Location: success.php?code=1");
      
  }
  else if(mysqli_errno($dbcon)=='1062'){
      header("Location: unsuccess.php?");
   
  }
  else{
      echo 'เกิดข้อผิดพลาด '.  mysqli_error($dbcon).mysqli_errno($dbcon);
  }
  
  mysqli_close($dbcon);
  