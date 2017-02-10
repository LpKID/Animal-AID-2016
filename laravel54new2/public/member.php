<!DOCTYPE html>
<?php
  session_start();
   
    if(!isset($_SESSION['is_member'])){
    //header("Location: secure/index.php"); เด้งไปให้ล๊อกอินห หรือ
        header("Location: success.php?code=2");
        
    }          
 include 'secure/connectdb.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/uikit.min.js"></script>
    </head>
    <body>
        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
            
           <?php include 'header.php';?>
            
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-3-4">
                    <p>
                       สำหรับสมาชิก
                    </p>

                </div>
                
                   <?php include 'right.php';?>
                
                
            </div><!-- end grid-->
            
            
            
        </div>
        
      
        <?php include 'rs.php';?>
        
        
    </body>
</html>
