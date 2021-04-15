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
				if (isset($_GET['add-certificate'])) {

					if ($_GET["add-certificate"]=="error") { ?>

						<div class="col-md-12">
							<div class="alert alert-warning">
								<span class="glyphicon glyphicon-warning-sign"></span> Boş alan bırakmayınız!</div>
							</div>	

						<?php } elseif ($_GET["add-certificate"]=="yes") { ?>

							<div class="col-md-12">
								<div class="alert alert-success">
									<span class="glyphicon glyphicon-ok-sign"></span> Güncelleme işlemi başarılı.</div>
								</div>	


							<?php } elseif ($_GET["add-certificate"]=="no") { ?>

								<div class="col-md-12">
									<div class="alert alert-danger">
										<span class="glyphicon glyphicon-remove-sign"></span> Güncelleme işlemi başarısız.</div>
									</div>	
								<?php } }?>

								

								

															<?php 

															$id=1;

															$quary = $db->prepare("SELECT * FROM tblcertificates");
															$quary->execute();
															$getquary=$quary->fetch(PDO::FETCH_ASSOC);


															?>
															<div class="col-md-12 panel-primary">
																<div class="content-box-header panel-heading">
																	<div class="panel-title" >Sertifikalarım</div>
																	<div class="panel-options">
																		<a href="add-certificate.php" data-rel="collapse"><i class="glyphicon glyphicon-plus" style="color: white;" title="Yeni Sertifika Ekle"></i></a>
																	</div>
																</div>
																<div class="content-box-large box-with-header">
																	<div class="row">
																		<table class="table">
																			<thead>
																				<tr>
																					<th>Id</th>
																					<th>Sertifika Adı</th>
																					<th>Sertifika Link</th>
																					<th width="200px">Sertifika Açıklama</th>
																					<th>Sertifika Tarihi</th>
																					<th>Sertifika Şirket Adı</th>
																					<th>İşlemler</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php 
																				$quary=$db->prepare("SELECT * FROM tblcertificates ORDER BY certificate_id DESC");
																				$quary->execute();
																				$getquary=$quary->fetchALL(PDO::FETCH_ASSOC);
																				$count=$quary->rowCount();

																				foreach ($getquary as $row) { ?>
																					<tr>
																						<td><?php echo $row['certificate_id']; ?></td>
																						<td><?php echo $row['certificate_name']; ?></td>
																						<td><?php echo $row['certificate_link']; ?></td>
																						<td><?php echo $row['certificate_desc'];  ?></td>
																						<td><?php echo $row['certificate_date']; ?></td>
																						<td><?php echo $row['certificate_company']; ?></td>
																						

																						<td>
																							<a href="edit-certificate.php?certificate_id=<?php echo $row['certificate_id'] ?>"><button class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit"></span> Düzenle</button></a>
																							<br><br>
																							<a href="operation.php?deletecertificate_id=<?php echo$row['certificate_id'] ?>"><button class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span>Sil</button></a>
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