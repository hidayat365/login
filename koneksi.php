<?php
/*
 * koneksi database
 ***/
$db_conn = mysql_pconnect($db_host.':'.$db_port,$db_user,$db_pass);
if (!$db_conn) die('Koneksi Database GAGAL: ' . mysql_error());

/*
 * set database aktif
 ***/
$db_active = mysql_select_db($db_name, $db_conn);
if (!$db_active) die ('Pengaktifan Database "'.$db_name.'" GAGAL: ' . mysql_error());

