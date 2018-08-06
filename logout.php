<?php
session_start();
unset($_SESSION['username']);
     header("location:index.php?pesan=2&isi=Anda Telah Berhasil Logout.Terima Kasih Telah Menggunakan Jasa Web Kami.");
?>
