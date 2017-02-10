<!DOCTYPE html>

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
                     <form class="uk-form" action="register.php" method="post">
                 <fieldset data-uk-margin>
                    <legend>ลงทะเบียน</legend>
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input  class="uk-button" type="submit" value="สมัครสมาชิก"> 
                </fieldset>
    
            </form>
                    
                    <?php 
                         echo ' <div class="uk-alert uk-alert-warning">มีผู้ใช้ username นี้แล้ว</div>';
                 
                    
                   ?>

                </div>
                    <?php 
                    include 'right.php';
                    ?>
                
                
            </div><!-- end grid-->
            
            
            
        </div>
        
      <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                   <li class="uk-active">
                        <a href="index.php">หน้าแรก</a>
                    </li>
                    <li>
                        <a href="all_news.php">ข่าวทั้งหมด</a>
                    </li>
                  <li>
                        <a href="layouts_contact.html">ติดต่อเรา</a>
                    </li>
                    <li>
                        <a href="secure/index.php">เข้าระบบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>
