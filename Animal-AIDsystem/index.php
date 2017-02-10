<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                    <article class="uk-article">

                        <h1 class="uk-article-title">
                            <?php   echo $row_news['news_topic']; ?>
                        </h1>

                        <p class="uk-article-meta">Written by Admin on <?php   echo $row_news['news_date']; ?> Posted in <a href="#"><?php   echo $row_news['newstype_detail']; ?></a></p>

                        <p>
                            <a href="#"><img class="uk-thumbnail uk-thumbnail-large uk-align-center" src="news_image/<?php   echo $row_news['news_filename']; ?>" alt=""></a>
                        </p>

                        <p>ข้างล่างเป็นเนื้อหาข่าว</p>

                    
                        <p><?php echo $row_news['news_detail'];?></p>

                        <p>
                            <a class="uk-button uk-button-primary" href="layouts_post.html">Continue Reading</a>
                            <a class="uk-button" href="layouts_post.html">4 Comments</a>
                        </p>

                    </article>
                </div>
                 <?php include 'right.php';?>
            </div><!-- end grid-->
            
        </div>
    </body>
</html>
