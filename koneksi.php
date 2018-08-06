<?php

$host = "localhost";
$user = "vipblood_db";
$pass = "rizkijaelani11";
$db = "vipblood_db";
$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! ');
mysql_select_db($db);
?>