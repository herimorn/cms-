<?php  include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
    body{
        background:chocolate;
    }
</style>
</head>
<body>

    <!-- Navigation -->
    
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
                <a class="navbar-brand" href="#"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php
                               $query="SELECT * FROM `category`";
                               $result=mysqli_query($connection,$query);
                               while($row=mysqli_fetch_assoc($result)){
                                    $cat_title=$row['cat_title'];
                                    echo "<li><a href='admin/chart.php'>{$cat_title}</a></li>";
                          
                               }
                    ?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
 
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            
            <div class="col-md-8">
               
               <?php

             

            if(isset($_POST['submit'])){
                
            $search = $_POST['search'];
                
                
            $query = "SELECT * FROM `postspost`WHERE post_title LIKE '%$search%' ";
            $search_query = mysqli_query($connection, $query);

            if(!$search_query) {

                die("QUERY FAILED" . mysqli_error($connection));

            }

            $count = mysqli_num_rows($search_query);

            if($count == 0) {

                echo "<h1> NO RESULT</h1>";

            } else {

    while($row = mysqli_fetch_assoc($search_query)) {
        $post_title=$row['post_title'];
         $post_author=$row['post_author'];
        $post_date=$row['post_date'];
     $post_image=$row['post_image'];
    $post_price=$row['post_price'];
$post_location=$row['post_location'];
 $post_tags=$row['post_tags'];
  // $post_comment_count=$row['post_comment_count'];
$post_status=$row['post_status'];
$post_content=$row['post_content'];
$post_category=$row['category'];

        ?>

          <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>


   <?php }


            }


            
            }


?>

    

                
                
                
                
                

              
    

            </div>
            
              

            <!-- Blog Sidebar Widgets Column -->
            
            
            <div class="col-md-4">
              <!-- Blog Search Well -->
              <div class="well">
                    <h4>Market Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form><!--end of the form-->
                    <!-- /.input-group -->
                </div>



                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Marketing Category</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">

                            <?php
                               $query="SELECT * FROM `category`";
                               $result=mysqli_query($connection,$query);
                               while($row=mysqli_fetch_assoc($result)){
                                    $cat_title=$row['cat_title'];
                                    echo "<li><a href='#'>{$cat_title}</a></li>";
                          
                               }
                             ?>
                            </ul>
                        </div>
                      
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->




        <hr>
            
             </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>


   

