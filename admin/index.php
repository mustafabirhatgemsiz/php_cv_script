<!-- Header -->
<?php require_once 'header.php'; ?>
<!-- End Header -->
<div class="page-content">
	<div class="row">

		<!-- Sidebar -->
		<?php include 'sidebar.php'; ?>
		<!-- End Sidebar -->

		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12 panel-primary">
					<div class="content-box-header panel-heading">
						<div class="panel-title ">Anasayfa Bilgilendirme</div>
					</div>
					<div class="content-box-large box-with-header">
						<div class="row">
							<div class="col-md-3 panel-warning">
								<div class="content-box-header panel-heading">
									<div class="panel-title "><span class="glyphicon glyphicon-star"></span> Yazılım Becerilerim</div>
								</div>
								<div class="content-box-large box-with-header">
									<div class="row">
										<?php 
										$query=$db->prepare("SELECT*FROM tblskills");
										$query->execute();
										$query->fetch(PDO::FETCH_ASSOC);
										$count=$query->rowCount();
										?>
										<center>
											<span style="font-size:50px;"><?php echo $count ?></span><br>
											<p>Adet</p>
										</center>
									</div>	
								</div>
							</div>
							<div class="col-md-3 panel-danger">
								<div class="content-box-header panel-heading">
									<div class="panel-title "><span class="glyphicon glyphicon-flash"></span> Programlama Becerilerim</div>
								</div>
								<div class="content-box-large box-with-header">
									<div class="row">
										<?php 
										$query=$db->prepare("SELECT*FROM tblprograms");
										$query->execute();
										$query->fetch(PDO::FETCH_ASSOC);
										$count=$query->rowCount();
										?>
										<center>
											<span style="font-size:50px;"><?php echo $count ?></span><br>
											<p>Adet</p>
										</center>
									</div>	
								</div>
							</div>
							<div class="col-md-3 panel-info">
								<div class="content-box-header panel-heading">
									<div class="panel-title "><span class="glyphicon glyphicon-certificate"></span> Sertifikalarım</div>
								</div>
								<div class="content-box-large box-with-header">
									<div class="row">
										<?php 
										$query=$db->prepare("SELECT*FROM tblcertificates");
										$query->execute();
										$query->fetch(PDO::FETCH_ASSOC);
										$count=$query->rowCount();
										?>
										<center>
											<span style="font-size:50px;"><?php echo $count ?></span><br>
											<p>Adet</p>
										</center>
									</div>	
								</div>
							</div>
							<div class="col-md-3 panel-success">
								<div class="content-box-header panel-heading">
									<div class="panel-title "><span class="glyphicon glyphicon-pencil"></span> Okullarım</div>
								</div>
								<div class="content-box-large box-with-header">
									<div class="row">
										<?php 
										$query=$db->prepare("SELECT*FROM tblschools");
										$query->execute();
										$query->fetch(PDO::FETCH_ASSOC);
										$count=$query->rowCount();
										?>
										<center>
											<span style="font-size:50px;"><?php echo $count ?></span><br>
											<p>Adet</p>
										</center>
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