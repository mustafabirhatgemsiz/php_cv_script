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
				if (isset($_GET['add-program'])) {

					if ($_GET["add-program"]=="error") { ?>

						<div class="col-md-12">
							<div class="alert alert-warning">
								<span class="glyphicon glyphicon-warning-sign"></span> Boş alan bırakmayınız!</div>
							</div>	

						<?php } elseif ($_GET["add-program"]=="yes") { ?>

							<div class="col-md-12">
								<div class="alert alert-success">
									<span class="glyphicon glyphicon-ok-sign"></span> Güncelleme işlemi başarılı.</div>
								</div>	


							<?php } elseif ($_GET["add-program"]=="no") { ?>

								<div class="col-md-12">
									<div class="alert alert-danger">
										<span class="glyphicon glyphicon-remove-sign"></span> Güncelleme işlemi başarısız.</div>
									</div>	
								<?php } }?>

								<?php 

								if (isset($_GET['update-program'])) {

									if ($_GET['update-program']=="error") {?>

										<div class="col-md-12">
											<div class="alert alert-warning">
												<span class="glyphicon glyphicon-warning-sign"></span> Boş alan bırakmayınız!</div>
											</div>

										<?php } elseif ($_GET['update-program']=="yes") { ?>
											<div class="col-md-12">
												<div class="alert alert-success">
													<span class="glyphicon glyphicon-ok-sign"></span> Güncelleme işlemi başarılı.</div>
												</div>	
											<?php } elseif ($_GET['update-program']=="no") { ?>
												<div class="col-md-12">
													<div class="alert alert-danger">
														<span class="glyphicon glyphicon-remove-sign"></span> Güncelleme işlemi başarısız.</div>
													</div>	
												<?php } }?>


										<!----------------------->

										<?php 

								if (isset($_GET['delete-program'])) { 

									if ($_GET['delete-program']=="yes") {?>

										<div class="col-md-12">
											<div class="alert alert-success">
												<span class="glyphicon glyphicon-ok-sign"></span> Silme işlemi başarılı.</div>
											</div>

										<?php } elseif ($_GET['delete-program']=="no") { ?>
											<div class="col-md-12">
												<div class="alert alert-danger">
													<span class="glyphicon glyphicon-remove-sign"></span> Silme işlemi başarısız.</div>
												</div>	
												<?php } }?>


												<!-- End Alert -->

												<?php 

												$id=1;

												$quary = $db->prepare("SELECT * FROM tblprograms");
												$quary->execute();
												$getquary=$quary->fetch(PDO::FETCH_ASSOC);


												?>
												<div class="col-md-12 panel-primary">
													<div class="content-box-header panel-heading">
														<div class="panel-title" >Program Becerilerim</div>
														<div class="panel-options">
															<a href="add-program.php" data-rel="collapse"><i class="glyphicon glyphicon-plus" style="color: white;" title="Yeni Beceri Ekle"></i></a>
														</div>
													</div>
													<div class="content-box-large box-with-header">
														<div class="row">
															<table class="table">
																<thead>
																	<tr>
																		<th>Id</th>
																		<th>Beceri Adı</th>
																		<th>Beceri Oranı</th>
																		<th width="200px">İşlemler</th>
																	</tr>
																</thead>
																<tbody>
																	<?php 
																	$quary=$db->prepare("SELECT * FROM tblprograms ORDER BY program_id DESC");
																	$quary->execute();
																	$getquary=$quary->fetchALL(PDO::FETCH_ASSOC);
																	$count=$quary->rowCount();

																	foreach ($getquary as $row) { ?>
																		<tr>
																			<td><?php echo $row['program_id']; ?></td>
																			<td><?php echo $row['program_name']; ?></td>
																			<td><?php echo $row['program_rate']; ?></td>
																			<td>
																				<a href="edit-program.php?program_id=<?php echo $row['program_id'] ?>"><button class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit"></span> Düzenle</button></a>
																				<a href="operation.php?deleteprogram_id=<?php echo$row['program_id'] ?>"><button class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span>Sil</button></a>
																			</td>
																		</tr>

																		<?php
																	}
																	?>


																</tbody>
															</table>
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