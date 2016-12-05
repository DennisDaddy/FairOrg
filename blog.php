<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | FAIR</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="60" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="about-us.php"><i class="fa fa-user-secret" aria-hidden="true"></i> About Us</a></li>
                    <li><a href="donate.php"><i class="fa fa-gift" aria-hidden="true"></i> Donate</a></li>
                    <li><a href="involved.php"><i class="fa fa-connectdevelop" aria-hidden="true"></i> Get Involved</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-address-book-o" aria-hidden="true"></i> Careers <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="career.php"><i class="fa fa-certificate" aria-hidden="true"></i> Career</a></li>
                            <li><a href="jobs.php"><i class="fa fa-gavel" aria-hidden="true"></i> Jobs</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.php"><i class="fa fa-pencil" aria-hidden="true"></i> Blog</a></li> 
                    <li><a href="contact-us.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Blog</h1>
                   
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li  class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

   <section id="blog" class="container">
        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                                                            
                            <div class="col-xs-12 col-sm-12 blog-content">
                                
                                <?php
                            include("includes/connect.php");

                            $select_posts ="select * from blog order by rand() LIMIT 0,4";

                            $run_posts =mysqli_query($con,$select_posts);

                            while ($row=mysqli_fetch_array($run_posts)) {
                                $blog_id =$row['blog_id'];
                                $blog_title =$row['blog_title'];
                                $blog_date =$row['blog_date'];
                                $blog_author =$row['blog_author'];
                                $blog_image =$row['blog_image'];
                                $blog_content =substr($row['blog_content'],0,500);
                                



                            ?>
                                
                                <h2> 
                                    <a href="blogpages.php?id=<?php echo $blog_id; ?>">
                                      <?php echo $blog_title; ?>
                                    </a>
                                </h2>

                                <p>Published On: <b><?php echo $blog_date; ?></b></p>
                                <p><i></i> <span>By: <b><?php echo $blog_author; ?></b></span></p>

                                    <div id="single_post">                                
                                         <img  src="images2/uploads/<?php echo $blog_image; ?>" width="100%" height="450" />
                                    </div>
                                 

                                <p align="justify"><?php echo $blog_content; ?></p>

                                <p align="right"> <a href="blogpages.php?id=<?php echo $blog_id; ?>" class="btn btn-primary readmore">// Read More &gt;<i class="fa fa-angle-right"></i></a></p>
                                <hr>


                                <?php } ?>

                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
                    
                    <div class="widget categories">
                        <h3 style="color: #d9534f;">Recent Blog</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
                                <?php
                include("includes/connect.php");
            
                $query = "select * from blog order by 1 DESC LIMIT 0,3";
            
                $run =mysqli_query($con,$query);
            
            while ($row=mysqli_fetch_array($run)) {
            
                $blog_id =$row['blog_id'];
                $title =$row['blog_title'];
                $image =$row['blog_image'];
               
                ?>
                <a href="blogpages.php?id=<?php echo $blog_id; ?>">
                 <p><?php echo $title; ?></p></a>
                               <div id="single_post"> 
                                   <img width="140" height="100" <img src='images2/uploads/<?php echo $image; ?>' >
                                </div>
                                       
                                <p class="post-date"><b><?php echo $blog_date; ?></b></p>
                                 <?php } ?>

                                </div>
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                           
                </aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

 <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>Family AIDS Initiative Response is a local NGO in Kenya addresses the challenges faced by children who have either been orphaned by AIDS or live with parents who are affected from AIDS-related illnesses.We are involved in implementing the Preventing Orphaning Initiative (TPOI) a programme funded by Family Health International and AphiaPlus.</p>
                    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Our Company</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Get Involved</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Blog</a></li>
                             <li><a href="#">Contact Us</a></li>
                           
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Latest Blog</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                
                                
                            </div>
                            <div class="media-body">

                                <?php
                include("includes/connect.php");
            
                $query = "select * from blog order by 1 DESC LIMIT 0,3";
            
                $run =mysqli_query($con,$query);
            
            while ($row=mysqli_fetch_array($run)) {
            
                $blog_id =$row['blog_id'];
                $title =$row['blog_title'];
                $blog_date =$row['blog_date'];
                $image =$row['blog_image'];
               
                ?>
                <a href="blogpages.php?id=<?php echo $blog_id; ?>">
                       
                 <span class="media-heading"><?php echo $title; ?></span></a>
                 <p><b><?php echo $blog_date; ?></b></p>
                  
                   
            
               
                                
                                 <?php } ?>
                            </div>
                        </div>
                    </div>  
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">

                     <h4>ADDRESS</h4>
                     <address>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong> Head Office:</strong><br>
                         Giddo Plaza, off George Morara Rd Nakuru
                    </li>
                     <br>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email: </strong> info@fair-ke.org
                    </li>
                     <br>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Phone:</strong> (+254) 722894206 
                    </li>
                </ul>
                </address>

                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
    
<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                     <p>All Rights Reserved | FAIR &copy; <?php echo date("Y"); ?> |  <a href="admin/login.php"><i class="icon-lock"></i>  Admin Login</a></p>

                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="https://www.facebook.com/OnlineUsama"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/usamamukwaya"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/user/TheUgmovies"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="https://plus.google.com/+UsamaMukwaya"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="https://use.fontawesome.com/4d0c79038f.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>