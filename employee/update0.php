<?php
	  $tid = $_GET["update_id"];


	  $link = mysql_connect("localhost","root","");
	  mysql_select_db("taipeizoo");
	  mysql_query("set names utf8");
	  
	  $data = mysql_query("select * from employee where E_ID ='$tid'");

	  if (!$link) {
	    die('error'.mysql_error());
	  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>	Animal Update Page</title>
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
            Update it ! 
          </h2><!-- /.Section-title  -->
          <p class="section-description">
            Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
          </p><!-- /.section-description -->
          <table width="100%" style="border:2px #FFFFFF solid; padding:5px; font-family:monospace;" rules="all" cellpadding='5'>
	            <tr>
		            <td align="center">E_ID</td>
		            <td align="center">Employee Name</td>
		            <td align="center">Sex</td>
		            <td align="center">Phone</td>
		            <td align="center">Age</td>
		            <td align="center">Dept_ID</td>
	            </tr>

	            <?php
	              if (!$data){
	                echo'error';
	              }
	              else{
	              for($i=1;$i<=mysql_num_rows($data);$i++){
	                $rs=mysql_fetch_row($data);
	            ?>

	            <tr>
	              <td align="center"><?php echo $rs[0]?></td>
	              <td align="center"><?php echo $rs[1]?></td>
	              <td align="center"><?php echo $rs[2]?></td>
                  <td align="center"><?php echo $rs[3]?></td>
	              <td align="center"><?php echo $rs[4]?></td>
	              <td align="center"><?php echo $rs[5]?></td>
	            </tr>
	            <?php
	              }
	            }
	            ?>
          </table>

            <div>
              <form class="news-letter" action="update.php?tid=<? echo $tid; ?>" method="post">
                  <p class="alert-success"></p>
                  <p class="alert-warning"></p>

                  <div class="subscribe-hide">
					<input class="form-control" type="email" id="update_name" name="update_name" placeholder="Enter the employee's name"  required>
					<input class="form-control" type="email" id="update_sex" name="update_sex" placeholder="Enter the employee's sex !"  required>
					<input class="form-control" type="email" id="update_phone" name="update_phone" placeholder="Enter the employee's phone !"  required>
					<input class="form-control" type="email" id="update_age" name="update_age" placeholder="Enter the employee's age !"  required>
					<input class="form-control" type="email" id="update_did" name="update_did" placeholder="Enter the employee's department ID!"  required>
                    <button class="btn1"><i class="fa fa-chevron-circle-right"></i></button>
                  </div><!-- /.subscribe-hide -->
             </form><!-- /.news-letter -->
            </div><!-- /.contact-box-hide -->
          <br><br><br><br><br><br><br><br><br>
          <div class="next-section">
            <a href="employee.php"><span></span></a>
          </div><!-- /.next-section -->

        </div><!-- /.container -->
      </div><!-- /.pattern -->

    </section><!-- /#contact -->
    <!-- Update Section End -->


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
