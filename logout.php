<?php
/*
 * periksa apakah ada 'logout' di variable $_POST
 * $_POST['logout'] didapat dari button di form logout
 ***/
if (isset($_POST['logout'])) {
	session_destroy();
	header('location: index.php');
}
?>

<center>
<form name="frmLogout" id="frmLogin" method="post">
<table>
	<tr>
		<th colspan="2">Keluar dari Aplikasi</th>
	</tr>
	<tr>
		<th colspan="2"><input type="submit" name="logout" value="Loe go out"></th>
	</tr>
</table>
</form>
</center>
