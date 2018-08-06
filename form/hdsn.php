	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="vendors/styles/style.css">	<!-- switchery css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/switchery/dist/switchery.css">
	<!-- bootstrap-tagsinput css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css">
<?php



$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$get = mysql_fetch_array($query);
$nama = $get['nama'];
$tampil = mysql_query("SELECT * FROM member WHERE reseller = '$nama'");
?>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30 col-md-8">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Form Ganti HDSN</h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="custom-select2 form-control" name="hdsnlama" id="hdsnlama"  required>
                                        <option value="" selected>-- Please select HDSN lama--</option> 
<?php
while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[username] >$w[username]</option>";        
}
?>
                                    </select>
                                </div>
                                </div> <br>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="HDSN Baru" id="hdsnbaru" name="hdsnbaru" required>
                                    </div>
                                </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" name="pilihan" id="pilihan">
                                        <option value="">-- Please select --</option>
                                        <option value="1">Hapus HDSN</option>
                                        <option value="2">Edit HDSN</option>
                                    </select>
                                </div>
                                </div><br>
                                <button class="btn btn-primary waves-effect" type="submit" onclick="kirim();" name="proces" >SUBMIT</button>
                        </div>
<script>
function kirim()
{
post();
	var hdsnlama= $('#hdsnlama').val();
	var hdsnbaru= $('#hdsnbaru').val();
	var pilihan = $('#pilihan').val();
	$.ajax({
		url	: 'proses/hdsn().php',
		data	: 'hdsnlama='+hdsnlama+'&hdsnbaru='+hdsnbaru+'&pilihan='+pilihan,
		type	: 'POST',
		dataType: 'html',
		success	: function(result){
hasil();
	$("#result").html(result);
	}
	});
}
</script>