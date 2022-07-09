<!DOCTYPE html>
<html lang="en">
<?php include "../header.php"; 
include('ceks.php');
include('../../config/koneksi.php'); ?>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../../assets/img/profil3.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									
									<li>
									<a class="dropdown-item" href="../logout.php" onclick="return confirm('Apakah anda yakin ingin Log Out?')">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<?php include "menu.php"?>;
		<!-- Sidebar -->
		
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Edit Masjid & Musala</h4>
                        <?php
                            
                            $id = $_GET['id'];
                             $sql = "SELECT * FROM daftar ORDER BY id=$id";
                            $query = mysqli_query($con, $sql);
                                        $no=1;                                        
                                        while($daftar = mysqli_fetch_array($query)){
                                            $kec= $daftar['kec'];
                                            $kel= $daftar['kel'];
                                            $rtrw= $daftar['rtrw'];
                                            $tipe= $daftar['tipe'];
                                            $nama= $daftar['nama'];
                                            $alamat= $daftar['alamat'];
                                            $luas= $daftar['luas'];
                                            $kapasitas= $daftar['kapasitas'];
                                            $aset= $daftar['aset'];
                                            $lokasi= $daftar['lokasi'];
                                            $pengurus= $daftar['pengurus'];
                                            $kegiatan= $daftar['kegiatan'];
                                            $gambar= $daftar['gambar'];
                                            
                                            
                                            }?>	
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="col-md-6 col-lg-4">
										<form action="pemasjid.php" method="post" enctype="multipart/form-data">
										<input type="hidden" name="id" value="<?php echo $id; ?>">
											<div class="form-group">
												<label for="smallInput">Nama</label>
												<input name="nama" type="text" class="form-control form-control-sm" id="smallInput" value="<?php echo $nama; ?>">
											</div>
											
											<div class="form-group">
												<label for="smallSelect">Tipe</label>
												<select name="tipe" class="form-control form-control-sm" id="smallSelect">
                                                    <option value="<?php echo $tipe; ?>"><?php echo $tipe; ?></option>
                                                    <option value="Masjid">Masjid</option>
													<option value="Musala">Musala</option>	
												</select>
											</div>

											<div class="form-group">
												<label for="smallInput">Kecematan</label>
												<input name="kec" type="text" class="form-control form-control-sm" id="smallInput"  value="<?php echo $kec; ?>">
											</div>
											<div class="form-group">
												<label for="smallInput">Kelurahan</label>
												<input name="kel" type="text" class="form-control form-control-sm" id="smallInput"  value="<?php echo $kel; ?>">
											</div>
											<div class="form-group">
												<label for="smallInput">RT/RW</label>
												<input name="rtrw" type="text" class="form-control form-control-sm" id="smallInput"  value="<?php echo $rtrw; ?>">
											</div>
											<div class="form-group">
												<label for="smallInput">Alamat</label>
												<input name="alamat" type="text" class="form-control form-control-sm" id="smallInput"  value="<?php echo $alamat; ?>">
											</div>
											<div class="form-group">
												<label for="smallInput">Luas</label>
												<input name="luas" type="text" class="form-control form-control-sm" id="smallInput"  value="<?php echo $luas; ?>">
											</div>
											<div class="form-group">
												<label for="smallInput">Kapasitas</label>
												<input name="kapasitas" type="text" class="form-control form-control-sm" id="smallInput"  value="<?php echo $kapasitas; ?>">
											</div>
											<div class="form-group">
												<label for="smallInput">Aset</label>
												<input name="aset" type="text" class="form-control form-control-sm" id="smallInput"  value="<?php echo $aset; ?>">
											</div>
											<div class="form-group">
												<label for="smallInput">Lokasi</label>
												<input name="lokasi" type="text" class="form-control form-control-sm" id="smallInput"  value="<?php echo $lokasi; ?>">
											</div>
											<div class="form-group">
												<label for="smallInput">Pengurus</label>
												<input name="pengurus" type="text" class="form-control form-control-sm" id="smallInput"  value="<?php echo $pengurus; ?>">
											</div>
											
											
											<div class="form-group">
												<label for="smallInput">Kegiatan</label>
												<textarea name="kegiatan" class="form-control form-control-sm" rows='7'><?php echo $kegiatan; ?></textarea>
											</div>
											<div class="form-group">
												<label for="smallInput">Gambar Sebelumnya</label>
                                               	<p><?php echo $gambar; ?>"</p>
												<input type="file" name="gambar" class="form-control form-control-sm" id="smallInput">
                                                <input type="hidden" name="fotolama" value="<?php echo $gambar; ?>">
                                                
												<label for="smallInput">Max: 2 MB</label>
												
											</div>
											<div class="card-action">
												<button class="btn btn-success">Submit</button>
												<a href="dmasjid.php" class="btn btn-danger">Kembali</a>
											</div>
										</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php include "../footer.php"; ?>
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets/js/core/popper.min.js"></script>
	<script src="../../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo2.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>