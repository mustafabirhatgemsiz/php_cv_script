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
					$skills_id = $_GET['skills_id'];
					$query=$db->prepare("SELECT * FROM tblskills WHERE skills_id=?");
					$query->execute(array($skills_id));
					$getquery=$query->fetch(PDO::FETCH_ASSOC);

				 ?>
				<div class="col-md-12 panel-primary">
					<div class="content-box-header panel-heading">
						<div class="panel-title ">Beceri Düzenle</div>
					</div>
					<div class="content-box-large box-with-header">
						<div class="row">
							<form action="operation.php?skills_id=<?php echo $getquery['skills_id'] ?>" method="POST" class="form-horizontal" role="form">

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Beceri Adı</label>
									<div class="col-sm-9">
										<input type="text" name="skill_name" class="form-control" value="<?php echo $getquery['skill_name'] ?>">
									</div>
								</div>

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Beceri Oranı (%)</label>
									<div class="col-sm-9">
										<input type="text" name="skill_rate" class="form-control" value="<?php echo $getquery['skill_rate'] ?>" >
									</div>
								</div>

								<hr>
								<div class="col-md-11">
									<button class="btn btn-success pull-right" name="edit-skill">Kaydet</button>
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