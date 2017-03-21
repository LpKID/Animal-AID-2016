<?php include 'session.php'; 
 require 'connectdb.php';
//ต้อง require ต่อเพราะใน session มันปิด connection ละ
$sql="SELECT * FROM animals INNER JOIN donationtypes ON animals.do_typeId=donationtypes.do_typeId ORDER BY animal_id  ";
$res_animal = mysqli_query($dbcon, $sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Animals AID ::HOME::</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>




 <h1> Welcome </h1>
  <p><?php echo $s_name; ?> E-mail: <?php echo $s_email; ?></p>
<hr>

        <h1>main menu</h1>
        <p>
            <a href="form_donation.php">Add Donation</a>
        </p>



<table border="1px">
        <tr>
            <td>Animal ID</td>
            <td>Animal Name</td>
             <td>Donation status</td>
            <td>Date Start</td>
            
            <td>Donation Type </td>
            <td>Animal Picture</td>
            <td>Edit Donation</td>
              <td>Delete Donation</td>
    </tr>
    <?php 
        while($row_animals = mysqli_fetch_array($res_animal,MYSQLI_ASSOC)){
    ?>
    <tr>
            <td><?php   echo $row_animals['animal_id']; ?></td>
            <td><?php   echo $row_animals['animal_name']; ?></td>
             <td><?php 
                        if($row_animals['statusDonation']==0){
                                echo 'Normal'; 
                            }else{    
                                echo 'Express';
                            
                   }?>
             </td>
             
            <td><?php   echo $row_animals['created_at']; ?></td>
            <td><?php   echo $row_animals['do_typeName']; ?></td>
            
            <td>
                <a data-lightbox="<?php echo $row_animals['animal_picture']; ?>" data-title="<?php echo $row_animals['animal_picture']; ?>"  href="../animal_image/<?php echo $row_animals['animal_picture']; ?>" target="_blank"><?php   echo $row_animals['animal_picture'];?>
                </td>
            
            
            <td><a href="form_update_animal.php?id=<?= $row_animals['animal_id']; ?>">Edit Donation</a></td>
            

            <td><a href="delete_donation.php?id=<?= $row_animals['animal_id']; ?>" onclick="return confirm('Please confirm again !!!')">Delete </a></td>
    </tr>
    <?php }?>   
        </table>










<hr>
<a href="logout.php">logout</a>



    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
