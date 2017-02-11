<div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
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
            </div>
        </div>

 