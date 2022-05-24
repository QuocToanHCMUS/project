<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh sách các mục</title>


	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		.dscm{
			display: flex;
		}
		.ttdscm{
			width: 90%;
		}
		.btndscm{
			top: 35px;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="text dscm">
			<h3 class="display-3 text-center ttdscm">
				Danh sách các mục
			</h3>
			<div class="dropdown btndscm">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <?= $this->session->userdata('member'); ?>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">Quản Lý</a>
				    <a class="dropdown-item" href="http://localhost:8080/project/index.php/Login/logout">Logout</a>
				 </div>
			</div>
		</div>
	</div>
	<div class="container test">
		<div class="row">
		<?php foreach ($mangketqua as $value): ?>

			<div class="col-sm-4">

					<div class="card" style="width: 18rem;">
						<div class="card-body">
					    	<h5 class="card-title ten"><?= $value['tenthuoctinh'] ?>
					    		
					    	</h5>
					    	<p class="card-text">
					    		<small  class="text-muted">
					    			<!-- <a href="http://localhost:8080/project/index.php/Danhsachmuc/muc_edit/<?= $value['id'] ?>" class="btn btn-outline-warning">Sửa</a> -->
					    			<a href="http://localhost:8080/project/index.php/Danhsachmuc/muc_edit/<?= $value['tenthuoctinh'] ?>" class="btn btn-outline-warning">Sửa</a>
					    		</small>
					    	</p>
					  	</div>
					</div>
			</div>   <!-- end card -->
		<?php endforeach ?>

		</div>
	</div>
	

	

	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>