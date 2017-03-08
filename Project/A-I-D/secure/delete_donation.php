<?php
 require 'connectdb.php';
 //ลบภาพ
 
 $animal_id = $_GET['id']; //ที่ id นี้
 
 $sql_select = "SELECT animal_picture FROM animals WHERE animal_id='$animal_id'";//หา
 $res_select = mysqli_query($dbcon, $sql_select);//เรียกแสดง(สั่งทำงาน)
 $animal_image = mysqli_fetch_row($res_select);//ดึงมาจากฐานไหน
 $picture = $animal_image[0];//ดึงมา index ที่0
 
  unlink('../animal_image/'.$picture);//ลบ

$sql = "DELETE FROM animals WHERE  animal_id= '$animal_id'";
$result = mysqli_query($dbcon, $sql);
if($result){
  header("Location: main.php");
    
}else{
  echo 'เกิดข้อผิดพลาด '.  mysqli_error($dbcon);
}
mysqli_close($dbcon);