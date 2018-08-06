<?php


?>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30 col-md-8">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Form Register Cheat</h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
                            
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Nama Pembeli" name="name" id="name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="HDSN" id="hdsn" name="hdsn" required>
                                    </div>
                                </div>
                                    <div class="form-group ">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Password" id="password" name="password" required>
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Email Pembeli" id="email" name="email" required>
                                    </div>
                                </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="custom-select2 form-control" name="durasi" id="durasi">
                                        <option value="">-- Please select Durasi --</option>
                                        <option value="3">3 hari</option>
                                        <option value="7">7 hari</option>
                                        <option value="14">14 hari</option>
                                        <option value="30">30 hari</option>
                                    </select>
                                </div>
                                </div><br>
                                <button class="btn btn-primary waves-effect" type="submit" onclick="kirim();" name="proces" >SUBMIT</button>
                            
                            </div>
<script>
function kirim()
{
post();
	var name = $('#name').val();
	var hdsn = $('#hdsn').val();
        var password = $('#password').val();
        var email = $('#email').val();
	var durasi = $('#durasi').val();
	$.ajax({
		url	: 'proses/ordercheat().php',
		data	: 'name='+name+'&hdsn='+hdsn+'&password='+password+'&email='+email+'&durasi='+durasi,
		type	: 'POST',
		dataType: 'html',
		success	: function(result){
hasil();
	$("#result").html(result);
	}
	});
}
</script>