<!-- Header -->
<?php include  'header.php'; 


?>
<!-- End Header -->
<div class="page-content">
	<div class="row">

		<!-- Sidebar -->
		<?php include  'sidebar.php'; ?>
		<!-- End Sidebar -->
			<?php 
			$school_id= $_GET['school_id'];
			$query= $db->prepare("SELECT * FROM tblschools WHERE school_id=?");
			$query->execute(array($school_id));
			$getquery=$query->fetch(PDO::FETCH_ASSOC);
			 ?>
		<div class="col-md-10">

			<div class="row">
				<div class="col-md-12 panel-primary">
					<div class="content-box-header panel-heading">
						<div class="panel-title ">Okul Düzenle</div>
					</div>
					<div class="content-box-large box-with-header">
						<div class="row">
							<form action="operation.php?school_id=<?php echo $getquery['school_id'];?>" method="POST" class="form-horizontal" role="form">

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Okul Adı</label>
									<div class="col-sm-9">
										<input type="text" name="school_name" class="form-control" value="<?php echo $getquery['school_name'] ?>">
									</div>
								</div>

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Okul Açıklaması</label>
									<div class="col-sm-9">
										<textarea name="school_desc" class="form-control" cols="30" rows="5" ><?php echo $getquery['school_desc']; ?></textarea>
									</div>
								</div>


								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Okul Başlangıç Tarihi</label>
									<div class="col-sm-9">
										<input type="text" name="school_date" class="form-control" value="<?php echo $getquery['school_date'] ?>">
									</div>
								</div>


								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Okul Durumu</label>
									<div class="col-sm-9">
										<select class="form-control" name="school_continue">
											<option value="1" <?php echo $getquery['school_continue']==1 ? "selected" : null; ?> >Hala devam ediyor.</option>
											<option value="0" <?php echo $getquery['school_continue']==0 ? "selected" : null; ?> >Bitirdi.</option>
										</select>
									</div>
								</div>

								<hr>
								<div class="col-md-11">
									<button class="btn btn-success pull-right" name="edit-school">Kaydet</button>
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