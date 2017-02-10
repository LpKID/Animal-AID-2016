
<div class="uk-width-medium-1-4">
    <?php if(isset($_SESSION['is_member'])){
        ?>
    
    <div class="uk-panel">
        <h3 class="uk-panel-title">ข้อมูลสมาชิก</h3>
        <P>ยินดีต้อนรับคุณ <?php echo ' '.$_SESSION['login_username'];?> </P>
   
    </div>
         <?php } ?>
  
        
        
                       <div class="uk-panel">
                        <h3 class="uk-panel-title">ยอดเงิน</h3>
                        <h3 class="uk-panel-title">ผู้บริจาคล่าสุด</h3>
                        <ul class="uk-list uk-list-line">
                
                                
                      
                        </ul>
                    </div>
                    
                    
                    
                </div>
