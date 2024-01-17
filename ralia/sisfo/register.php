<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));

	$uname = trim($uname);
	$email = trim($email);
	$upass = trim($upass);

	// email exist or not
	$query = "SELECT user_email FROM users WHERE user_email='$email'";
	$result = mysql_query($query);

	$count = mysql_num_rows($result); // if email not found then register

	if($count == 0){

		if(mysql_query("INSERT INTO users(user_name,user_email,user_pass) VALUES('$uname','$email','$upass')"))
		{
			?>
			<script>alert('successfully registered ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}
	}
	else{
			?>
			<script>alert('Sorry Email ID already taken ...');</script>
			<?php
	}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Pendaftaran</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<tr><td><h2>Daftar Pelanggan Baru</h2></td></tr>
<tr><td><h4>Silahkan mengisi form dibawah ini untuk mendaftar sebagai pelanggan baru.
	 Nikmati berbagai kemudahan dalam pelayanan kami yang kami tawarkan kepada Anda.
	  Setelah Anda mendaftar dan memiliki akun,
		Anda dapat mengakses website ini dengan leluasa untuk mengurus pengiriman barang Anda.</h4></td></tr>
<tr>
<td><input type="text" name="uname" placeholder="User Name Anda" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Email Anda" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Password Anda" required /></td>
</tr>
<tr><td><h2>Identitas Pribadi</h2></td></tr>
<tr>
<td><input type="text" name="uname" placeholder="Nama Perusahaan/Instansi" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Alamat" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Kota" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="No Telepon" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Daftar</button></td>
</tr>
<tr>
<td><a href="index.php">Klik Disini untuk batal mendaftar</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
