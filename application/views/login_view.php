<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng Nhập</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">Login</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="Login/checkAccount" method="post" enctype="multipart/form-data">
					<div class="form-group">
					    <label for="exampleInput1">Email</label>
					    <input name="email" type="text" class="form-control" id="email" placeholder="Email">
				 	</div>
				 	<div class="form-group">
					    <label for="exampleInput2">Password</label>
					    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
					    <div id="eye">
					    	<i class='fas fa-eye'></i>
					    </div>
				 	</div>
				 	
				 	<div class="form-group">
					    <input type="submit" class="form-control btn btn-outline-success" id="submit" value="Đăng Nhập">
				 	</div>
					

					
				</form>


			</div>
		</div>
	</div>
	

	

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('#eye').click(function(){
		        $('#eye').toggleClass('open');
		        //$(this).children('i').toggleClass('fas fa-eye');
		        if($('#eye').hasClass('open')){
		            $('#eye').prev().attr('type', 'text');
		        }else{
		            $('#eye').prev().attr('type', 'password');
		        }
		    });
		});
	</script>
</body>
</html>