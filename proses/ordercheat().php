<?php
require("../koneksi.php");
include "enter.php";
$user = $_SESSION['username']; 
$query = mysql_query("SELECT * FROM user WHERE username = '$user'");
$hasil = mysql_fetch_array($query);
$nama=$_POST['name'];
$username=$_POST['hdsn'];
$password=$_POST['password'];
$reseller = $fet['nama'];
$email    = $_POST ['email'];
$date=date('Y-m-d');
if($username == 2143) {
echo "<b>HDSN BLOCKED!</b>";
}else{
if(!$nama || !$username || !$password) {
  echo "Error : Masih Ada Data Yang Kosong";
 } else { 
$cektanggal = mysql_query("SELECT * FROM member WHERE username = '$username'");
$cektanggal1 = mysql_query("SELECT * FROM ls WHERE username = '$username'");
$cekjumlah = mysql_num_rows($cektanggal);
$cekjumlah1 = mysql_num_rows($cektanggal1);
$cekhasil = mysql_fetch_array($cektanggal);
$tanggalsebelum = $cekhasil['expired'];
if ($_POST["durasi"] == '1') {
$fee='10000';
$durasi = '1';
$newdate = strtotime ( '+1 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
$perpan = strtotime ( '+1 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"] == '3') {
$fee='1000';
$durasi = '3';
$newdate = strtotime ( '+3 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
$perpan = strtotime ( '+3 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"]=='7') {
$fee='25000';
$durasi = '7';
$newdate = strtotime ( '+7 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
$perpan = strtotime ( '+7 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"]=='14') {
$fee='45000';
$durasi = '14';
$newdate = strtotime ( '+14 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
$perpan = strtotime ( '+14 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"]=='30') {
$fee='75000';
$durasi = '30';
$newdate = strtotime ( '+30 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
$perpan = strtotime ( '+30 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"]=='60') {
$fee='200000';
$durasi = '60';
$newdate = strtotime ( '+60 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
$perpan = strtotime ( '+60 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
}else{
$fee = 'a';
}


if($hasil['saldo'] < $fee) {
echo '<div class="alert alert-warning">Balance Insufficient</div>';
}else if($cekjumlah !== 0) {
echo '<div class="alert alert-warning">Registered HDSN</div>';
} else {
$sisa = $hasil['saldo']-$fee;
$simpan = mysql_query("INSERT INTO member (`name`, `reseller`, `email`, `username`, `password`,  `expired`, `status`) VALUES ('$nama', '$reseller','$email', '$username', '$password',  '$newdate', 'aktif')");
$simpan = mysql_query("INSERT Into historyall ('pembeli', 'barang', 'tanggal') VALUES ('$nama', 'Register Cheat PointBlank $durasi day','$date')");
$simpan = mysql_query("UPDATE user SET saldo = saldo-$fee WHERE username = '$user'");
if($simpan) {
echo '<div class="alert alert-success"><b>Pendaftaran Member Berhasil !</b>
<br>
Uplink : '.$reseller.'
<br>
Pembeli : '.$nama.'
<br>
Durasi : '.$durasi.' hari
<br>
Data HDSN : '.$username.'
<br>
Password : '.$password.'
<br>
Email : '.$email.'
<br>
Expired : '.$newdate.'
<br>
Saldo Sebelum : Rp.'.number_format($hasil['saldo'],0,',','.').'
<br>
Saldo Setelah : Rp.'.number_format($sisa,0,',','.').'
<br>
Link Login Ganti Serial http://vipbloodlust.tk/<br></div>';

} else {
echo 'ERROR';
}
}
}
}
$subjek = 'Selamat Bergabung Di V-VIP BLENDS';
$mailto = $email; //masukin email lo disini

/* Fungsi berikut untuk mengambil input field. */


/* Mengambil informasi untuk dikirim kepada facebook anda !. */

$body = <<<EOD
<br><hr><br>
Hallo! $nama , Komputer Kamu Sekarang Sudah Terdaftar Cheat Pada Database Kami . <br>
Atas Nama: $nama<br>
Durasi: $durasi Hari<br>
Expired: $newdate<br>
Di Daftarkan Oleh: $reseller<br>
Langkah Terakhir, Kamu Tinggal Download Cheatnya Di http://official-blends.tk/Tools%20Internal.rar <br>
Jangan Lupa Perpanjang Lagi Ya Mas $nama . <br>
<br>
<h1>Bravo BLENDS</h1>
EOD;


$headers = "From: INFO@VIPBLENDS.com\r\n"; // Buat nunjukin pengirim email.
$headers = "Content-type: text/html\r\n"; // Untuk memerintahkan server melakukan coding teks.
$success = mail($mailto, $subjek, $body, $headers); // Hal-hal yang akan dikirim.
?>


