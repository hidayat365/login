<?php 
/*
 * Sample Code by Nur Hidayar
 * FB: https://www.facebook.com/inung.hidayat?ref=tn_tnmn
 * Twitter: https://twitter.com/hidayat365
 *******************
 * Silakan gunakan untuk keperluan belajar
 ***/

/*
 * periksa apakah ada 'login' di variable $_POST
 * $_POST['login'] didapat dari button di form login
 * $_POST['username'] didapat dari input text di form login
 * $_POST['password'] didapat dari input password di form login
 ***/
if (isset($_POST['login'])) {
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	/*
	 * query ke database
	 * $db_conn didapat dari file koneksi.php
	 ***/
	$sql = "select * from users 
		where username='$username' and password=md5('$password')";
	$rs = mysql_query($sql,$db_conn) or die (mysql_error());
	if ($row=mysql_fetch_assoc($rs)) {
		// simpan variable session
		$_SESSION['user']['login']=TRUE;
		$_SESSION['user']['username']=$username;
		$_SESSION['user']['password']=$password;
		// redirect ke index.php
		header('location: index.php');
	}
	else {
		// tampilkan error
		print '<center>Proses Login GAGAL</center>';
	}
}
?>

<center>
<form name="frmLogin" id="frmLogin" method="post">
<table>
	<tr>
		<th colspan="2">Login Form</th>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" id="username" name="username" /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" id="password" name="password" /></td>
	</tr>
	<tr>
		<th colspan="2"><input type="submit" name="login" value="Login"></th>
	</tr>
</table>
</form>
</center>