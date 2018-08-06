<?php



$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$get = mysql_fetch_array($query);
?>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30 col-md-8">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Form Register Reseller</h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
                            
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Nama Reseller" name="nama" id="nama" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Bonus Saldo" id="saldo" name="saldo" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" onclick="kirim();" name="proces" >SUBMIT</button>
                        
                        </div>
<script>
function kirim()
{
post();
	var nama = $('#nama').val();
	var username = $('#username').val();
	var password = $('#password').val();
	var saldo = $('#saldo').val();
	$.ajax({
		url	: 'proses/register().php',
		data	: 'nama='+nama+'&username='+username+'&password='+password+'&saldo='+saldo,
		type	: 'POST',
		dataType: 'html',
		success	: function(result){
hasil();
	$("#result").html(result);
	}
	});
}
</script>