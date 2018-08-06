<?php
include "enter.php";
include "cek.php";
$namares = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$bonus = $_POST['saldo'];
$uplink = $fet['nama'];
$email = $_POST['email'];
$fee = "60000";

$query = mysql_query("SELECT * FROM user WHERE username = '$user'");
if($fet['saldo'] < $fee) {
echo "<div class='alert alert-warning'>Balance Insufficient</div>";
} else {
if(mysql_num_rows($query) <> 0) {
echo "<div class='alert alert-warning'>Username Already Registered</div>";
} else {
if ($fet['level']!=="Admin" && $fet['level']!=="Developers") {
echo "<div class='alert alert-warning'>No Access</div>";
} else {
$save = mysql_query("INSERT INTO user (`username`, `password`, `nama`, `level`, `saldo`, `uplink`, `status`) VALUES ('$user', '$pass', '$namares', 'Reseller', '$bonus', '$uplink', 'aktif')");
$save = mysql_query("UPDATE user SET saldo =saldo-60000 WHERE username = '$username'");
if($save) { ?>
<div class="alert alert-success"><b>Pendaftaran User Baru Berhasil!</b>
<br>
Jenis : Register Reseller
<br>
Nama : <?php echo $namares; ?>
<br>
Akun Pengguna : <?php echo $user; ?>/<?php echo $pass; ?>
<br>
Status : Succes
</div>
<? } else { ?>
ERROR ... Failed
<?php }
}
}
}
?>