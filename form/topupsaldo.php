<?php



$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$get = mysql_fetch_array($query);
?>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30 col-md-8">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Form Topup Saldo Reseller</h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
                            
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Jumlah saldo" id="saldo" name="saldo" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" onclick="kirim();" name="proces" >SUBMIT</button>
                            
                        </div>
<script>
function kirim()
{
post();
	var username = $('#username').val();
	var saldo = $('#saldo').val();
	$.ajax({
		url	: 'proses/topupsaldo().php',
		data	: 'username='+username+'&saldo='+saldo,
		type	: 'POST',
		dataType: 'html',
		success	: function(result){
hasil();
	$("#result").html(result);
	}
	});
}
</script>