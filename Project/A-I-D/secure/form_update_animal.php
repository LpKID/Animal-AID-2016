<!DOCTYPE html>
<?php include 'connectdb.php';
     $animal_id = $_GET['id'];
     
     //$sql = "SELECT * FROM animals WHERE animal_id = '$animal_id'";
    $sql="SELECT * FROM animals  JOIN askformoneys ON animals.animal_id=askformoneys.animal_id  WHERE animals.animal_id = '$animal_id'";

     $res_animal = mysqli_query($dbcon, $sql);
     $row_animal = mysqli_fetch_assoc($res_animal);
     
     
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Donation</title>
          <style>
            label {
                display: block
            }
            
        </style>
        <script src="../ckeditor/ckeditor.js" ></script>
    </head>
    <body>
   
        <h1>Edit Donation ID : <?php echo $animal_id;?></h1>
          
        <form id="form1"action="update_donation.php" method="post" enctype="multipart/form-data">
            <label for="donationtype">choose donation type</label>
            
            <select name="donationtype">
                
               <?php 
                $sqldonation_type = "SELECT * FROM donationtypes";
                $res_donationtype = mysqli_query($dbcon, $sqldonation_type);
                while($row_donationtype = mysqli_fetch_array($res_donationtype)){
                    if($row_donationtype['do_typeId']==$row_donationtype['do_typeId']){
                             echo '<option value="'.$row_donationtype['do_typeId'].' selected">'.$row_donationtype['do_typeName'].'</option>';
                    }else{
                    echo '<option value="'.$row_donationtype['do_typeId'].'">'.$row_donationtype['do_typeName'].'</option>';
                }
                }
                ?>
            </select>
            
                <br><br>
                
                <label for="animal_name">Animal name</label>
                <input type="text" name="animal_name" value="<?php echo $row_animal['animal_name'];?>" size = "80px" required >


                <label for="animal_type">Animal type</label>
                <input type="text" name="animal_type" value="<?php echo $row_animal['animal_type'];?>"  required >



                <label for="animal_gender">gender</label>
                  <?php
                 
                 if($row_animal['animal_gender']=='0'){?>
                     <input type="radio" value="0" checked name="gender">male<br>
                     <input type="radio" value="1"    name="gender">female<br>
                 <?php  }else{?>
                <input type="radio" value="0" name="gender">male<br>
                  <input type="radio" value="1"  checked  name="gender">female<br>
                   <?php }?>



              <label for="animal_age">Animal Age</label>
                <input type="text" name="animal_age" value="<?php echo $row_animal['animal_age'];?>"  >





                <label for="animal_color">Animal Color</label>
                <input type="text" name="animal_color" value="<?php echo $row_animal['animal_color'];?>"   >



                
                  <label for="SymptomCase"  >SymptomCase</label>
                  <textarea name="SymptomCase" id="SymptomCase" rows="10" cols="80" >
                      <?php echo $row_animal['SymptomCase'];?>
                  </textarea>
                      
                  
                  <br>
                  
                  <label for="animal_picture">Animal Picture</label>
                  <a href="../animal_image/<?php echo $row_animal['animal_picture']; ?>" target="_blank"><?php echo $row_animal['animal_picture']; ?></a>
                  <br>
                  <img src="../animal_image/<?php echo $row_animal['animal_picture']; ?>" height="85" width="85">
                  
                  <input type="file" name="animal_picture" >
                
                  

                  <label for="money">Amount of money</label>
                <input type="text" name="money" value="<?php echo $row_animal['money'];?>"   >




                <label for="priority">Priority</label>
                  <?php
                 
                 if($row_animal['priority']=='0'){?>
                     <input type="radio" value="0" checked name="priority">1(most)<br>
                     <input type="radio" value="1"    name="priority"> 2<br>
                     <input type="radio" value="2"    name="priority"> 3<br>
                 <?php  }else if($row_animal['priority']=='1'){?>
                <input type="radio" value="0" name="priority">1(most)<br>
                  <input type="radio" value="1"  checked  name="priority"> 2<br>
                  <input type="radio" value="2"    name="priority"> 3<br>
                   <?php }else{?>

                  <input type="radio" value="0" name="priority">1(most)<br>
                  <input type="radio" value="1"   name="priority"> 2<br>
                  <input type="radio" value="2"  checked   name="priority"> 3<br>
          <?php }?>










                  <label for="statusDonation">Status Donation</label>
                  <?php
                 
                 if($row_animal['statusDonation']=='0'){?>
                     <input type="radio" value="0" checked name="statusDonation">Normal<br>
                     <input type="radio" value="1"    name="statusDonation"> Express<br>
                 <?php  }else{?>
                <input type="radio" value="0" name="statusDonation">Normal<br>
                  <input type="radio" value="1"  checked  name="statusDonation"> Express<br>
                   <?php }?>







                  <input type="submit" value="save">
               
                  <input type="hidden" name="animal_id" value="<?php echo $row_animal['animal_id']; ?>"
          
            </select>
        </form>
    </body>
</html>
