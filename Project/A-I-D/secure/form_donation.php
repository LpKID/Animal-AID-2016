<!DOCTYPE html>
<?php include 'connectdb.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Donation</title>
          <style>
            label {
                display: block
            }
            
        </style>
    
    </head>
    <body>
    
        <h1>Add Donation</h1>
        <form id="form1" action="insert_donation.php" method="post" enctype="multipart/form-data">
            <label for="donationstype">choose type of donation</label>
            <select name="donationstype">
                <option value="">--choosetype--</option>
                <?php 
                    $sqldonation_type = "SELECT * FROM donationtypes";
                    $res_donationtype = mysqli_query($dbcon, $sqldonation_type);
                while($row_donationtype = mysqli_fetch_assoc($res_donationtype)){
                    echo '<option value="'.$row_donationtype['do_typeId'].'">'.$row_donationtype['do_typeName'].'</option>';
                }
                ?>
            </select>
                <br><br>
                
                 <label for="animal_name">Animal name : </label>
                 <input type="text" name="animal_name" required>


                  <label for="animal_type">Animal type : </label>
                  <input type="text" name="animal_type" required>




                  <label for="animal_gender">Gender</label>
                  <input type="radio" value="0" checked name="gender">male<br>
                  <input type="radio" value="1" name="gender"> female <br>


                  <label for="animal_age">Animal age : </label>
                  <input type="text" name="animal_age" required> 


                  <label for="animal_color">Animal color : </label>
                  <input type="text" name="animal_color" >


                
                  <label for="SymptomCase">Case </label>
                  <textarea name="SymptomCase" id="SymptomCase" rows="10" cols="80"></textarea>
                    


                  <label for="animal_picture">Animal Picture</label>
                  <input type="file" name="animal_picture">



                  <label for="money"> Amount of money : </label>
                  <input type="text" name="money" >


                  <label for="priority">Priority</label>
                  <input type="radio" value="0" name="priority">1(most)&nbsp;&nbsp;
                  <input type="radio" value="1" checked name="priority">2  &nbsp;&nbsp;
                  <input type="radio" value="3" name="priority">3  <br>



                  <label for="statusDonation">Urgency</label>
                  <input type="radio" value="0" checked name="statusDonation">normal<br>
                  <input type="radio" value="1" name="statusDonation"> express <br>



                  <input type="submit" value="save">
                 
                  
          
            </select>
        </form>
        
    </body>
</html>
