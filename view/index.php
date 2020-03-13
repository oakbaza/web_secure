<!doctype html>
<html lang="en">
	<head>
		<title>E-gai</title>
		<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">
		<?php include_once('head.php');?>
		
	<style>
		.profile-img {
			width: 96px;
			height: 96px;
			margin: 0 auto 10px;
			display: block;
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
			border-radius: 50%;
		}
		
		.image-area {
			border: 2px dashed rgba(0, 0, 0);
			padding: 1rem;
			position: relative;
		}

		.image-area::before {
			content: 'Uploaded image result';
			color: rgba(0, 0, 0);
			font-weight: bold;
			text-transform: uppercase;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size: 0.8rem;
			z-index: 1;
		}

		.image-area img {
			z-index: 2;
			position: relative;
		}
    </style>
	</head>
	<script>
		$(document).ready(function(){
			$('.datepicker').datepicker({
				format:'dd/mm/yyyy'
			});
			$("#register-form").hide();
			
			$(".register-form-link").click(function(e){
				$("#login-form").slideUp(0);	
				$("#register-form").fadeIn(300);	
			});

			$(".login-form-link").click(function(e){
				$("#register-form").slideUp(0);
				$("#login-form").fadeIn(300);	
			});

			$(".forgot-form-link").click(function(e){
				$("#login-form").slideUp(0);	
			});
			
			/*  ==========================================
				SHOW UPLOADED IMAGE
			* ========================================== */
			function readURL(input) {
			  if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function(e) {
				  $('#imageResult')
					.attr('src', e.target.result);
				};
				reader.readAsDataURL(input.files[0]);
			  }
			}

			$(function() {
			  $('#upload').on('change', function() {
				readURL(input);
			  });
			});

			/*  ==========================================
				SHOW UPLOADED IMAGE NAME
			* ========================================== */
			var input = document.getElementById('upload');
			var infoArea = document.getElementById('upload-label');

			input.addEventListener('change', showFileName);

			function showFileName(event) {
			  var input = event.srcElement;
			  var fileName = input.files[0].name;
			  infoArea.textContent = 'File name: ' + fileName;
			}
		});
	</script>
	<body>
		<div class="container py-5">
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-12 text-center mb-5">
					<img class="profile-img" src="../pic/chicken.png">
					</div>
					<div class="row">
						<div class="col-md-6 mx-auto">
						
							<!-- form card login -->
							<div class="card rounded-0" id="login-form">
								<div class="card-header">
									<h3 class="mb-0">User Login</h3>
								</div>
								<div class="card-body">
									<form class="form"  id="formLogin" method="POST" action="../controller/Login.php" >
										<div class="form-group">
											<label for="username">Username</label>
											<input type="text" class="form-control form-control-lg rounded-0" name="username" required>
										</div>
										<div class="form-group">
											<label for="password" >Password</label>
											<input type="password" class="form-control form-control-lg rounded-0" name="password" required>
								
										</div>
										<div>
											<label class="custom-control custom-checkbox">
												<a href="javascript:void('register-form-link');" class="register-form-link">Register</a>
											</label>
											<label class="custom-control custom-checkbox">
												<a href="https://www.facebook.com/Echickens/" target="_blank">Contact Us!</a>
											</label>
											<!--<label class="custom-control custom-checkbox">
											 <a href="javascript:void('forgot-form-link');" class="forgot-form-link">Forgot Password</a>
											</label> -->
										</div>
										<input type="submit" class="btn btn-success btn-lg float-right" value="Login" name="login">
									</form>
								</div>
							</div>
							<!-- /form card login end-->
							
							<!-- form card register -->
							<div class="card rounded-0" id="register-form">
								<div class="card-header">
									<h3 class="mb-0">New Account</h3>
								</div>
								<div class="card-body">
									<form class="form" id="formRegis"  method="POST" enctype="multipart/form-data" action="../controller/Register.php">
										<div class="row"> 
											<div class="input-group mb-3">
											  <div class="input-group-prepend ">
												<span class="input-group-text " id="basic-addon1">Username</span>
											  </div>
											  <input type="text" class="form-control" name="username_regis" placeholder="Username" aria-label="Username" required>
											</div>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">Password</span>
											  </div>
											  <input type="password" name="password_regis" class="form-control" placeholder="Password" aria-label="Password" required>
											</div>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text">Firstname</span>
											  </div>
												<input type="text" aria-label="Firstname" class="form-control" name="fname_regis" placeholder="Firstname" required>
												<span class="input-group-text">Lastname
												</span><input type="text" aria-label="Last name" name="lname_regis" class="form-control" placeholder="Lastname" required>
											</div>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">Birthdate</span>
											  </div>
											  <input class="form-control datepicker" name="birthdate_regis" placeholder="Birthdate" aria-label="Birthdate" required>
											</div>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">Email</span>
											  </div>
											  <input type="email" class="form-control" name="email_regis" placeholder="example@xxxx.com" aria-label="Email" required>
											</div>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text">Address</span>
											  </div>
											  <textarea name="address_regis" class="form-control" aria-label="With textarea" required></textarea>
											</div>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="inputGroupFileAddon01" >Upload</span>
											  </div>
											  <div class="custom-file">
												<input type="file" class="custom-file-input" name="upload_regis" id="upload" type="file" onchange="readURL(this);" required>
												<label class="custom-file-label" for="upload_pic">Choose file</label>
											  </div>
											</div>
										</div>
										
										<!-- Uploaded image area-->
										<p class="font-italic text-center">The image uploaded will be rendered inside the box below.</p>
										<div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
										<div>
											<label class="custom-control custom-checkbox">
											 I have an account. <a href="javascript:void('register-form-load');" class="login-form-link">Login.</a>
											</label>
										</div>
										<input type="submit" class="btn btn-success btn-lg float-right" id="btnLogin" name="submit">
									</form>
								</div>
							</div>
							<!-- /form card register end -->
							
							<!-- form card forgot -->
							<!--<div class="card rounded-0" id="forgot-form">
								<div class="card-header">
									<h3 class="mb-0">Reset Password</h3>
								</div>
								<div class="card-body">
									<form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
										<div class="form-group">
											<label>E-mail</label>
											<input type="email" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
					   
										</div>
										<div>
										<label class="custom-control custom-checkbox">
											 <a href="javascript:void('register-form-link');" class="register-form-link">Register</a>
											</label>
											<label class="custom-control custom-checkbox">
											 <a href="javascript:void('login-form-link');" class="login-form-link">Login</a>
											</label>
										</div>
										<button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Reset Password</button>
									</form>
								</div>
							</div> -->
							<!-- /form card forgot end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>