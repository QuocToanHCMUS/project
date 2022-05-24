<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EDIT PRODUCT</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">EDIT PRODUCT</h2>
	</div>
	<?php $dem = 0 ; ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="editProduct" method="post" enctype="multipart/form-data">
				<?php foreach ($mangdl as $key => $value): ?>
					<?php $dem++; ?>
					<h2>Slide số <?= $dem;  ?></h2>
					<div class="form-group">
						<label for="exampleInput1">Tiêu đề</label>
					    <input name="title[]" type="text" class="form-control" id="title"  
					    value="<?= $value["title"] ?>">
					</div>
					<div class="form-group">
					    <label for="exampleInput2">Mô tả Slide</label>
					    <input name="description[]" type="text" class="form-control" id="description" 
					    value="<?= $value["description"] ?>">
				 	</div>
				 	<div class="form-group">
					    <label for="exampleInput1">Link của nút</label>
					    <input name="button_link[]" type="text" class="form-control" id="button_link" 
					    value="<?= $value["button_link"] ?>">
				 	</div>
				 	<div class="form-group">
					    <label for="exampleInput2">Text của nút</label>
					    <input name="button_text[]" type="text" class="form-control" id="button_text" 
					    value="<?= $value["button_text"] ?>">
				 	</div>
				 	<div class="form-group">
					    <label for="exampleInput2">Upload Ảnh</label>
					    <img src="<?= $value["product_image"] ?>" alt="" width="40%" height=50%>
					    <input name="product_image_old[]" type="hidden" class="form-control" value="<?= $value['product_image'] ?>">
					    <input name="product_image[]" type="file" class="form-control" id="product_image">
				 	</div>
		
				<?php endforeach ?>
					<div class="form-group">
					    <input type="submit" class="form-control btn btn-outline-info" id="submit" value="Lưu"> 
				 	</div>
				</form>
				<!-- <button class="btn form-control btn-outline-warning">
					<a href="http://localhost:8080/project/index.php/Slide">Thêm Data</a>
				</button> -->

				<a href="http://localhost:8080/project/index.php/Product">
					<button class="btn form-control btn-outline-warning">
						Thêm Data
					</button>
				</a>


			</div>
		</div>
	</div>

	

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	
</body>
</html>