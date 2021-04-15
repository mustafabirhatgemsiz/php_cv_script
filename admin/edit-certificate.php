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
				<?php 

				if (isset($_GET['update-skill'])){

					if ($_GET["update-skill"]=="error") { ?>

						<div class="col-md-12">
							<div class="alert alert-warning">
								<span class="glyphicon glyphicon-warning-sign"></span> Boş alan bırakmayınız!</div>
							</div>	

						<?php }elseif ($_GET["update-skill"]=="yes") { ?>

							<div class="col-md-12">
								<div class="alert alert-success">
									<span class="glyphicon glyphicon-ok-sign"></span> Güncelleme işlemi başarılı.</div>
								</div>	


							<?php }elseif ($_GET["update-skill"]=="no") { ?>

								<div class="col-md-12">
									<div class="alert alert-danger">
										<span class="glyphicon glyphicon-remove-sign"></span> Güncelleme işlemi başarısız.</div>
									</div>	

								<?php }  }?>


								<!-- End Alert -->


								<?php 
								$certificate_id = $_GET['certificate_id'];
								$query=$db->prepare("SELECT * FROM tblcertificates WHERE certificate_id=?");
								$query->execute(array($certificate_id));
								$getquery=$query->fetch(PDO::FETCH_ASSOC);

								?>
								<div class="col-md-12 panel-primary">
									<div class="content-box-header panel-heading">
										<div class="panel-title ">Beceri Düzenle</div>
									</div>
									<div class="content-box-large box-with-header">
										<div class="row">
											<form action="operation.php?certificate_id=<?php echo $getquery['certificate_id'] ?>" method="POST" class="form-horizontal" role="form">

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Sertifika Adı</label>
													<div class="col-sm-9">
														<input type="text" name="certificate_name" class="form-control" value="<?php echo $getquery['certificate_name'] ?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Sertifika Link</label>
													<div class="col-sm-9">
														<input type="text" name="certificate_link" class="form-control" value="<?php echo $getquery['certificate_link'] ?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Sertifika Açıklaması</label>
													<div class="col-sm-9">
														<input type="text" name="certificate_desc" class="form-control" value="<?php echo $getquery['certificate_desc'] ?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Sertifika Tarihi</label>
													<div class="col-sm-9">
														<input type="text" name="certificate_date" class="form-control" value="<?php echo $getquery['certificate_date'] ?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Sertifika Şirket Adı</label>
													<div class="col-sm-9">
														<input type="text" name="certificate_company" class="form-control" value="<?php echo $getquery['certificate_company'] ?>">
													</div>
												</div>





												<hr>
												<div class="col-md-11">
													<button class="btn btn-success pull-right" name="edit-certificate">Kaydet</button>
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