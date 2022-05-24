<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng Ký</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

	<script type="text/javascript">
        function validate() {
  
            // var sdt = document.getElementById('sdt').value;
		    var email = document.getElementById('email').value;
		    var psw = document.getElementById('password').value;
		    var psw_repeat = document.getElementById('prepassword').value;

		    // var sdtcheck = /([\+84|84|0]+(3|5|7|8|9|1[2|6|8|9]))+([0-9]{8})\b/;
		    var emailcheck = /^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
		    var pswcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9@#$%^&*]{8,15}$/;

		    // if (sdtcheck.test(sdt)) {
		    //   document.getElementById('sdt').innerHTML = "";
		    // } else {
		    //   document.getElementById('sdt').innerHTML = "SDT không đúng";
		    //   return false;
		    // }
		    if (emailcheck.test(email)) {
		      document.getElementById('mail').innerHTML = "";
		    } else {
		      document.getElementById('mail').innerHTML = "**Email không hợp lệ";
		      return false;
		    }
		    if (pswcheck.test(psw)) {
		      document.getElementById('password').innerHTML = "";
		    } else {
		      document.getElementById('password').innerHTML = "**Should not contain digits and special characters";
		      return false;
		    }
		    if (psw.match(psw_repeat)) {
		      document.getElementById('prepassword').innerHTML = "";
		    } else {
		      document.getElementById('prepassword').innerHTML = "**Password doesnot match";
		      return false;
		    }
        }
    </script>
	
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">Register</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="Register/addUser" method="post" enctype="multipart/form-data" onsubmit="return validate()">
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
					    <label for="exampleInput1">Pre-Password</label>
					    <input name="prepassword" type="password" class="form-control" id="prepassword" placeholder="Pre-Password">
					    <div id="eye1">
					    	<i class='fas fa-eye'></i>
					    </div>
				 	</div>
				 	<div class="form-group">
					    <label for="exampleInput2">Số điện thoại</label>
					    <input name="sdt" type="text" class="form-control" id="sdt" placeholder="Số Điện Thoại">
				 	</div>

				 	<!-- bổ sung -->
				 	<div class="form-group">
					    <!-- kiểm tra vị trí -->
					    <input name="vitri" type="hidden" class="form-control" id="vitri" value="0">
				 	</div>
				 	<div class="form-group">
					    <input type="submit" class="form-control btn btn-outline-info" id="submit" value="Đăng Ký">
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
	<script type="text/javascript">
		$(document).ready(function(){
		    $('#eye1').click(function(){
		        $('#eye1').toggleClass('open');
		        //$(this).children('i').toggleClass('fas fa-eye');
		        if($('#eye1').hasClass('open')){
		            $('#eye1').prev().attr('type', 'text');
		        }else{
		            $('#eye1').prev().attr('type', 'password');
		        }
		    });
		});
	</script>
</body>
</html>