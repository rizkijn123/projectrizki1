<?php


$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$get = mysql_fetch_array($query);
?>

<?php
  require_once("../koneksi.php");
  $username1 = $_POST['username'];
  $jumlah = $_POST['saldo'];
  $min = "5000";

  $cekuser = mysql_query("SELECT * FROM user WHERE username = '$username1'");  
  $dapat = mysql_num_rows($cekuser);
  $data = mysql_fetch_array($cekuser);

  if ($get['saldo'] < $jumlah) { ?>
Gagal : Saldo tidak mencukupi.
<? } else if($dapat == 0) { ?>
<div class="alert alert-danger">
Gagal : Username tidak terdaftar.
</div>
<? } else if ($jumlah < $min) { ?>
<div class="alert alert-danger">
<b>ERROR</b> : Top Up Minimal Rp.5.000
</div>
<? } else if(!$username || !$jumlah) { ?>
<div class="alert alert-danger">
Gagal : Masih ada data yang kosong.
</div>
<? } else {
 $simpan = mysql_query("UPDATE user SET saldo=saldo+$jumlah WHERE username = '$username1'");
 $simpan = mysql_query("UPDATE user SET saldo=saldo-$jumlah WHERE username = '$username'");
 if($simpan) { ?>
<div class="alert alert-success"><center>
====[ TopUp Saldo ]====<br />
TopUp Saldo sukses!<br />
Nama Penerima : <?php echo $data['nama']; ?> <br />
Username Penerima : <?php echo $username1; ?> <br />
Jumlah TopUp : <?php echo $jumlah; ?> Saldo <br />
Di TopUp Oleh : <?php echo $username; ?> <br />
====[ TopUp Saldo ]==== <br />
</center></div>
<? } else { ?>
ERROR
<? }
?>
<? }
?>