<nav class="uk-navbar uk-margin-large-bottom">
                 <a class="uk-navbar-brand uk-hidden-small" href="index.php">Animal-AID</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li class="uk-active">
                        <a href="index.php">การขอรับบริจาคทั้งหมด</a>
                    </li>
                    <li>
                        <a href="money.php">ขอรับบริจาคเงิน</a>
                    </li>
                    
                    <li> 
                        <a href="blood.php">ขอรับบริจาคเลือด</a>
                    </li>
                   
                     <li>
                        <a href="adoption.php">หาบ้านให้สัตว์</a>
                    </li>
                    <li>
                        <a href="contact.php">ติดต่อเรา</a>
                    </li>
                    
                    <li>
                        <a href="member.php">สมาชิก</a>
                    </li>
                    <?php 
                    if(isset($_SESSION['is_member'])){
                    ?>
                     <li>
                        <a href="logout.php">ออกจากระบบ</a>
                    </li>
                    <?php }else{ ?>
                    <li>
                        <a href="secure/index.php">เข้าระบบ</a>
                    </li>
                    <li>
                        <a href="frm_register.php">ลงทะเบียน</a>
                    </li>
                    <?php } ?>
                </ul>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Animal-AID</div>
            </nav>