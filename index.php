<?php
//twitter snippets for tweets
session_start();
error_reporting(1);
require_once("library/twitteroauth-master/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
$twitteruser = "UnitedConcordia";
$notweets =4;
$consumerkey = "KxGg42KccAHCtuNqSOsnTgWPe";
$consumersecret = "cfFmUoEXU3Y1JbKdhuvAF88P3CMcOqKAljwqpkotng0cy91nHj";
$accesstoken = "2459385752-myx7Aszc4x4btu1Ikzp9UxkwELYzuTzrHgEgXDg";
$accesstokensecret = "TDS5Hjc6ENNUYvRigQTfhrxmEOyNWpBdteLo5v31lOjiS";

function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}

$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets."&exclude_replies=true");


function fetchUrl($url){

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_TIMEOUT, 20);
 // You may need to add the line below
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

 $feedData = curl_exec($ch);
 curl_close($ch); 

 return $feedData;

}


$json_object = fetchUrl("https://graph.facebook.com/v2.1/252175674875211/feed?key=value&access_token=979366645412371|31336bf1baa8a42462325e4ab572debd");
$arraydata = json_decode($json_object);
$arrayfeeds= $arraydata->data;


?>

<!DOCTYPE HTML>

<html xmlns:fb="http://ogp.me/ns/fb#">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>United Concordia Dental Report</title>
  <meta name="description" content="Year-End Annual Report for United Concordia Dental" />
  <meta property="og:title" content="United Concordia Dental Report" />
  <meta property="og:description" content="Year-End Annual Report for United Concordia Dental" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.unitedConcordia.com/ourdentalstory" />
  <meta property="og:image" content="https://www.unitedconcordia.com/v2/images/uc-header.png" />

  <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=.55">
  
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  

  <!--[if IE 8]>
  	<meta http-equiv="X-UA-Compatible" content="IE=8">
  <![endif]-->
  <!--[if lt IE 9]>
	<meta http-equiv="X-UA-Compatible" content="IE=9">
  <![endif]-->




  <!--GOOGLE FONT-->
  <link href='http://fonts.googleapis.com/css?family=Belleza' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/jk-extends.css">
  <link rel="stylesheet" type="text/css" href="css/ink-media-queries.css">



  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/jk-ie8.css">	
	<![endif]-->
	<!--[if IE 8]>
        	<link rel="stylesheet" type="text/css" href="css/jk-ie8.css">	

	<![endif]-->

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TT53QQ"
height="0" width="0"
style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f)
;
})(window,document,'script','dataLayer','GTM-TT53QQ');</script>
<!-- End Google Tag Manager -->

  
</head>

<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=582191465151643&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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
	<script src="js/jk-customscripts.js"></script>
   	<script src="js/main.js"></script>

</body>

</html>