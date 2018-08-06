<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<div class="pre-loader"></div>
	<div class="header clearfix">
		<div class="header-right">
			<div class="">
				<a href="index.php">
				</a>
			</div>
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
				<img src="" alt="">
				VIP BloodLust
			</a>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				    <li>
				    <a href="index.php" class="dropdown-toggle no-arrow">
	
							<span class="fa fa-home"></span><span class="mtext">Home</span>
						</a>
					</li>
					<li>
				    <a href="#" class="dropdown-toggle no-arrow" data-toggle="modal" data-target="#harga">
	
							<span class="fa fa-shopping-cart"></span><span class="mtext">Daftar Harga</span>
						</a>
					</li>
					<li>
				    <a href="#" class="dropdown-toggle no-arrow" data-toggle="modal" data-target="#listadmin">
				        
							<span class="fa fa-user-plus"></span><span class="mtext">List Admin</span>
						</a>
					</li>
					<li>
				    <a href="#" class="dropdown-toggle no-arrow" data-toggle="modal" data-target="#ketentuan">
				        
							<span class="fa fa-info"></span><span class="mtext">S&K</span>
						</a>
					</li>	
					<li>
				    <a href="#" class="dropdown-toggle no-arrow" data-toggle="modal" data-target="#login-modal">
				        
							<span class="fa fa-user"></span><span class="mtext">Login Member</span>
						</a>
					</li>	
				</ul>
			</div>
		</div>
	</div>

	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			
			<div class="row clearfix">
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20 col-md-6">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5 ">
			<img src="vendors/images/login-img.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">Login Reseller</h2>

			<form action="index2.php" method="POST">
<?php
	if (isset($_SERVER['HTTP_REFERER'])){
	if (isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	$isi = $_GET['isi'];
	if ($pesan == 1){
	echo "
	<div class='alert alert-danger'>
	<a class='close' data-dismiss='alert'>×</a>
	<strong>Gagal!</strong> $isi.
	</div><br />
	";
	}
	if ($pesan == 2){
	echo "
	<div class='alert alert-success'>
	<a class='close' data-dismiss='alert'>×</a>
	<strong>Sukses!</strong> $isi.
	</div><br />
	";
	}
  	}
	}
	?>
				<div class="input-group custom input-group-lg">
					<input type="text" name="username" class="form-control" placeholder="Username">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" name = "password"class="form-control" placeholder="Password">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
						<!--	<a class="btn btn-outline-primary btn-lg btn-block" href="index.php">Sign In</a> 
						-->
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
				<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
					<div class="login-box bg-white box-shadow pd-30 border-radius-5">
						<h4 class="mb-30">Welcome</h4>
						
Kami merupakan penyedia layanan program cheat VIP berbayar untuk game online Point Blank. Semua layanan yang kami sediakan memiliki trial atau jangka waktu tertentu sesuai harga dan kesepakatan, selain itu semua layanan yang kami sediakan juga di proteksi dengan serial hardisk (HDSN) dari setiap perangkat konsumen, jadi program cheat hanya akan berjalan di komputer atau leptop yang serial HDSN-nya sudah terdaftar di server database kami.
<br><br><br>


					</div>
				</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<!-- modals harga -->
<div class="modal fade bs-example-modal-lg" id="harga" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Daftar Harga</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>DURASI</th>
                                        <th>HARGA DAFTAR</th>
                                        <th>HARGA PERPANJANG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>3 HARI</td>
                                        <td>Rp 25.000,-</td>
                                        <td>Rp 25.000,-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>7 HARI</td>
                                        <td>Rp 50.000,-</td>
                                        <td>Rp 50.000,-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>14 HARI</td>
                                        <td>Rp 70.000,-</td>
                                        <td>Rp 70.000,-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>30 HARI</td>
                                        <td>Rp 100.000,-</td>
                                        <td>Rp 100.000,-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
*Harga diatas harga asli bukan harga promo.
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
</div>

	<!-- modals list Admin -->
<div class="modal fade bs-example-modal-lg" id="listadmin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">List Admin</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
                                            
					<div class="contact-directory-list">
						<ul class="row">
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="https://graph.facebook.com/100003530590075/picture?width=200&height=200" alt="">
											</span>
										</div>
										<div class="contact-name">
											<h4>Rizki Jaelani N</h4>
											<p>Web designer</p>
											<div class="work text-success"><i class="ion-android-person"></i> Admin</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">WEB</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Web Design
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="https://graph.facebook.com/100015543370826/picture?width=200&height=200" alt="">
											</span>
										</div>
										<div class="contact-name">
											<h4>Restu Fauzi</h4>
											<p>Web designer</p>
											<div class="work text-success"><i class="ion-android-person"></i> Admin</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">App</span>
											<span class="badge badge-pill">Cheat</span>
											<span class="badge badge-pill">Menu</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Web Design
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
					    </ul>
					  </div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
								</div>
								
</div>	
</div>
</div>	<!-- modals Ketentuan Dan Kebijakan -->
<div class="modal fade bs-example-modal-lg" id="ketentuan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Ketentuan & Kebijakan</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
			<p>Kami selaku pihak VIP BloodLust berhak untuk membuat Ketentuan dan Kebijakan yang harus dipenuhi oleh seluruh pengguna dan member <a href="vipbloodlust.tk">VIP BloodLust</a> (User) sebagai syarat untuk menggunakan layanan atau program dari kami.</p>

			<p>User yang menyetujui Ketentuan dan Kebijakan ini akan dikenakan semua peraturan yang ada di dalamnya, Peraturan tersebut juga berlaku untuk semua layanan atau program aplikasi yang kami sediakan.
				<br>
			</p>

			<p>Ketentuan dan Kebijakan yang dimaksud adalah sebagai berikut:</p>

			<ol>
				<li>Semua informasi dan data pribadi yang anda berikan kepada kami dijaga kerahasiaannya dan pihak kami tidak akan memberikan informasi tersebut kepada pihak lain kecuali kepada mitra usaha kami dalam usaha memberikan jasa layanan kepada anda.</li>
				<li>User diwajibkan menjaga kerahasiaan data-data akun cheat dari orang lain, baik itu berupa username dan password login di web ini, maupun serial HDSN user.</li>
				<li>Untuk menggunakan program, pembaharuan dan jasa layanan yang telah kami sediakan diperlukan pembayaran berjangka dan telah disepakati bersama.</li>
				<li>Anda bertanggung jawab penuh atas kegiatan yang dilakukan saat menggunakan layanan atau program dari kami.</li>
				<li>Kami tidak bertanggung jawab atas penggunaan yang dapat mengakibatkan pemberian sanksi atau pemblokiran ID pemain /Banned oleh pihak developer game.</li>
				<li>Kami tidak bertanggung jawab atas kerusakan ataupun kerugian yang terjadi akibat virus atau sebab lain yang dapat mengganggu kestabilan system pada Komputer anda.</li>
				<li>User tidak boleh memaksa untuk dibuatkan program atau fitur layanan sesuai keinginan sendiri.</li>
				<li>User tidak boleh menggunakan program yang disediakan oleh kami untuk melakukan kegiatan yang bersifat komersial tanpa ijin tertulis dari Admin BloodLust.</li>
				<li>Anda setuju untuk membebaskan Pihak VIP BloodLust serta mitra usaha kami dari tuntutan dan kerugian yang timbul akibat penggunaan program dan jasa layanan yang kami sediakan.</li>
				<li>Fitur layanan yang kami berikan sewaktu-waktu dapat berubah sesuai perkembangan game yang bersangkutan tanpa keharusan kami memberikan fitur layanan yang sama dengan sebelumnya.</li>
				<li>Layanan yang diberikan tidaklah bebas dari kesalahan atau error sepenuhnya. Kesalahan sistem dapat terjadi sewaktu-waktu baik itu karena masalah koneksi internet, listrik, perangkat keras, bencana alam maupun masalah dari program jasa itu sendiri.</li>
				<li>Kami berhak membatasi ataupun memberhentikan layanan sewaktu-waktu tanpa keharusan memberikan pemberitahuan terlebih dahulu (penjelasan permasalahan dapat disampaikan pada saatnya nanti sesuai dengan kebijakan kami) apabila terjadi permasalahan dalam pemberian layanan kepada user.</li>
				<li>Garansi atau pengembalian dana hanya berlaku bila saat proses pemasangan cheat pertama kali, cheat tetap tidak bekerja atau tidak berjalan diperangkat user walaupun sudah dipandu via teamviewer dari Admin ataupun Reseller, jika cheat sudah berjalan berarti sudah dianggap OK, jika sewaktu-waktu anda menuntut meminta pengembalian dana, maaf kami tidak layani.</li>
			</ol>

			<p>Kami berhak merubah peraturan dari Ketentuan dan Kebijakan yang ada untuk meningkatkan kualitas layanan yang diberikan, tanpa harus melakukan pemberitahuan terlebih dulu.</p>

			<p>Ketentuan dan Kebijakan di atas telah disetujui secara tidak langsung baik sadar maupun tidak sadar disaat User menggunakan aplikasi atau program dari VIP BloodLust.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
</div>

<!-- modals login -->
							<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="login-box bg-white box-shadow pd-ltr-20 border-radius-5">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<img src="vendors/images/login-img.png" alt="login" class="login-img">
											<h2 class="text-center mb-30">Login Member</h2>
											<form action="Bolang/loginact.php" method="POST">
												<div class="input-group custom input-group-lg">
													<input type="text" class="form-control" name=username placeholder="HDSN">
													<div class="input-group-append custom">
														<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
													</div>
												</div>
												<div class="input-group custom input-group-lg">
													<input type="password" class="form-control" name="password" placeholder="password">
													<div class="input-group-append custom">
														<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															
																<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
															
										<!--					<a class="btn btn-primary btn-lg btn-block" href="index.php">Sign In</a> -->
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>

</body>
</html>