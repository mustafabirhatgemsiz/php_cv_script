<!-- Header -->
<?php include  'header.php'; 


?>
<!-- End Header -->
<div class="page-content">
	<div class="row">

		<!-- Sidebar -->
		<?php include  'sidebar.php'; ?>
		<!-- End Sidebar -->

		<div class="col-md-10">

			<div class="row">
				<!-- Alert -->


								<!-- End Alert -->
								<div class="col-md-12 panel-primary">
									<div class="content-box-header panel-heading">
										<div class="panel-title ">Sertifika Ekle</div>
									</div>
									<div class="content-box-large box-with-header">
										<div class="row">
											<form action="operation.php" method="POST" class="form-horizontal" role="form">

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Sertifika Adı</label>
													<div class="col-sm-9">
														<input type="text" name="certificate_name" class="form-control" placeholder="Lütfen sertifika adı giriniz.">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Sertifika Link</label>
													<div class="col-sm-9">
														<input type="text" name="certificate_link" class="form-control" placeholder="Lütfen sertifika link giriniz.">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Sertifika Açıklama</label>
													<div class="col-sm-9">
														<input type="text" name="certificate_desc" class="form-control" placeholder="Lütfen sertifika açıklama giriniz.">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Sertifika Tarihi</label>
													<div class="col-sm-9">
														<input type="text" name="certificate_date" class="form-control" placeholder="Lütfen sertifika tarihi giriniz.">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Sertifika Şirket Adı</label>
													<div class="col-sm-9">
														<input type="text" name="certificate_company" class="form-control" placeholder="Lütfen sertifika şirket adı giriniz.">
													</div>
												</div>

												<hr>
												<div class="col-md-11">
													<button class="btn btn-success pull-right" name="add-certificate">Kaydet</button>
												</div>		 	
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Footer -->
				<?php include  'footer.php'; ?>
  <!-- End Footer -->