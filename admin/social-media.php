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
				if (isset($_GET['sm-update'])){

					if ($_GET["sm-update"]=="error") { ?>

						<div class="col-md-12">
							<div class="alert alert-warning">
								<span class="glyphicon glyphicon-warning-sign"></span> Boş alan bırakmayınız!</div>
							</div>	

						<?php }elseif ($_GET["sm-update"]=="yes") { ?>

							<div class="col-md-12">
								<div class="alert alert-success">
									<span class="glyphicon glyphicon-ok-sign"></span> Güncelleme işlemi başarılı.</div>
								</div>	


							<?php }elseif ($_GET["sm-update"]=="no") { ?>

								<div class="col-md-12">
									<div class="alert alert-danger">
										<span class="glyphicon glyphicon-remove-sign"></span> Güncelleme işlemi başarısız.</div>
									</div>	

								<?php }  }?>

								<?php 
								$id=1;
								$query=$db->prepare("SELECT * FROM tblsocialmedia");
								$query->execute();
								$getquery=$query->fetch(PDO::FETCH_ASSOC);
								?>
								<!-- End Alert -->
								<div class="col-md-12 panel-primary">
									<div class="content-box-header panel-heading">
										<div class="panel-title ">Sosyal Medya Ayarlarır</div>
									</div>
									<div class="content-box-large box-with-header">
										<div class="row">
											<form action="operation.php?sm_id=<?php echo $getquery['sm_id']; ?>" method="POST" class="form-horizontal" role="form">

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>
													<div class="col-sm-9">
														<input type="text" name="sm_facebook" class="form-control" value="<?php echo $getquery['sm_facebook']?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Instagram</label>
													<div class="col-sm-9">
														<input type="text" name="sm_instagram" class="form-control" value="<?php echo $getquery['sm_instagram']?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Twitter</label>
													<div class="col-sm-9">
														<input type="text" name="sm_twitter" class="form-control" value="<?php echo $getquery['sm_twitter']?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Linkedin</label>
													<div class="col-sm-9">
														<input type="text" name="sm_linkedin" class="form-control" value="<?php echo $getquery['sm_linkedin']?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">YouTube</label>
													<div class="col-sm-9">
														<input type="text" name="sm_youtube" class="form-control" value="<?php echo $getquery['sm_youtube']?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">GitHub</label>
													<div class="col-sm-9">
														<input type="text" name="sm_github" class="form-control" value="<?php echo $getquery['sm_github']?>">
													</div>
												</div>
												<hr>
												<div class="col-md-11">
													<button class="btn btn-success pull-right" name="social-media">Güncelle</button>
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