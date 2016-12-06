<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us | FAIR</title>
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
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" height="60" alt="logo"></a>
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
                    <h1>Contact Us</h1>
                    
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->    

    <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                        </div>
                    </div>
                </form>
            </div><!--/.col-sm-8-->
            <div class="col-sm-4">
                <h4>Our Location</h4>
                <iframe width="100%" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.ke/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=nakuru,+nakuru+Division,+GIDDOPLAZA&amp;aq=0&amp;oq=nakuru+giddo&amp;sll=-0.2869854,36.0595571&amp;sspn=-0.2869854,36.0595571&amp;ie=UTF8&amp;hq=&amp;hnear=nakuru+nakuru,+giddo plaza&amp;t=m&amp;ll=-0.2869854,36.0595571&amp;spn=-0.2869854,36.0595571&amp;z=8&amp;output=embed"></iframe>
            </div><!--/.col-sm-4-->
        </div>
    </section><!--/#contact-page-->

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
                            <li><a href="about-us">About Us</a></li>
                            <li><a href="donate">Donate</a></li>
                            <li><a href="involved">Get Involved</a></li>
                            <li><a href="career">Careers</a></li>
                            <li><a href="jobs">Jobs</a></li>
                            <li><a href="blog">Blog</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                             <li><a href="contact-us.php">Contact Us</a></li>
                           
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