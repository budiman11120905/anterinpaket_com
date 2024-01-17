<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$email = trim($email);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT user_id, user_name, user_pass FROM users WHERE user_email='$email'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['user_pass']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: home.php");
	}
	else
	{
		?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title>	PT. Ralia Mandiri - Ralia Trans Kargo | Jasa Ekspedisi Domestik</title>
	<style type="text/css">
.classname {
	-moz-box-shadow:inset 0px 0px 0px 0px #cae3fc;
	-webkit-box-shadow:inset 0px 0px 0px 0px #cae3fc;
	box-shadow:inset 0px 0px 0px 0px #cae3fc;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #4197ee) );
	background:-moz-linear-gradient( center top, #79bbff 5%, #4197ee 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#4197ee');
	background-color:#79bbff;
	-webkit-border-top-left-radius:6px;
	-moz-border-radius-topleft:6px;
	border-top-left-radius:6px;
	-webkit-border-top-right-radius:6px;
	-moz-border-radius-topright:6px;
	border-top-right-radius:6px;
	-webkit-border-bottom-right-radius:6px;
	-moz-border-radius-bottomright:6px;
	border-bottom-right-radius:6px;
	-webkit-border-bottom-left-radius:6px;
	-moz-border-radius-bottomleft:6px;
	border-bottom-left-radius:6px;
	text-indent:0;
	border:1px solid #469df5;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:19px;
	font-weight:bold;
	font-style:normal;
	height:64px;
	line-height:64px;
	width:142px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #287ace;
}
.classname:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4197ee), color-stop(1, #79bbff) );
	background:-moz-linear-gradient( center top, #4197ee 5%, #79bbff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4197ee', endColorstr='#79bbff');
	background-color:#4197ee;
}.classname:active {
	position:relative;
	top:1px;
}</style>
	<link rel="stylesheet" type="text/css" href="style/reset.css" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="stylesheet" type="text/css" href="style/media-queries.css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="sms/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="sms/custom-nivo-slider.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="sms/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
	</script>
<script type="text/javascript"><!--
	google_ad_client = "pub-0867042286272834";
	/* link-unit-top 468x15, created 1/6/10 */
	google_ad_slot = "2849947523";
	google_ad_width = 468;
	google_ad_height = 15;
	//-->
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="head.css">
	  <script src="jquery-1.8.0.min.js"></script>
	  <script src="headline.js"></script>
    <script type="text/javascript"> 
      $(document).ready(function(){
	  		// untuk permulaan, tampilkan content nomor 1 '#slideAwal'
	  		bukaContent($('#slideAwal'),'div1');			
	    });
	  </script>		
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <style type="text/css">
<!--
.style1 {color: #FFFFFF}
body {
	background-image: url(images/background-large%20after%20yes.jpg);
}
-->
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body id="home">

	<div id="wrapper">
		<header>	
			<img src="images/icoo.png">
				<div class="clearfix"></div>
					
<div align="left" class="clearfix">
<br>
		 <h3 align="left">Masuk Sebagai</h3>
			<a  align="center" href="logincp.php" onclick="window.open('logincp.php', 'popupwindow','scrollbars=1, width=1000,height=1000');return false"
			class="classname"><span class="glyphicon glyphicon-user"></span>Customer</a>
			<a align="center" href="logincp.php" onclick="window.open('loginkur.php', 'popupwindow','scrollbars=1, width=1000,height=1000');return false"
			class="classname"><span class="glyphicon glyphicon-send"></span>Kurir</a>
			<br>
</div>
		</header>
 
    <div id="divTrigger">
      <a href="javascript:;" onClick="bukaContent(this,'div1')" id="slideAwal"></a>
      <a href="javascript:;" onClick="bukaContent(this,'div2')"> </a>
    </div>
	
    <div id="divContent">
      <div id="div1">
 	     <img src="images/1-slide.jpg" align="center" /> 
      </div>
      <div id="div2">
 	     <img src="images/2-slide.jpg" align="center" /> 
      </div>
    </div>			
			<div id="latest">
				<section class="left-col">
					<center>

</center>
				</section> <!-- END Left Column -->	
				<aside class="sidebar">
					
				
				</aside>
			</div> <!-- END Latest -->
			<div class="clearfix"></div>
			<hr/>
	  <div id="about">
				<h4><a href="#">Customer Kami</a></h4>
					<br>
		<img src="images/pti.jpg" alt="" width="200" height="150" />
		<img src="images/pyridam.jpg" width="200" height="150" />		
		<img src="images/innerindo.png" alt="" width="212" height="108" />&nbsp;		
		<img src="images/imeconmds.jpg" alt="" width="255" height="196" />		</div>	
		</section>	
		
		<hr/>
		<footer>
			<p>&copy; 2015 - RTK IT Management System</p>
		</footer>		
		
</div> <!-- END Wrapper -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</body>
</html>