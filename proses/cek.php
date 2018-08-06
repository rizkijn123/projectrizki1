<?php
session_start();
include "../koneksi.php";

$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$cek = mysql_num_rows($query);
$hasil = mysql_fetch_array($query);
?>