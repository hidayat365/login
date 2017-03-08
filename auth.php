<?php
/*
 * code untuk pengecekan session login
 **/

/*
 * start session
 **/
session_start();

/*
 * periksa session
 * jika tidak ada session 'user' maka kita anggap belum login
 **/
if (!isset($_SESSION['user'])) {
	header('location: index.php');
}
