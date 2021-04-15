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
				if (isset($_GET['setting-update'])){

					if ($_GET["setting-update"]=="error") { ?>

						<div class="col-md-12">
							<div class="alert alert-warning">
								<span class="glyphicon glyphicon-warning-sign"></span> Boş alan bırakmayınız!</div>
							</div>	

						<?php }elseif ($_GET["setting-update"]=="yes") { ?>

							<div class="col-md-12">
								<div class="alert alert-success">
									<span class="glyphicon glyphicon-ok-sign"></span> Güncelleme işlemi başarılı.</div>
								</div>	


							<?php }elseif ($_GET["setting-update"]=="no") { ?>

								<div class="col-md-12">
									<div class="alert alert-danger">
										<span class="glyphicon glyphicon-remove-sign"></span> Güncelleme işlemi başarısız.</div>
									</div>	

								<?php }  }?>


								<!-- End Alert -->
								<div class="col-md-12 panel-primary">
									<div class="content-box-header panel-heading">
										<div class="panel-title ">Genel Ayarlar</div>
									</div>
									<div class="content-box-large box-with-header">
										<div class="row">
											<form action="operation.php?site_id=<?php echo $getquery['site_id']; ?>" method="POST" class="form-horizontal" role="form">

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Site Title</label>
													<div class="col-sm-9">
														<input type="text" name="site_title" class="form-control" value="<?php echo $getquery['site_title']?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Site Url</label>
													<div class="col-sm-9">
														<input type="text" name="site_url" class="form-control" value="<?php echo $getquery['site_url']?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Site Description</label>
													<div class="col-sm-9">
														<input type="text" name="site_desc" class="form-control" value="<?php echo $getquery['site_desc']?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Site Keyword</label>
													<div class="col-sm-9">
														<input type="text" name="site_keyw" class="form-control" value="<?php echo $getquery['site_keyw']?>">
													</div>
												</div>

												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Site Footer</label>
													<div class="col-sm-9">
														<input type="text" name="site_footer" class="form-control" value="<?php echo $getquery['site_footer']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Site Renk</label>
													<div class="col-sm-9">
														<select name="site_color" class="form-control">
															<option value="red">Red</option>
															<option value="pink">Pink</option>
															<option value="purple">Purple</option>
															<option value="blue">Blue</option>
															<option value="indigo">Indigo</option>
															<option value="cyan">Cyan</option>
															<option value="aqua">Aqua</option>
															<option value="teal">Teal</option>
															<option value="green">Green</option>
															<option value="orange">Orange</option>
															<option value="yellow">Yellow</option>
															<option value="gray">Gray</option>
															<option value="brown">Barown</option>
															<option value="black">black</option>
															<option value="amber">Amber</option>
															<option value="deep-orange">Deep-Orange</option>
															
														</select>
													</div>
												</div>
												<hr>
												<div class="col-md-11">
													<button class="btn btn-success pull-right" name="general-settings">Güncelle</button>
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