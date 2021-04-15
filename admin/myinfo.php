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
				if (isset($_GET['info-update'])){

				if ($_GET["info-update"]=="error") { ?>

					<div class="col-md-12">
					<div class="alert alert-warning">
					<span class="glyphicon glyphicon-warning-sign"></span> Boş alan bırakmayınız!</div>
					</div>	

				<?php }elseif ($_GET["info-update"]=="yes") { ?>
					
					<div class="col-md-12">
					<div class="alert alert-success">
					<span class="glyphicon glyphicon-ok-sign"></span> Güncelleme işlemi başarılı.</div>
					</div>	


				<?php }elseif ($_GET["info-update"]=="no") { ?>
					
					<div class="col-md-12">
					<div class="alert alert-danger">
					<span class="glyphicon glyphicon-remove-sign"></span> Güncelleme işlemi başarısız.</div>
					</div>	

			<?php }  }?>
				

				<!-- End Alert -->

				<?php 

				$id=1;

				$query = $db->prepare("SELECT * FROM tblinfo");
				$query->execute();
				$getquery=$query->fetch(PDO::FETCH_ASSOC);


				 ?>
				<div class="col-md-12 panel-primary">
					<div class="content-box-header panel-heading">
						<div class="panel-title ">Bilgilerim</div>
					</div>
					<div class="content-box-large box-with-header">
						<div class="row">
							<form action="operation.php?info_id=<?php echo $id; ?>" method="POST" class="form-horizontal" role="form">


								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Mevcut Fotoğraf</label>
									<div class="col-sm-9">
										<img width="250px" src="<?php echo $getquery['info_image']?>">
									</div>
								</div>

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Fotoğraf Linki</label>
									<div class="col-sm-9">
										<input type="text" name="info_image" class="form-control" value="<?php echo $getquery['info_image']?>">
									</div>
								</div>

								<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Ad Soyad</label>
									<div class="col-sm-9">
										<input type="text" name="info_name" class="form-control" value="<?php echo $getquery['info_name']?>">
									</div>
								</div>

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Meslek</label>
									<div class="col-sm-9">
										<input type="text" name="info_job" class="form-control" value="<?php echo $getquery['info_job']?>">
									</div>
								</div>

								<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">İkamet</label>
									<div class="col-sm-9">
										<input type="text" name="info_residence" class="form-control" value="<?php echo $getquery['info_residence']?>">
									</div>
								</div>

								<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">İkamet Link</label>
									<div class="col-sm-9">
										<input type="text" name="info_residencelink" class="form-control" value="<?php echo $getquery['info_residencelink']?>">
									</div>
								</div>


								<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Mail</label>
									<div class="col-sm-9">
										<input type="text" name="info_mail" class="form-control" value="<?php echo $getquery['info_mail']?>">
									</div>
								</div>

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Telefon</label>
									<div class="col-sm-9">
										<input type="text" name="info_phone" class="form-control" value="<?php echo $getquery['info_phone']?>">
									</div>
								</div>

								<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Whatsapp</label>
									<div class="col-sm-9">
										<input type="text" name="info_whatsapp" class="form-control" value="<?php echo $getquery['info_whatsapp']?>">
									</div>
								</div>

								<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Whatsapp Link</label>
									<div class="col-sm-9">
										<input type="text" name="info_whatsapplink" class="form-control" value="<?php echo $getquery['info_whatsapplink']?>">
									</div>
								</div>







								<hr>
								<div class="col-md-11">
									<button class="btn btn-success pull-right" name="myinfo">Güncelle</button>
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