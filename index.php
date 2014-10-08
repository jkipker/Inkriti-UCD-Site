<!DOCTYPE HTML>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>United Concordia Dental</title>

  <meta name="viewport" content="width=device-width, user-scalable=no">

   <!--GOOGLE FONT-->
  <link href='http://fonts.googleapis.com/css?family=Belleza' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/jk-extends.css">

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<div class="stage">
		<div class="arrows">
			<a href="javascript:;" class="prev"><img src="img/nav-left.png" alt="back"></a>
			<a href="javascript:;" class="next"><img src="img/nav-right.png" alt="back"></a>
		</div>

		<?php include 'views/section1-home.php';?>

		<?php include 'views/section2-lookback.php';?>

		<!-- IMAGE IN BETWEEN SECTIONS -->
	    <div class="img-divider new-exec-img"><img src="img/dentist-checkup.jpg" alt=""></div>
		<!-- END IMAGE BETWEEN SECTIONS -->

		<?php include 'views/section3-exec-summary.php';?>

		<!-- IMAGE IN BETWEEN SECTIONS -->
		<div class="img-divider new-sum-img"><img src="img/Page-1-Image-6.png" alt=""></div>
		<!-- END IMAGE BETWEEN SECTIONS -->

		<?php include 'views/section4-ourmission.php';?>

		<div class="img-divider phone-woman-img"><img src="img/woman-calling.png"/></div>

		<?php include 'views/section5-ourcommunity.php';?>

		<div class="img-divider financial-img"><img src="img/Page-1-Image-2.png" alt=""></div>

		<?php include 'views/section6-financials.php';?>

		<div class="img-divider company-img"><img src="img/staff.jpg" alt="staff"></div>

		<?php include 'views/section7-ourcompany.php';?>

	</div>

	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src='js/jquery.mousewheel.js'></script>
	<!--script src="js/vendor/jquery-scrollto.js"></script-->
	<script src="js/jk-customscripts.js"></script>
	<!--script src="js/jquery.typeout.min.js"></script-->

    <!--script src="js/jquery.jInvertScroll.js"></script-->
    <!--script src="js/jquery.viewportchecker.js"></script-->
    <!--script src="js/skrollr.min.js"></script-->
   	<script src="js/main.js"></script>

</body>

</html>