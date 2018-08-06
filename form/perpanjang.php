<?php


$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$get = mysql_fetch_array($query);
$nama = $get['nama'];
$tampil = mysql_query("SELECT * FROM member WHERE reseller = '$nama'");
?>

				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30 col-md-8">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Form Perpanjang Cheat</h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
                            
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" name="hdsn" id="hdsn">
                                        <option value="" selected>-- Please select HDSN--</option>
<?php
while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[username] >$w[username]</option>";        
}
?>
                                    </select>
                                </div>
                                </div>
                                <br>

                            <span class="field">
                                 Paket :
                            <div class="row clearfix">
                                <div class="col-sm-12">
     
                            <select name="durasi" id="durasi" class="form-control show-tick">
<option value='3'>3 Hari</option>
<option value='7'>7 Hari</option>
<option value='14'>14 Hari</option>
<option value='30'>30 Hari</option>
</select>
</div>
</div>
</span><br>
									<div class="form-group">
<button class="btn btn-primary waves-effect" id="btnLogin" onclick="proses();" ><i class="fa fa-mail-forward" name="proces" type="submit" ></i> Submit</button> 
                                        </div>

</div>
<script >
function proses()
{
post();
var hdsn = $('#hdsn').val();
var durasi = $('#durasi').val();
	$.ajax({
		url	: 'proses/perpanjang().php',
		data: {hdsn: hdsn,durasi: durasi},
		type	: 'POST',
		dataType: 'html',
		success	: function(result){
hasil();
	$("#result").html(result);
	}
	});
}
</script>