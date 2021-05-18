<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>Dream_N_Motion</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet" >	
	<link href="css/font-awesome.min.css" rel="stylesheet">	
	<link href="css/prettyPhoto.css" rel="stylesheet">

	<link href="css/theme.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/colors/blue.css" rel="stylesheet" class="colors">


	<!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    
	<!-- Favicons -->
	
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
	<link rel="shortcut icon" href="images/ico/dream.jpg">
    <?php

        session_start();

        $con= mysqli_connect('localhost','root','');
        mysqli_select_db($con, 'ecje');

        $str="select * from actualites  ORDER BY date DESC";
 		$query=mysqli_query($con,$str);

    ?>

</head>

<body data-spy="scroll" data-target="#mynav" data-offset="85">

<!-- Preloader --> 
<div id="preloader">
	<div id="status">
		<div class="spinner">
			  <div class="rect1"></div>
			  <div class="rect2"></div>
			  <div class="rect3"></div>
			  <div class="rect4"></div>
			  <div class="rect5"></div>
		</div>
	</div>
</div>
<!-- End Preloader -->

<header>
<div id="navigation">
	<div class="navbar-wrapper">
		<nav class="navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="images/ico/dream.png" style="height: 70px; width: 90px"></a>
					</div>
					<div id="mynav" class="navbar-collapse collapse">
						<ul class="nav navbar-nav main-nav-list">
							<li><a href="index.php">Acceuil</a></li>
							<li><a href="actualites.php">Actualité</a></li>
							<li><a href="formation.php">Formation</a></li>
							<li><a href="qui somme nous.php">Qui sommes nous?</a></li>
							<li><a href="Evaluer vos compétence.php">Evaluer vos compétence</a></li>
							<li><a href="Contact.php">Contact</a></li>
							<li><a href="rejoindre.php">Rejoignez votre equipe</a></li>								
						</ul>
					</div>		
				</div>
			</div>
		</nav>
	</div>
</div>
<!-- End Bootstrap Menu -->

<!-- Slider -->
<section id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
        	
				<div class="caption">
					<h1 class="animated fadeInLeftBig">Dream_N_Motion<br><br></h1>
					<!--<p class="animated fadeInRightBig">Vers l'excellence</p>-->
					
				</div>
			<video autoplay loop muted playsinline src="video/bangkok-city.mp4" width="100%"></video>	
			
        </div>
    </div>	
</section>
<!-- End Slider -->


</header>

<!-- Dernières activités Section --> 
<section class="section-wrapper" id="works">
		<div class="news">
		<!-- Block Title -->	
		<div class="element-title">			
			<div class="row">	 		
				<div class="container">
					<div class="section-title wow fadeInDown">			
						<h1><span>Actualités</span></h1>							
					</div>				
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Nos dernières activités</h1>
					<!--<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Keep in Touch With Our <span class="main-color">News </span>& Events</h3>-->	
				</div>
			</div>
		</div>
		<!-- End Block Title -->
		<div class="container">
			<div class="wrapper-news">	
				<div class="row">
				<?php
					$cpt=0;
					while($row=mysqli_fetch_array($query)){
				?>
					<div class="col-lg-6 col-sm-6">	
						<div class="news-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="300ms">	
							<div class="entry-header">	
								<div class="blog-image">
									<?php
									echo "<img src=\"backend/img_event.php?id=".$row['id']."\" class=\"img-responsive\"> ";
									?>
									<!--<img alt="" src="images/blog/post1.jpg" class="img-responsive">-->
								</div>							
								<div class="post-date">
									<?php
									echo "<h2>".$row['date']."</h2>";
									?>
									<!--<h2>21<span>June</span></h2>-->
								</div>							
							</div>
							<div class="entry-content">	
								<h3 class="entry-title">
									<?php
									echo $row['titre'];
									?>
									<!--<a href="blog.html">Adipisicing elit, sed do eiusmod tempor</a>-->
								</h3>							
								<ul class="entry-meta">
									<?php
									echo "<li><i class=\"fa fa-tags\"></i> ".$row['categorie']."</li>";
									?>
								<!--<li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-tags"></i> Projects <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-comments"></i> 3 Comments</a></li>-->
								</ul>	
								<p>
									<?php
									echo $row['description'];
									?>
								</p>								
							</div>
						</div>
					</div>
				<?php
					$cpt++;
					if ($cpt>=2){echo"</div><div class=\"row\">"; $cpt=0;}
				?>

				<?php
					}
					echo"</div>";
				?>
</section> 
<!-- End Works Section -->



<!-- Footer -->
<div class="bottom-footer">
	<div class="container">
		<div class="bottom-footer-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">
			<h4 style="color: #040433"><b>Mail :</b> <u>www.dreams-motion.com</u></h4>
			<h4 style="color: #040433"><b>Adresse :</b> <u>Tunisie-Sfax: Beb Bhar</u></h4>
		</div> 
		<div class="bottom-footer-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="450ms">
			<ul class="bottom-social-icons">
			    <li><a href="https://www.facebook.com/dnm.tun/"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/mydreamsnmotion" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/dreamsnmotion/?hl=fr" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<li><a href="https://www.linkedin.com/company/dreams-n-motion" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</div>	
		<div class="bottom-footer-left wow fadeInUp" data-wow-duration="1s" data-wow-delay="600ms">
			<p><span>&#169; Copyright 2020 <a href="https://www.enetcomje.com/">ENET'COM Junior Entreprise</a></p>
		</div>		  
	</div>
</div>
<!-- End Footer -->		

<!-- Scroll to Top  -->
<a href="#" class="scroll-up"><i class="fa fa-arrow-up"></i></a>
<!-- End Scroll To Top  -->
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/retina.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>	
	<script src="js/waypoints.min.js"></script>	
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>	
	<script src="js/jquery.knob.min.js"></script>	
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/custom.js"></script>
  

</body>
</html>