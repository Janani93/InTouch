<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!--<a class="navbar-brand mr-auto" href="#"><img src="img/intouch.jpg" height="40" width="100"></a>-->
			<h2>InTouch Solutions</h2>
			<div class="collapse navbar-collapse" id="Navbar">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="index.php?PageName=home"><span class="fa fa-home fa-lg"></span> HOME</a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?PageName=aboutus"><span class="fa fa-info fa-lg"></span> ABOUT US</a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?PageName=customer"><span class="fa fa-list fa-lg"></span> CUSTOMERS</a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?PageName=contactus"><span class="fa fa-address-card fa-lg"></span> CONTACT</a></li>
				</ul>
			</div>				
		</div>
	</nav>		
	   

    <div class="container">
		<div class="row row-content">	
			<?php
				$PageDirectory='Pages Folder';
				if(!empty($_GET['PageName'])){
					$PageName=$_GET['PageName'];
					$PagesFolder=scandir($PageDirectory,0);
					unset($PagesFolder[0],$PagesFolder[1]);

					if(in_array($PageName.'.inc.php',$PagesFolder)){
						include($PageDirectory.'/'.$PageName.'.inc.php');
					}else{
                        echo '<h1>You are Lost</h1>';
                        echo '<img src="img/lost.gif" height="430" width="680">';
                        echo '<h2>Sorry Page Not Found</h2>';
                    }
				}else{
                    include($PageDirectory.'/home.inc.php');
                }
			?>
			<div class="clear"></div>
		</div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.html">About Us</a></li>
                        <li><a href="./customer.html">Customers</a></li>
                        <li><a href="./contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              25, Akuressa Road, Matara<br>
		              Sri Lanka<br>
		              <i class="fa fa-phone fa-lg"></i>: +94 417 356 690<br>
		              <i class="fa fa-fax fa-lg"></i>: +94 417 356 690<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:intouch@solutions.lk">intouch@solutions.lk</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center ">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:intouch@solutions.lk"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 InTouch Solutions</p>
                </div>
           </div>
        </div>
    </footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script>
       
		
    </script>
</body>

</html>