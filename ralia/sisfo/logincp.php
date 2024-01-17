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
	background-image: url();
}
-->
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body id="home">

	<div id="wrapper">
		<header>
			<img src="images/icoo1.png">
				<div class="clearfix"></div>

			<nav>

			</nav>

		</header>

    <div id="divTrigger">

    </div>
			<div id="latest">
				<section class="left-col">
					<center>
<div id="login-form">
<form method="post">
<table align="left" width="50%" border="0">
<tr><td><h2>Sudah Bergabung?</h2></td></tr>
<tr>
<td><input type="text" name="email" placeholder="Masukan email
 Anda" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Masukan password Anda" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Masuk</button></td>
</tr>
<tr><td><h2>Belum Bergabung?</h2>
<br>
<a href="register.php">Klik Disini untuk melakukan pendaftaran</a></td></tr>

</table>
</form>
</div>
</center>
				</section> <!-- END Left Column -->
				<aside class="sidebar">
				
				</aside>
			</div> <!-- END Latest -->
			<div class="clearfix"></div>
		<footer>
			<hr>
			<p>&copy; 2015 - RTK IT Management System</p>
		</footer>

	</div> <!-- END Wrapper -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</body>
</html>
