<!DOCTYPE html>
<?php  include 'secure/connectdb.php'; ?>

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
                    <?php if($_GET['code']==1){
                         echo ' <div class="uk-alert uk-alert-success">สมัครสมาชิกเรียบร้อยแล้ว</div>';
                 
                    }else if($_GET['code']==2){
                         echo ' <div class="uk-alert uk-alert-danger">หน้าเว้บนี้สำหรับสมาชิกเท่านั้น</div>';
                    }
                   ?>

                </div>
                    <?php 
                    include 'right.php';
                    ?>
                
                
            </div><!-- end grid-->
            
            
            
        </div>
        
     <?php include 'rs.php';?>
    </body>
</html>
