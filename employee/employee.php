<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>	Employee Homepage </title>
	<meta name="description" content="Kite Coming Soon HTML Template by Jewel Theme" >
	<meta name="author" content="Jewel Theme">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<!-- Bootstrap  -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- icon fonts font Awesome -->
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
	<!-- Custom Styles -->
	<link href="../assets/css/style.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>

	<!-- Main Menu -->
	<div id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">

		<nav class="collapse navbar-collapse">
			<!-- Main navigation -->
			<ul id="headernavigation" class="nav navbar-nav">
				<li class="active"><a href="#read">[ Read ]</a></li>	
				<li><a href="#insert">[ Insert ]</a></li>	
				<li><a href="#update">[ Update ]</a></li>	
				<li><a href="#delete">[ Delete ]</a></li>	
			</ul> <!-- /.nav .navbar-nav -->
			<ul class="nav navbar-nav">
				<li><a href="../index0.php">[ Back Home ]</a></li>			
			</ul>
		</nav> <!-- /.navbar-collapse  -->
	</div><!-- /#main-menu -->
	<!-- Main Menu End -->

	
	<!-- Read Section -->
	<section id="read" class="section-style" data-background-image="../images/background/page-top.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h3 class="section-name">
					<span>
						Read
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					Search for employees? 
				</h2><!-- /.Section-title  -->
				<p class="section-description">
					<br>
				</p><!-- /.section-description -->

				<form class="news-letter" action="read.php" method="post">
					<p class="alert-success"></p>
					<p class="alert-warning"></p>

					<div class="subscribe-hide">
						<input class="form-control" type="email" id="subscribe-email" name="read_name" placeholder="Enter the employee's name / id !"  required>
						<button  type="submit" id="subscribe-submit" class="btn" "><i class="fa fa-search"></i></button>
					</div><!-- /.subscribe-hide -->
				</form><!-- /.news-letter -->

				<div id="time_countdown" class="time-count-container"></div><!-- /.time-count-container -->

					<div class="next-section">
						<a class="go-to-insert"><span></span></a>
					</div><!-- /.next-section -->

				</div><!-- /.container -->
			</div><!-- /.pattern -->

		</section><!-- /#subscribe -->
		<!-- Subscribe Section End -->

		<!-- Insert Section -->
	<section id="insert" class="section-style" data-background-image="../images/background/newsletter.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h3 class="section-name">
					<span>
						Insert
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					Insert<br> employees? 
				</h2><!-- /.Section-title  -->
				<p class="section-description">
				</p><!-- /.section-description -->
					
				<form class="news-letter" action="insert.php" method="post">
					<div class="subscribe-hide">

						<input class="form-control" type="email" id="insert_id" name="insert_id" placeholder="Enter the employee's id !"  required>
						<input class="form-control" type="email" id="insert_name" name="insert_name" placeholder="Enter the employee's name"  required>
						<input class="form-control" type="email" id="insert_sex" name="insert_sex" placeholder="Enter the employee's sex !"  required>
						<input class="form-control" type="email" id="insert_phone" name="insert_phone" placeholder="Enter the employee's phone !"  required>
						<input class="form-control" type="email" id="insert_age" name="insert_age" placeholder="Enter the employee's age !"  required>
						<input class="form-control" type="email" id="insert_did" name="insert_did" placeholder="Enter the employee's department ID!"  required>

						<button class="btn2" "><i class="fa fa-chevron-circle-right"></i></button>
					</div><!-- /.subscribe-hide -->
				</form><!-- /.news-letter -->

				<br><br><br><br>
					<div class="next-section">
						<a class="go-to-update"><span></span></a>
					</div><!-- /.next-section -->

				</div><!-- /.container -->
			</div><!-- /.pattern -->

		</section><!-- /#subscribe -->
		<!-- Subscribe Section End -->

		<!-- Update Section -->
	<section id="update" class="section-style" data-background-image="../images/background/about-us.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h3 class="section-name">
					<span>
						Update
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					Update<br> employees? 
				</h2><!-- /.Section-title  -->
				<p class="section-description">
				<br><br>
				</p><!-- /.section-description -->

				<div class="social-btn-container">

					</div><!-- /.social-btn-container -->

					<p class="time-until">
					<a href="list.php"><span>GO!!!!!!!</span></a>
					</p><!-- /.time-until -->

					<div class="next-section">
						<a class="go-to-delete"><span></span></a>
					</div><!-- /.next-section -->

				</div><!-- /.container -->
			</div><!-- /.pattern -->

		</section><!-- /#subscribe -->
		<!-- Subscribe Section End -->


		<!-- Delete Section -->
	<section id="delete" class="section-style" data-background-image="../images/background/contact.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h3 class="section-name">
					<span>
						Delete
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					Delete<br> employees? 
				</h2><!-- /.Section-title  -->
				<p class="section-description">
				<br><br>
				</p><!-- /.section-description -->

				
					<div class="social-btn-container">

					</div><!-- /.social-btn-container -->

					<p class="time-until">
					<a href="list.php"><span>GO!!!!!!!</span></a>
					</p><!-- /.time-until -->

					<div class="next-section">
						<a class="go-to-read"><span></span></a>
					</div><!-- /.next-section -->

				</div><!-- /.container -->
			</div><!-- /.pattern -->

		</section><!-- /#subscribe -->
		<!-- Subscribe Section End -->


		<!-- Footer Section -->
		<footer id="footer-section">
			<p class="copyright">
				&copy; <a href="">IM107</a> 2016-2017, All Rights Reserved. Designed by & Developed by <a href="">DB Team8</a>
			</p>
		</footer>
		<!-- Footer Section End -->


		<!-- jQuery Library -->
		<script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
		<!-- Modernizr js -->
		<script type="text/javascript" src="../assets/js/modernizr-2.8.0.min.js"></script>
		<!-- Plugins -->
		<script type="text/javascript" src="../assets/js/plugins.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="../assets/js/functions.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="../assets/js/jquery.ajaxchimp.min.js"></script>

	</body>
	</html>
