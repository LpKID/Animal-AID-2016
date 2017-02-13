
@extends('layouts.style')
  <nav class="navbar navbar-default navbar-static-top" >
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="index.php">
                    Animal-AID
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                   
               
                  <li>
                        <a href="index">การขอรับบริจาค</a>
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
                     <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ติดตาม <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">สัตว์ที่ได้รับบริจาค</a></li>
                <li><a href="#">หลังจากการรักษา</a></li>
                
              </ul>
            </li>
                    <li>
                        <a href="contact.php">ติดต่อเรา</a>
                    </li>
                    
                    <li>
                        <a href="member.php">สมาชิก</a>
                    </li>
                
                 </ul>
                 <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                     <?php 
                    if(isset($_SESSION['is_member'])){
                    ?>
                     <li>
                        <a href="logout.php">ออกจากระบบ</a>
                    </li>
                    <?php }else{ ?>
                    
                     <li>
                        <a href="secure/login_fml.php">เข้าระบบ</a>
                    </li>
    
                        <li>
                        <a href="frm_register2.php">ลงทะเบียน</a>
                    </li>
                     <?php } ?>
          </ul>
           </div>
        </div>
    </nav>

<div class=bs-example data-example-id=thumbnails-with-custom-content > 
    <div class=row>
         <div class="col-sm-6 col-md-4">
             <img alt="100%x200" data-src="holder.js/100%x200" src="images/84.jpg"  >
         <div class=thumbnail>
              <img alt="Generic placeholder thumbnail" data-src=holder.js/100%x200> 
              <div class=caption>
                   <h3>Thumbnail label</h3> <p>Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Donec id elit non mi porta gravida at eget metus.
                         Nullam id dolor id nibh ultricies vehicula ut id elit.
                       </p>
                        <p>
                            <a href=# class="btn btn-primary" role=button>Button</a>
                             <a href=# class="btn btn-default" role=button>Button</a>
                             </p>
                              </div>
                               </div>
                                </div> 
                                <div class="col-sm-6 col-md-4">
                                      <img alt="100%x200" data-src="holder.js/100%x200" src="images/84.jpg" >
                                     <div class=thumbnail>
                                          <img alt="Generic placeholder thumbnail" data-src=holder.js/100%x200>
                                           <div class=caption>
                                                <h3>Thumbnail label</h3> 
                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                                                     id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> <p><a href=# class="btn btn-primary" role=button>Button</a> <a href=# class="btn btn-default" role=button>Button</a></p> 
                                                </div> 
                                                </div>
                                                 </div>
                                                 <div class="col-sm-6 col-md-4"> 
                                                       <img alt="100%x200" data-src="holder.js/100%x200" src="images/84.jpg" >
                                                     <div class=thumbnail> 
                                                     <img alt="Generic placeholder thumbnail" data-src=holder.js/100%x200>
                                                      <div class=caption>
                                                           <h3>Thumbnail label</h3> 
                                                           <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id 
                                                               elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                               </p> <p><a href=# class="btn btn-primary" role=button>Button</a>
                                                                <a href=# class="btn btn-default" role=button>Button</a></p> 
                                                                </div>
                                                                 </div>
                                                                  </div>
                                                                  </div>