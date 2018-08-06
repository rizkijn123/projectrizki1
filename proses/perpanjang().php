<?php
date_default_timezone_set('Asia/Jakarta');
require("../koneksi.php");
include "enter.php";
$user = $_SESSION['username']; 
$query = mysql_query("SELECT * FROM user WHERE username = '$user'");
$hasil = mysql_fetch_array($query);
$username=$_POST['hdsn'];
$reseller = $fet['nama'];
$date=date('Y-m-d');
if($username == 2143) {
echo "<b>HDSN BLOCKED!</b>";
}else{
if(!$username) {
  echo "Error : Masih Ada Data Yang Kosong";
 } else { 
$cektanggal = mysql_query("SELECT * FROM member WHERE username = '$username'");
$cektanggal1 = mysql_query("SELECT * FROM ls WHERE username = '$username'");
$cekjumlah = mysql_num_rows($cektanggal);
$cekjumlah1 = mysql_num_rows($cektanggal1);
$cekhasil = mysql_fetch_array($cektanggal);
$tanggalsebelum = $cekhasil['expired'];
$nama = $cekhasil['name'];
if ($_POST["durasi"] == '1') {
$fee='15000';
$durasi = '1';
$newdate = strtotime ( '+1 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
$perpan = strtotime ( '+1 day' , strtotime ( $tanggalsebelum ) ) ;
$perpan2 = date ( 'Y-m-d' , $perpan);
} else if ($_POST["durasi"] == '3') {
$fee='10000';
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
}else if ($tanggalsebelum <= $date) {
$newdate3 = $newdate;
$sisa = $hasil['saldo']-$fee;
$simpan = mysql_query("UPDATE user SET saldo = saldo-$fee WHERE username = '$user'");
$simpan = mysql_query("UPDATE member SET expired = '$newdate' WHERE username = '$username'");
$simpan = mysql_query("UPDATE member SET status = 'aktif' WHERE username = '$username'");

}else{
$newdate3 = $perpan2;
$sisa = $hasil['saldo']-$fee;
$simpan = mysql_query("UPDATE user SET saldo = saldo-$fee WHERE username = '$user'");
$simpan = mysql_query("UPDATE member SET expired = '$perpan2' WHERE username = '$username'");
$simpan = mysql_query("UPDATE member SET status = 'aktif' WHERE username = '$username'");
}
if($simpan) {
echo '<div class="alert alert-success"><b>Perpanjang Member Berhasil!</b>
<br>
Nama Item : Perpanjang VIP BloodLust PointBlank Personal '.$durasi.' Day
<br>
Nama : '.$nama.'
<br>
Data Sebelum : '.$cekhasil['expired'].'
<br>
Data Sesudah : '.$newdate3.'
<br>
Harga : Rp.'.number_format($fee,0,',','.').'
<br>
Saldo Sebelum : Rp.'.number_format($hasil['saldo'],0,',','.').'
<br>
Saldo Setelah : Rp.'.number_format($sisa,0,',','.').'
<br></div>';
} else {
echo 'ERROR';
}
}
}


?>