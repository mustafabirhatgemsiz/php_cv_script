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
				<div class="col-md-12 panel-primary">
					<div class="content-box-header panel-heading">
						<div class="panel-title ">Okul Ekle</div>
					</div>
					<div class="content-box-large box-with-header">
						<div class="row">
							<form action="operation.php" method="POST" class="form-horizontal" role="form">

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Okul Adı</label>
									<div class="col-sm-9">
										<input type="text" name="school_name" class="form-control" placeholder="Lütfen okul adı giriniz.">
									</div>
								</div>

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Okul Açıklaması</label>
									<div class="col-sm-9">
										<textarea name="school_desc" class="form-control" cols="30" rows="5" placeholder="Lütfen okul açıklaması giriniz."></textarea>
									</div>
								</div>


								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Okul Başlangıç Tarihi</label>
									<div class="col-sm-9">
										<input type="text" name="school_date" class="form-control" placeholder="Lütfen okul başlangıç tarihi giriniz.">
									</div>
								</div>


								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Okul Durumu</label>
									<div class="col-sm-9">
										<select class="form-control" name="school_continue">
											<option value="1" >Hala devam ediyor.</option>
											<option value=" ">Bitirdi.</option>
										</select>
									</div>
								</div>

								<hr>
								<div class="col-md-11">
									<button class="btn btn-success pull-right" name="add-school">Kaydet</button>
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