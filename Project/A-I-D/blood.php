
<?php session_start() ;
 include 'secure/connectdb.php';


$sql="SELECT * FROM animals INNER JOIN donationtypes ON animals.do_typeId=donationtypes.do_typeId WHERE donationtypes.do_typeId=2 ORDER BY animal_id  LIMIT 30 ";
$sql2="SELECT * FROM animals INNER JOIN donationtypes ON animals.do_typeId=donationtypes.do_typeId  WHERE donationtypes.do_typeId=2 and statusDonation='1' ORDER BY animal_id  ";
$res_animal = mysqli_query($dbcon, $sql2);
$res_animal2 = mysqli_query($dbcon, $sql);
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .carousel-inner > .item > img {
  width:700;
  height:300px;
}
.thumbnail img {
    width:100% !important;
    height: 200px !important;
}
    </style>
}
</head>

<body>

   <?php include 'header.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                            <?php 
                                $count=0;
                             ?>
                                    <?php
                                    while($row_animals = mysqli_fetch_array($res_animal,MYSQLI_ASSOC)){
                                     ?>
                                        <?php if($count==0){ ?>
                                            <div class="item active">
                                            <img class="slide-image" width="800px" height="300px" src="animal_image/<?php echo $row_animals['animal_picture']; ?>" alt="">
                                            </div>
                                        <?php }else{ ?>
                                            <div class="item">
                                            <img class="slide-image" width="800px" height="300px" src="animal_image/<?php echo $row_animals['animal_picture']; ?>" alt="">
                                            </div>
                                        <?php }//End If ?>
                                        <?php $count++; ?>
                                    <?php }//End While?>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>



                <div class="row">


                    <?php 
                             while($row_animals2 = mysqli_fetch_array($res_animal2,MYSQLI_ASSOC)){
                    ?>

                   


                   <div class="col-sm-4 col-lg-4 col-md-4">
                   <?php   echo 'on '.$row_animals2['created_at']; ?>
                        <div class="thumbnail">
                            <img width="80px" height="20px" src="animal_image/<?php echo $row_animals2['animal_picture']; ?>" alt="">
                            <div class="caption">
                                <h4><?php   echo $row_animals2['do_typeName']; ?><br></h4> 
                                <a href="#"><?php   echo $row_animals2['animal_name']; ?></a>
                                   <p> <?php   echo $row_animals2['animal_type']; ?>
                                       <?php   echo $row_animals2['SymptomCase']; ?>
                                </p>
                                <p> at <a target="_blank" href="http://www.bootsnipp.com">button link</a>.</p>
                            </div>
                        </div>
                    </div>
                       <?php } ?>





                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <a class="btn btn-primary" target="_blank" href="">View All</a>
                        </div>

                </div>




            </div>
                <div class="col-md-3">
                <?php if(isset($_SESSION['is_member'])){  ?>
                <div>
                    <h3> member </h3>
                    <p>Welcome <?php echo $_SESSION['login_name'] ?> </p>
                </div>
                 <?php } ?>



                    <p class="lead">List of Donors</p>
                        <div class="list-group">
                            <p class="list-group-item">
                                <i class="fa fa-comment fa-fw">Jutatip</i>
                                <span class="pull-right text-muted samll">
                                    <em>$100</em>
                                </spen>   
                    </p>

                    <p class="list-group-item">
                        <i class="fa fa-comment fa-fw">Suthisa</i>
                        <span class="pull-right text-muted samll">
                            <em>$100</em>
                        </spen> 
                    </p>
                    <p class="list-group-item">
                        <i class="fa fa-comment fa-fw">Chanon</i>
                        <span class="pull-right text-muted samll">
                            <em>$100</em>
                        </spen> 
                    </p>
                </div>
            </div>


        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="text-center col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
