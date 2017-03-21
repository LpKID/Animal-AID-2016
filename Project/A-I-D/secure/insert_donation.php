<?php 
//require "/path/to/file"
		include 'connectdb.php';

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
		
	//resize 


		    //upload image 
$image_ext = pathinfo(basename($_FILES['animal_picture']['name']),PATHINFO_EXTENSION);//ดึงนามสกุล =PATHINFO_EXTENSION ดึงไฟล์ชื่อนี้มา= basename
	$new_image_name = 'animal_'.uniqid().'.'.$image_ext;//ต่อกับค่าสุ่ม
	$image_path ="../animal_image/";
	$upload_path = $image_path.$new_image_name;//ทำpathต่อด้วยชื่อไฟล์ใหม่ 

//resize
 /*
function imgResize($upload_path) {

           $x = getimagesize($upload_path);            
           $width  = $x['0'];
           $height = $x['1'];

           $rs_width  = $width / 2;//resize to half of the original width.
           $rs_height = $height / 2;//resize to half of the original height.

           switch ($x['mime']) {
              case "image/gif":
                 $img = imagecreatefromgif($upload_path);
                 break;
              case "image/jpg":
              case "image/jpeg":
                 $img = imagecreatefromjpeg($upload_path);
                 break;
              case "image/png":
                 $img = imagecreatefrompng($upload_path);
                 break;
           }

           $img_base = imagecreatetruecolor($rs_width, $rs_height);
           imagecopyresized($img_base, $img, 0, 0, 0, 0, $rs_width, $rs_height, $width, $height);

           $path_info = pathinfo($upload_path);    
           switch ($path_info['extension']) {
              case "gif":
                 imagegif($img_base, $upload_path);  
                 break;
            case "jpg":
            case "jpeg":
                 imagejpeg($img_base, $upload_path);
                 break;
              case "png":
                 imagepng($img_base, $upload_path);  
                 break;
           }

        }
 */
//uploading
 //$img = imgResize('$upload_path');
	$success =move_uploaded_file($_FILES['animal_picture']['tmp_name'], $upload_path);
//$success =move_uploaded_file($_FILES['animal_picture']['tmp_name'],$img);


//สั่ง upload มาใส่ใน upload path folder เรา
	if($success ==FALSE){
    echo "couldn't upload picture";
    exit();
	}

//insert

	$sql1 = "INSERT INTO animals (animal_name,animal_picture,animal_type,animal_color,animal_gender,do_typeId,animal_age,SymptomCase,statusDonation,created_at) "
        . "VALUES ('$animal_name','$new_image_name','$animal_type','$animal_color','$gender','$donationtype_id','$animal_age','$SymptomCase','$statusDonation',NOW())";
	 $sql2 = "INSERT INTO askformoneys (animal_id,priority,money,created_at) "
      . "VALUES ('$animal_id2','$priority','$money',NOW())";

//animal_id 
      $animal_id2 = "update askformoneys set animal_id = (SELECT animal_id FROM animals ORDER BY animal_id DESC LIMIT 1) ORDER BY ask_moneyId DESC LIMIT 1";//หา






	$result1 = mysqli_query($dbcon, $sql1);
	$result2 = mysqli_query($dbcon, $sql2);
	$result3 = mysqli_query($dbcon, $animal_id2);
	if($result1&&$result2&&$result3){
		 
    //echo 'บันทึกข้อมูลเรียบร้อย';
    header("Location: main.php");
   
	}else{
    echo 'เกิดข้อผิดพลาดที่ '.  mysqli_error($dbcon);
	}

