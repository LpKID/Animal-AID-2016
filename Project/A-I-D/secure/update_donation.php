<?php 
        include 'connectdb.php';

        $animal_id = $_POST['animal_id'];
        $donationtype_id = $_POST['donationtype'];
        $animal_name = $_POST['animal_name'];
        $animal_type = $_POST['animal_type'];
        $gender = $_POST['gender'];
        $animal_age = $_POST['animal_age'];
        $animal_color = $_POST['animal_color'];
        $SymptomCase = $_POST['SymptomCase'];
        $money = $_POST['money'];
        $priority = $_POST['priority'];
        $statusDonation = $_POST['statusDonation'];


if (is_uploaded_file($_FILES['animal_picture']['tmp_name'])) {
    //delete old image
    $sql_select = "SELECT animal_picture FROM animals WHERE animal_id='$animal_id'";
    $res_image = mysqli_query($dbcon, $sql_select);
    $row_image = mysqli_fetch_assoc($res_image);
    $image_old = $row_image['animal_picture'];
    unlink("../animal_image/".$image_old);
    
    
        //upload image 
$image_ext = pathinfo(basename($_FILES['animal_picture']['name']),PATHINFO_EXTENSION);//ดึงนามสกุล =PATHINFO_EXTENSION ดึงไฟล์ชื่อนี้มา= basename
$new_image_name = 'animal_'.uniqid().'.'.$image_ext;//ต่อกับค่าสุ่ม
$image_path ="../animal_image/";
$upload_path = $image_path.$new_image_name;//ทำpathต่อด้วยชื่อไฟล์ใหม่ 
//uploading
$success =move_uploaded_file($_FILES['animal_picture']['tmp_name'], $upload_path);
$sql_image = "UPDATE animals SET animal_picture='$new_image_name' WHERE animal_id = '$animal_id'";
mysqli_query($dbcon, $sql_image);

//สั่ง upload มาใส่ใน upload path folder เรา
if($success ==FALSE){
    echo 'ไม่สามารถ upload รูปภาพได้';
    exit();
}
 
}
   

$sql1 = "UPDATE  animals SET animal_name='$animal_name',animal_type='$animal_type',animal_color='$animal_color',animal_gender='$gender',do_typeId='$donationtype_id',animal_age='$animal_age',SymptomCase='$SymptomCase',statusDonation='$statusDonation',created_at=NOW() WHERE animal_id=$animal_id";
 

$sql2 = "UPDATE  askformoneys SET priority='$priority',money='$money',created_at=NOW() WHERE animal_id=$animal_id";



    $result1 = mysqli_query($dbcon, $sql1);
    $result2 = mysqli_query($dbcon, $sql2);
    if($result2){
    //echo 'บันทึกข้อมูลเรียบร้อย';
    header("Location: main.php");
    }else{
    echo 'เกิดข้อผิดพลาดที่ '.  mysqli_error($dbcon);

    }

