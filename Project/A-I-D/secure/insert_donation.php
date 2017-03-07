<?php 
		include 'connectdb.php';

		$donationtype_id = $_POST['donationstype'];
		$amimal_name = $_POST['animal_name'];
		$animal_type = $_POST['animal_type'];
		$gender = $_POST['gender'];
		$animal_age = $_POST['animal_age'];
		$animal_color = $_POST['animal_color'];
		$SymptomCase = $_POST['SymptomCase'];
		$money = $_POST['money'];
		$priority = $_POST['priority'];
		$statusDonation = $_POST['statusDonation'];


		    //upload image 
$image_ext = pathinfo(basename($_FILES['animal_picture']['name']),PATHINFO_EXTENSION);//ดึงนามสกุล =PATHINFO_EXTENSION ดึงไฟล์ชื่อนี้มา= basename
	$new_image_name = 'animal_'.uniqid().'.'.$image_ext;//ต่อกับค่าสุ่ม
	$image_path ="../animal_image/";
	$upload_path = $image_path.$new_image_name;//ทำpathต่อด้วยชื่อไฟล์ใหม่ 
//uploading
	$success =move_uploaded_file($_FILES['animal_picture']['tmp_name'], $upload_path);

//สั่ง upload มาใส่ใน upload path folder เรา
	if($success ==FALSE){
    echo "couldn't upload picture";
    exit();
	}
//insert

	$sql1 = "INSERT INTO animals (animal_name,animal_picture,animal_type,animal_color,animal_gender,do_typeId,animal_age,SymptomCase,statusDonation,created_at) "
        . "VALUES ('$amimal_name','$new_image_name','$animal_type','$animal_color','$gender','$donationtype_id','$animal_age','$SymptomCase','$statusDonation',NOW())";
	 $sql2 = "INSERT INTO askformoneys (priority,money,created_at) "
      . "VALUES ('$priority','$money',NOW())";

	$result1 = mysqli_query($dbcon, $sql1);
	$result2 = mysqli_query($dbcon, $sql2);
	if($result1&&$result2){
    //echo 'บันทึกข้อมูลเรียบร้อย';
    header("Location: main.php");
	}else{
    echo 'เกิดข้อผิดพลาดที่ '.  mysqli_error($dbcon);
	}

