<!-- Header -->
<?php require_once 'header.php'; ?>
<?php 
$admin_id=1;
$query=$db->prepare("SELECT * FROM tbladmin WHERE admin_id=?");
$query->execute(array($admin_id));
$getquery=$query->fetch(PDO::FETCH_ASSOC);

?>
<!-- End Header -->
<div class="page-content">
	<div class="row">

		<!-- Sidebar -->
		<?php include 'sidebar.php'; ?>
		<!-- End Sidebar -->
		<!-- Alert -->
		<?php 
		

		if (@$_GET["admin-update"]=="error") { ?>

			<div class="col-md-10">
				<div class="alert alert-warning">
					<span class="glyphicon glyphicon-warning-sign"></span> Boş alan bırakmayınız!</div>
				</div>	

			<?php }elseif (@$_GET["admin-update"]=="success") { ?>

				<div class="col-md-10">
					<div class="alert alert-success">
						<span class="glyphicon glyphicon-ok-sign"></span> Güncelleme işlemi başarılı.</div>
					</div>	


				<?php }elseif (@$_GET["admin-update"]=="failed") { ?>

					<div class="col-md-10">
						<div class="alert alert-danger">
							<span class="glyphicon glyphicon-remove-sign"></span> Güncelleme işlemi başarısız.</div>
						</div>	

					<?php }elseif (@$_GET['password-change']=="error") { ?>
						<div class="col-md-10">
							<div class="alert alert-warning">
								<span class="glyphicon glyphicon-warning-sign"></span> Boş alan bırakmayınız!</div>
							</div>	
						<?php	}elseif (@$_GET['password-change']=="oldpasswordfailed") { ?>
							<div class="col-md-10">
								<div class="alert alert-info">
									<span class="glyphicon glyphicon-warning-sign"></span> Eski parola hatalı! </div>
								</div>	
							<?php	}elseif (@$_GET['password-change']=="success") { ?>
								<div class="col-md-10">
									<div class="alert alert-success">
										<span class="glyphicon glyphicon-ok-sign"></span> Güncelleme işlemi başarılı.</div>
									</div>	
								<?php	}elseif (@$_GET['password-change']=="failed") { ?>
									<div class="col-md-10">
										<div class="alert alert-danger">
											<span class="glyphicon glyphicon-remove-sign"></span> Güncelleme işlemi başarısız.</div>
										</div>	
									<?php	} ?>




									<!-- End Alert -->
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-12 panel-primary">
												<div class="content-box-header panel-heading">
													<div class="panel-title ">Anasayfa Bilgilendirme</div>
												</div>
												<div class="content-box-large box-with-header">
													<div class="row">
														<div class="col-md-12 panel-primary">
															<div class="content-box-header panel-heading">
																<div class="panel-title "><span class="glyphicon glyphicon-user"></span> Kullanıcı Adı Değiştir</div>
															</div>
															<div class="content-box-large box-with-header">
																<div class="row">
																	<form action="operation.php?admin_id=<?php echo $getquery['admin_id'];?>" method="POST" class="form-horizontal" role="form">

																		<div class="form-group">
																			<label for="inputEmail3" class="col-sm-2 control-label">Kullanıcı Adı</label>
																			<div class="col-sm-9">
																				<input type="text" name="admin_uname" class="form-control" value="<?php echo $getquery['admin_uname']?>">
																			</div>
																		</div>
																		<hr>
																		<div class="col-md-11">
																			<button class="btn btn-success pull-right" name="update-uname">Güncelle</button>
																		</div>		 	
																	</form>
																</div>
															</div>
														</div>

														<div class="col-md-12 panel-primary">
															<div class="content-box-header panel-heading">
																<div class="panel-title "><span class="glyphicon glyphicon-lock"></span> Parola Değiştir</div>
															</div>
															<div class="content-box-large box-with-header">
																<div class="row">
																	<form action="operation.php?admin_id=<?php echo $getquery['admin_id'];?>" method="POST" class="form-horizontal" role="form">

																		<div class="form-group">
																			<label for="inputEmail3" class="col-sm-2 control-label">Eksi Parola</label>
																			<div class="col-sm-9">
																				<input type="password" name="old_password" class="form-control" required="">
																			</div>
																		</div>

																		<div class="form-group">
																			<label for="inputEmail3" class="col-sm-2 control-label">Yeni Parola</label>
																			<div class="col-sm-9">
																				<input type="password" name="new_password" class="form-control" required="" >
																			</div>
																		</div>
																		<hr>
																		<div class="col-md-11">
																			<button class="btn btn-success pull-right" name="password-change">Güncelle</button>
																		</div>		 	
																	</form>
																</div>
															</div>
														</div>
													</div>	
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

							<!-- Footer -->
							<?php include 'footer.php'; ?>
  <!-- End Footer -->