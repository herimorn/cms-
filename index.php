<?php include('db.php');?>
<?php session_start();?>

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
             font-size:2rem;
        }
        </style>

</head>

<body>

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
                <a class="navbar-brand" href="#"> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php
                               $query="SELECT * FROM `category`";
                               $result=mysqli_query($connection,$query);
                               while($row=mysqli_fetch_assoc($result)){
                                    $cat_title=$row['cat_title'];
                                    echo "<li><a href=''>{$cat_title}</a></li>";
                                   
                          
                               }
                               echo"<li><a href='logins.php'>signup</a> </li>";
                               echo"<li><a href='map.php'>location</a> </li>";
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

                <h1 class="page-header">
                   
                   
                    <small></small>
                </h1>

                <?php
                  $query="SELECT * FROM `postspost`";
                  $result=mysqli_query($connection,$query);
                  while($row=mysqli_fetch_assoc($result)){
                       $post_title=$row['post_title'];
                       $post_author=$row['post_author'];
                       $post_date=$row['post_date'];
                       $post_image=$row['post_image'];
                       $post_price=$row['post_price'];
                       $post_location=$row['post_location'];
                       $post_tags=$row['post_tags'];
                       $post_status=$row['post_status'];
                       $post_content=$row['post_content'];
                       $post_category=$row['category'];
                
                       #First Blog Post 
                echo "<h2>
                    <a href='#'>{$post_title}</a>
                    </h2>";
                    echo "
                    <p class='lead'>
                    by <a href='index.php'>$post_author</a>
                </p>";
                echo"
                <p><span class='glyphicon glyphicon-time'></span> Posted on{$post_date}</p>";
                echo"
                <hr>
                <img class='img-responsive' src='images/{$post_image}' alt=''>
                <hr>";
                echo"
                <p>{$post_content}</p>";
                echo"the maize price is. .$post_price.sh.</br>";
                echo"the location is. .$post_location.'</br>";
                echo$post_category;
                echo "<a class='btn btn-primary' href='#'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>'

                <hr>";

                  }
              ?>
     <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
            <?php
            if(isset($_POST['submit'])){
             $search=$_POST['search'];
             $query="SELECT * FROM `postspost`WHERE post_title LIKE '%$search%'";
            $result=mysqli_query($connection, $query);
            if(!$result){
                echo "query failed";
            }
            $count=mysqli_num_rows($result);
            if($count==0){
                echo " no result";
            }else{
                echo " some result";
            }
            
            }
            ?>

          

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
                  <!-- login well-->
                 <!--php logins functionalities-->
 
                 <!--ends of php logins functionalities-->
                  <div class="well">
                    <h4>login</h4>
                    
                    <form action="login.php" method="post">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control"placeholder="enter username">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control"placeholder="enter password">
                       <input type="submit" value="submit" name="login">
                    </form><!--end of the form-->
                    <!-- /.input-group -->
                </div>

                <!-- login-->

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
                    <h4>about site</h4>
                    <p>this simple blog belongs by andrew gozbert for managing the posting of crops in Tanzania.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
