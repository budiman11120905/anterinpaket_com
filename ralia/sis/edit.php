<?php 
include('config.php');
include('cek-login.php');
?>

<html>
<head>
<title>Belajar PHP</title>
</head>

<body>
<h1>Form Input Data</h1>

<?php 
$id = $_GET['id'];

$query = mysql_query("select * from user where user_id='$id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="update.php" method="post">
<input type="hidden" name="user_id" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Username</td>
        	<td>:</td>
        	<td><input type="text" name="username" maxlength="20" required="required" value="<?php echo $data['username']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td>:</td>
        	<td><input type="password" name="password" maxlength="20" required="required" value="<?php echo $data['password']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Fullname</td>
        	<td>:</td>
        	<td><input type="text" name="fullname" maxlength="100" required="required" value="<?php echo $data['fullname']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Email</td>
        	<td>:</td>
        	<td><input type="email" name="email" required="required" value="<?php echo $data['email']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Agama</td>
        	<td>:</td>
        	<td><input type="text" name="agama" required="required" value="<?php echo $data['agama']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Nomor HP</td>
        	<td>:</td>
        	<td><input type="text" name="no_hp" maxlength="14" required="required" value="<?php echo $data['no_hp']; ?>" /></td>
        </tr>
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="view.php">Lihat Data</a>

</body>
</html>