 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Animals A-I-D</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="money.php">Funding donation</a>
                    </li>
                    <li>
                        <a href="blood.php">Blood donation</a>
                    </li>
                    <li>
                        <a href="adoption.php">Home for animals</a>
                    </li>
                    <li>
                        <a href="#">Follow</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>


                        <?php 
                        if (isset($_SESSION['is_member'])) {
                         ?>

                      <li>
                        <a href="logout.php">Logout</a>
                     </li> 

                    <?php } else { ?>

                    <li>
                        <a href="secure/index.php">Login</a>
                    </li>
                    <li>
                        <a href="form_register.php">register</a>
                    </li>
                        <?php } ?>
               

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
