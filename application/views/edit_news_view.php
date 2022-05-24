<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EDIT NEWS</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script type="text/javascript" src="http://localhost:8080/project/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="http://localhost:8080/project/ckfinder/ckfinder.js"></script>
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">EDIT NEWS</h2>
	</div>
	<?php $dem = 0 ; ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="editNews" method="post" enctype="multipart/form-data">
				<?php foreach ($mangdl as $key => $value): ?>
					<?php $dem++; ?>
					<h2>Slide số <?= $dem;  ?></h2>
					<div class="form-group">
						<label for="exampleInput1">Tiêu đề</label>
					    <input name="title[]" type="text" class="form-control" id="title"  
					    value="<?= $value["title"] ?>">
					</div>
					<div class="form-group">
					    <label for="formGroupExampleInput">Danh mục tin</label>
						<!-- <select name="iddanhmuc[]"id="iddanhmuc"class="form-control">
						</select> -->
						<input name="iddanhmuc[]" type="text" class="form-control" id="title"  
					    value="<?= $value["iddanhmuc"] ?>">
				 	</div>
				 	<div class="form-group">
					    <label for="exampleInput1">Link của nút</label>
					    <input name="button_link[]" type="text" class="form-control" id="button_link" 
					    value="<?= $value["button_link"] ?>">
				 	</div>
				 	<div class="form-group">
					    <label for="formGroupExampleInput">Nội dung tin</label>
						<textarea name="noidungtin[]" id="noidungtin" class="noidungtin" cols="30" rows="10" >
						</textarea>
						 <input name="noidungtin_old[]" type="text" class="form-control" id="button_link" 
					    value="<?= $value["noidungtin"] ?>">
				 	</div>
				 	<div class="form-group">
					    <label for="exampleInput2">Text của nút</label>
					    <input name="button_text[]" type="text" class="form-control" id="button_text" 
					    value="<?= $value["button_text"] ?>">
				 	</div>
				 	<div class="form-group">
					    <label for="exampleInput2">Upload Ảnh</label>
					    <img src="<?= $value["news_image"] ?>" alt="" width="40%" height=50%>
					    <input name="news_image_old[]" type="hidden" class="form-control" value="<?= $value['news_image'] ?>">
					    <input name="news_image[]" type="file" class="form-control" id="news_image">
				 	</div>





				 	
		
				<?php endforeach ?>
					<div class="form-group">
					    <input type="submit" class="form-control btn btn-outline-info" id="submit" value="Lưu"> 
				 	</div>
				</form>
				<!-- <button class="btn form-control btn-outline-warning">
					<a href="http://localhost:8080/project/index.php/Slide">Thêm Data</a>
				</button> -->

				<a href="http://localhost:8080/project/index.php/News">
					<button class="btn form-control btn-outline-warning">
						Thêm Data
					</button>
				</a>


			</div>
		</div>
	</div>

	
	<script type="text/javascript">
		CKEDITOR.replace('noidungtin',{
			filebrowserBrowseUrl: 'http://localhost:8080/project/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl: 'http://localhost:8080/project/ckfinder/ckfinder.html?Type=Images',
			findbrowserUploadUrl:'http://localhost:8080/project/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl: 'http://localhost:8080/project/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
		})
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	
</body>
</html>