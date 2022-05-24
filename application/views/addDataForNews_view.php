<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADD NEWS</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script type="text/javascript" src="http://localhost:8080/project/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="http://localhost:8080/project/ckfinder/ckfinder.js"></script>
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">ADD NEWS</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="News/addNews" method="post" enctype="multipart/form-data">
					<div class="form-group">
					    <label for="exampleInput1">Tiêu đề</label>
					    <input name="title" type="text" class="form-control" id="title" placeholder="Tiêu Đề">
				 	</div>
				 	<!-- <div class="form-group">
					    <label for="exampleInput2">Mô tả Slide</label>
					    <input name="description" type="text" class="form-control" id="description" placeholder="Mô tả Slide">
				 	</div> -->
				 	<div class="form-group">
					    <label for="formGroupExampleInput">Danh mục tin</label>
						<select name="iddanhmuc"id=""class="form-control">
						       <option value="Tuyển Dụng">Tuyển Dụng</option>
						       <option value="Sản Phẩm mới">Sản Phẩm mới</option>
						</select>
				 	</div>
				 	<div class="form-group">
					    <label for="formGroupExampleInput">Nội dung tin</label>
						<textarea name="noidungtin" id="noidungtin" class="noidungtin" cols="30" rows="10">
						</textarea>
				 	</div>

				 	<div class="form-group">
					    <label for="exampleInput1">Link của nút</label>
					    <input name="button_link" type="text" class="form-control" id="button_link" placeholder="Link của nút">
				 	</div>
				 	<div class="form-group">
					    <label for="exampleInput2">Text của nút</label>
					    <input name="button_text" type="text" class="form-control" id="button_text" placeholder="Text của nút">
				 	</div>
				 	<div class="form-group">
					    <label for="exampleInput2">Upload Ảnh</label>
					    <input name="news_image" type="file" class="form-control" id="news_image">
				 	</div>
				 	<div class="form-group">
					    <input type="submit" class="form-control btn btn-outline-info" id="submit" value="Thêm">
				 	</div>
					

					
				</form>


			</div>
		</div>
	</div>
	<script type="text/javascript">
		// CKEDITOR.replace( 'noidungtin' );
		CKEDITOR.replace('noidungtin',{
			filebrowserBrowseUrl: 'http://localhost:8080/project/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl: 'http://localhost:8080/project/ckfinder/ckfinder.html?Type=Images',
			findbrowserUploadUrl:'http://localhost:8080/project/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl: 'http://localhost:8080/project/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
		})
		 // CKEDITOR.replace('noidungtin', 
   //  {
   //    filebrowserBrowseUrl: 'http://localhost:8080/project/ckfinder/ckfinder.html',
   //    filebrowserImageBrowseUrl: 'http://localhost:8080/project/ckfinder/ckfinder.html?type=Images',
   //    filebrowserFlashBrowseUrl: 'http://localhost:8080/project/ckfinder/ckfinder.html?type=Flash',
   //   filebrowserUploadUrl:
   //     'http://localhost:8080/project/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Files&currentFolder=/images/',
   //   filebrowserImageUploadUrl:
   //     'http://localhost:8080/project/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Images&currentFolder=/images/',
   //   filebrowserFlashUploadUrl: 'http://localhost:8080/project/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash'
   //  });
// 		CKEDITOR.replace( 'noidungtin', {
// 	filebrowserBrowseUrl: '/project/ckfinder/ckfinder.html',
// 	filebrowserUploadUrl: '/project/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
// } );
	</script>
	

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	
</body>
</html>