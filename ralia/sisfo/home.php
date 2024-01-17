<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['user_email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<img src="images/icoo.png" width="100%">
</head>
<body>
<div id="header">
	<div id="left">
    </div>
	<div id="left">
    	<div id="content"><br><br><br>
		<table col="0" border="2">
		<tr>
        	<td><a href="#">Form Pengiriman</a></td>
			<td><a href="#">Tracking</a></td>
			<td><a href="#">History Pengiriman</a></td>
		</tr>
		</table>
        </div>
    </div>
    <div id="right">
    	<div id="content">
        	Selamat Datang, <?php echo $userRow['user_name']; ?>&nbsp;<a href="logout.php?logout">Keluar</a>
        </div>
    </div>
</div>

<div id="body">
<form method="post">
<table align="center" width="100%" border="0">
<tr>
<tr><td><h6>Form Pengiriman</h6></td></tr>
<tr align="left"><td><h6>ID Pengiriman:</h6></td></tr>
<tr>
<td><input type="text" name="uname" placeholder="Nama Pengirim" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Alamat Pengiriman" required /></td>
</tr>
<tr>
<td><h6>Kota</h6><select name="" required ></select></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="No.Telp Pengirim" required /></td>
</tr>
<tr>
<td>Via:<input type="radio" name="uname"  required /><h6>Darat<input type="radio" name="uname"  required />Laut<input type="radio" name="uname"  required /><h6>Udara</h6></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Nama Penerima" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Alamat Penerima" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="No Telepon Penerima" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Simpan</button></td>
</tr>
</tr>
</table>
</form>
</div>

</body>
</html>
