<?php 
/*
 * Sample Code by Nur Hidayar
 * FB: https://www.facebook.com/inung.hidayat?ref=tn_tnmn
 * Twitter: https://twitter.com/hidayat365
 *******************
 * Silakan gunakan untuk keperluan belajar
 ***/

/*
 * start session
 ***/
session_start();

/*
 * bootstrap
 * include/require library yang diperlukan di sini
 ***/
require_once('config.php');
require_once('koneksi.php');

if (!isset($_SESSION['user']['login'])) {
	require_once('login.php');
}

else {
	$username=$_SESSION['user']['username'];
    print "
    	<center>
    		Hello $username!
    		Login BERHASIL
    	</center>";
	require_once('logout.php');
}
