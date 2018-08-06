<?php
include "enter.php";
$hdsn = $_POST['hdsnlama'];
$hdsn2 = $_POST['hdsnbaru'];
$tipe = $_POST['pilihan'];
$query = mysql_query("SELECT * FROM member WHERE username = '$hdsn'");
$mario = mysql_fetch_array($query);
if($hdsn2 == 2143) {
echo "<b>HDSN BLOCKED!</b>";
}else{
if(mysql_num_rows($query) <> 1) {
echo "ERROR : User belum terdaftar";
} else {
if($tipe == 1) {
$tipe2 ="Hapus Data";
$save = mysql_query("DELETE FROM member WHERE username = '$hdsn'");
} else if($tipe == 2) {
$tipe2 ="Ganti Data";
$save = mysql_query("UPDATE member SET username = '$hdsn2' WHERE username = '$hdsn'");
}
if($save) { ?>
<table class="table table-bordered m-0">
<tr>															<td>
<center>Tipe :  <?php echo $tipe2; ?></center></td>
</tr>
<tr><td><center>HDSN Lama : <?php echo $hdsn; ?></center></td>
</tr>
<tr><td><center>HDSN Baru : <?php echo $hdsn2; ?></center></td>
</tr>
</div>
<? } else { ?>
ERROR ... Failed
<?php }
}
}
?>